<?php

namespace App\Http\Livewire\Payment;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Subscription as CashierSubscription;
use Livewire\Component;

class Subscriptions extends Component
{
    public $subscriptions;

    protected $listeners = ['cancelSubscription', 'resumeSubscription', 'cancelNowSubscription'];

    public function mount()
    {
        $user = Auth::user();
        $this->subscriptions = CashierSubscription::join(
            'plans',
            'plans.plan_id',
            'subscriptions.stripe_price'
        )->where(
            'subscriptions.user_id',
            $user->id
        )->select(
            'plans.*',
            'subscriptions.name as name_sub',
            'subscriptions.ends_at',
            'subscriptions.stripe_status',
            'subscriptions.stripe_id',
        )->orderBy(
            'subscriptions.created_at',
            'asc'
        )->get();

    }

    public function render()
    {
        return view('livewire.payment.subscriptions');
    }

    public function cancelSubscription($subscription_name)
    {
        $user = Auth::user();

        if ($subscription_name != null) {
            $user->subscription($subscription_name)->cancel();
            Subscriptions::mount();
        }
    }

    public function cancelNowSubscription($subscription_name)
    {
        $user = Auth::user();

        if ($subscription_name != null) {
            $user->subscription($subscription_name)->cancelNow();
            Subscriptions::mount();
        }
    }

    public function resumeSubscription($subscription_name)
    {
        $user = Auth::user();

        if ($subscription_name) {
            $user->subscription($subscription_name)->resume();
            Subscriptions::mount();
        }
    }
}
