<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Subscription as CashierSubscription;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index() {
        $user = Auth::user();
        $subscription = CashierSubscription::join(
            'plans',
            'plans.plan_id',
            'subscriptions.stripe_price'
        )->where(
            'subscriptions.user_id',
            $user->id
        )->where(
            'subscriptions.ends_at',
            null
        )->select(
            'plans.*',
            'subscriptions.name as name_sub',
            'subscriptions.ends_at',
            'subscriptions.stripe_status',
            'subscriptions.stripe_id',
        )->first();
        
        return view('invoice.invoice', compact('subscription', 'user'));
    }
}
