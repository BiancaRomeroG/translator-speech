@section('title', 'Mis subscripciones')

<x-app-layout>
    <div class="bg-white p-10 w-full">
        @livewire('payment.subscriptions')
    </div>
    <div class="bg-white p-10 w-full">
        @livewire('payment.payment-method')
    </div>
    <script defer src="{{ asset('js/payments/hover-subscription.js') }}"></script>
</x-app-layout>
