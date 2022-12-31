@section('title', 'Pagos')
@section('script-css')
    <link rel="stylesheet" href="{{ asset('css/stripe-element.css') }}" type="text/css">
@endsection
<x-app-layout>
    <div class="grid grid-cols-1 lg:grid-cols-2">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                @if ($error == 'error-subs')
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Ha ocurrido un error!',
                            text: 'Vuelve a realizar el pago, si el problema persiste comunicate con los desarrolladores.',

                        })
                    </script>
                @endif
            @endforeach
        @endif
        <div class="back-col p-5 lg:p-24 bg-blue-500">
            <div class="flex">
                <h1 class="head text-blue-900">Subscripción</h1>
                <h2 class="pay text-orange-600 bg-yellow-200 uppercase ml-10 text-xs rounded-md text-center p-1 h-6 mt-4">Pago en línea
                </h2>
            </div>
            <div class="block py-5">
                <p class="parrafo text-bold text-xl text-blue-300" style="font-weight: 600">Suscribete al plan <strong
                        class="uppercase">{{ $plan->name }}</strong></p>
                <div class="flex my-3">
                    <p class="text-gray-100 text-4xl"><strong>${{ $plan->price / 100 }}.00</strong></p>
                    <div class="block text-gray-200 text-lg">
                        <p class="ml-3">por</p>
                        <p class="ml-3 -mt-3">mes</p>
                    </div>
                </div>
                <p class="parrafo text-bold text-lg font-thin text-blue-300" style="font-weight: 500">{{ $plan->description }}</p>
            </div>
            <div class="flex my-3">
                <img src="https://stripe-camo.global.ssl.fastly.net/cb5e5595d1cfb7bb832134861cb477adc2dd0873513835f77d3cb86a485ac4a7/68747470733a2f2f66696c65732e7374726970652e636f6d2f6c696e6b732f4d44423859574e6a64463878534559784d6e5a455656564e546e42575233466b66475a735833526c63335266595777315546526b516a6846536c5a33616c49316146686b596b5a6e64334e52303035736e36565a6c74"
                    class="rounded-xl" alt="Logo Stripe" width="50" height="50">
                <div class="block w-full">
                    <div class="grid grid-cols-2 justify-between">
                        <p class="ml-5 text-gray-200">Plan</p>
                        <p class="grid justify-end text-gray-200"><strong>${{ $plan->price / 100 }}.00</strong></p>
                    </div>
                    <div class="flex mt-1">
                        <p class="ml-5 text-gray-200"><strong class="uppercase">{{ $plan->name }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="block mt-5 lg:ml-16">
                <ul>
                    @foreach ($plan->planDetails as $plan_detail)
                        <li class="flex items-center">
                            <div class="p-2 text-gray-300 rounded-full fill-current ">
                                <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <span class="ml-3 text-lg parrafo text-blue-300">{{ $plan_detail->description }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-white items-center">
            <div class="p-20">
                {{-- <button class="flex bg-black text-white w-full p-4 rounded-md justify-center">
                    <img src="{{ asset('google-icon.png') }}" alt="Google Pay" width="30" height="30">
                    Pay
                </button>
                <br>
                <div class="flex">
                    <hr class="my-3 w-16 lg:w-32">
                    <p class="text-gray-300 mx-2">O escoge otro método de pago</p>
                    <hr class="my-3 w-16 lg:w-32">
                </div> --}}
                <form action="{{ route('plan.process') }}" method="POST" id="subscribe-form">
                    @csrf
                    <input type="hidden" name="plan_id" value="{{ $plan->plan_id }}">
                    <input type="hidden" name="plan_name" value="{{ $plan->name }}">
                    <div class="my-4">
                        <label class="block text-gray-500 text-sm font-semibold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" name="email">
                    </div>
                    <div class="my-4">
                        <label class="block text-gray-500 text-lg font-semibold mb-2" for="payment-method">
                            M&eacute;todo de pago
                        </label>
                        <button id="payment-method"
                            class="grid border justify-start border-gray-700 rounded-xl w-1/2 p-3 hover:bg-blue-50">
                            <i class="fa-solid fa-credit-card"></i>
                            <p class="ml-3">Tarjeta</p>
                        </button>

                        <label class="grid grid-cols-2 text-gray-500 text-sm font-semibold mb-2 mt-5 w-full"
                            for="email">
                            <p>Información de tarjeta</p>
                            <p class="grid justify-end text-xs text-red-700" id="card-errors">

                            </p>
                        </label>
                        <div id="card-element">
                        </div>


                        <label class="block text-gray-500 text-sm font-semibold mb-2 mt-5" for="name">
                            Nombre del titular
                        </label>
                        <input
                            class="shadow appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="card-holder-name" type="text" name="card-holder-name">

                        <label class="block text-gray-500 text-sm font-semibold mb-2 mt-5" for="country">
                            Pais
                        </label>
                        <select name="country" id="country"
                            class="shadow appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="0" disabled selected>Selecciona tu país</option>
                            <option value="1">Argentina</option>
                            <option value="2">Brasil</option>
                            <option value="3">Bolivia</option>
                            <option value="4">Chile</option>
                            <option value="5">Colombia</option>
                            <option value="6">Ecuador</option>
                            <option value="7">Guyana Francesa</option>
                            <option value="8">Paraguay</option>
                            <option value="9">Uruguay</option>
                            <option value="10">Venezuela</option>
                        </select>
                        <button id="card-button" data-secret="{{ $intent->client_secret }}"
                            class="flex back-col text-white w-full p-4 rounded-md justify-center mt-10 bg-green-500">
                            Procesar pago
                        </button>
                        <p class="text-gray-300 text-center mt-10">Al confirmar su suscripción, permite que Translator
                            Speech
                            cargue en su tarjeta
                            este pago y pagos futuros de acuerdo con sus términos. Siempre puedes cancelar tu
                            suscripción.
                        </p>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe_key = Stripe('{{ env('STRIPE_KEY') }}');
    </script>
    <script defer src="{{ asset('js/stripe/card-element.js') }}"></script>
    <script src="{{ asset('js/payments/loading-payment.js') }}"></script>
</x-app-layout>
