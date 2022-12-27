<?php

namespace App\Http\Livewire\Invoice;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Invoice extends Component
{
    public $subscription;

    public function mount() {
        $user = Auth::user();
        $this->subscription = CashierSubscription::join(
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
    }

    public function render()
    {
        return view('livewire.invoice.invoice');
    }
}
