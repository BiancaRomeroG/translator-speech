<div>

    <header class="grid grid-cols-2 justify-between">
        <h1 class="transition text-blue-500 text-2xl hover:-translate-y-1" style="font-weight: 800">Métodos de pago</h1>

    </header>
    <hr class="my-2">
    <div class="p-2" id="subscriptions">
        <ul>
            @foreach (Auth::user()->paymentMethods() as $paymentMethod)
                <li class="hover:bg-blue-50 py-3" id="li-item2-{{ $paymentMethod->id }}" onmouseover="inElement('{{ $paymentMethod->id }}')" onmouseout="outElement('{{ $paymentMethod->id }}')">
                    <input type="hidden" value="{{ $paymentMethod->id }}" id="item_payment2">
                    <div class="grid lg:grid-cols-2 ">
                        <div class="grid justify-start">
                            <div class="flex w-full">
                                <div class="bg-whitew-12 h-12 text-center rounded-md lg:w-10 lg:h-10">
                                    @if ($paymentMethod->card->brand == 'visa')
                                        <i class="fa-brands fa-cc-visa text-blue-800 text-2xl"></i>
                                    @endif
                                    @if ($paymentMethod->card->brand == 'mastercard')
                                        <i class="fa-brands fa-cc-mastercard text-blue-500 text-2xl"></i>
                                    @endif
                                </div>
                                <div class="block -mt-1 ml-3">
                                    <div class="flex">
                                        <p class="mr-2 capitalize">{{ Auth::user()->pm_type }}. ••••
                                            .{{ Auth::user()->pm_last_four }}</strong>
                                        </p>

                                        @if ($paymentMethod->customer == Auth::user()->stripe_id)
                                            <p class="ml-16 bg-color2 text-blue-700 text-sm rounded-lg px-1">
                                                Predeterminado
                                            </p>
                                        @endif



                                    </div>
                                    <div class="flex">
                                        <p class="text-sm text-gray-500">
                                            Caduca el
                                            {{ $paymentMethod->card->exp_month }}/{{ $paymentMethod->card->exp_year }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex sm:mt-2 justify-center lg:justify-end lg:mr-4 h-7 hover:text-white">
                            <button class="border rounded-l-xl rounded-r-xl px-2 hover:bg-red-600" title="Eliminar método de pago" id="deletePay"
                                value="{{ $paymentMethod->id }}"><i class="fa-solid fa-trash text-md hover:rotate-12"></i></button>
                        </div>
                    </div>

                </li>
                <hr class="my-2">
            @endforeach
        </ul>

    </div>

    <script defer src="{{ asset('js/payments/delete-payment-method.js') }}"></script>

</div>
