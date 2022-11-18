<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Spatie\Permission\Models\Role;
class SubscriptionController extends Controller
{
    public function checkout($planId) {
        $user = Auth::user();
        $plan = Plan::where('plan_id', $planId)->first();
        return view('payment.checkout', [
            'plan' => $plan,
            'intent' => $user->createSetupIntent(),
        ]);
    }

    public function processPlan(Request $request) {
        $user = Auth::user();
        $user->createOrGetStripeCustomer();
        $paymentMethod = null;
        $paymentMethod = $request->payment_method;
        

        if ($paymentMethod != null) 
            $paymentMethod = $user->addPaymentMethod($paymentMethod);

        $plan = $request->plan_id;

        try {
            $user->newSubscription(
                $paymentMethod->id, $plan
            )->create(($paymentMethod != null) ? $paymentMethod->id : '');
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' => 'error-subs'
            ]);
        }
        $nombrePlan= Plan::where('name',$request->plan_name)->first();
        switch($nombrePlan->name){
            case "basic":
                $rolA = $user->roles()->first()->name;
                $user->removeRole($rolA);
                $user->assignRole('basico');
                break;
             case "standard":
                $rolA = $user->roles()->first()->name;
                $user->removeRole($rolA);
                $user->assignRole('estandar');
                break;
             case "premium":
                $rolA = $user->roles()->first()->name;
                $user->removeRole($rolA);
                $user->assignRole('premium');
                break;
                
        }
        return to_route('subscription.all');
    }

    public function allSubscriptions() {
        return view('payment.subscription');
    }
}
