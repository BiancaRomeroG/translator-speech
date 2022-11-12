<?php

namespace App\Http\Livewire\Payment;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentMethod extends Component
{
    protected $listeners = ['deletePaymentMethod'];

    public function render()
    {
        return view('livewire.payment.payment-method');
    }

    public function paymentMethod() {
        foreach (Auth::user()->paymentMethods() as $pay) {
            dd($pay);
        }
    }

    public function deletePaymentMethod($idPaymentMethod) {
        foreach (Auth::user()->paymentMethods() as $pay) 
            if ($pay->id === $idPaymentMethod) $pay->delete();
    }

}
