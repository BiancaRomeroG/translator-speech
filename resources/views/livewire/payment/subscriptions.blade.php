<div>

    <header class="grid grid-cols-2 justify-between">
        <h1 class="text-black text-2xl" style="font-weight: 800">Suscripciones</h1>
        <a href="#" class="grid justify-end text-blue-600 font-semibold hover:text-black">Ver pr&oacute;xima
            factura</a>
    </header>
    <hr class="my-2">
    <div class="p-2" id="subscriptions">
        <ul>
            @foreach ($subscriptions as $subscription)
                <li class="hover:bg-blue-200 p-3" id="li-item-{{ $subscription->name_sub }}" onmouseover="inElement2('{{ $subscription->name_sub }}')" onmouseout="outElement2('{{ $subscription->name_sub }}')">
                    <input type="hidden" value="{{ $subscription->name_sub }}" id="item_payment">
                    <div class="grid lg:grid-cols-2">
                        <div class="grid justify-start">
                            <div class="flex w-full">
                                <div
                                    class="{{ !Auth::user()->subscription($subscription->name_sub)->canceled()? 'bg-color3': 'bg-gray-400' }} w-12 h-12 text-center rounded-md lg:w-10 lg:h-10">
                                    @if (!Auth::user()->subscription($subscription->name_sub)->canceled())
                                        <i class="fa-solid fa-repeat text-xl text-white pt-2"></i>
                                    @else
                                        <i class="fa-solid fa-clock text-xl text-white pt-2"></i>
            
                                    @endif


                                </div>
                                <div class="block -mt-1 ml-3">
                                    <div class="flex">
                                        <p class="mr-2">Plan <strong
                                                class="capitalize">{{ $subscription->name }}</strong></p>
                                        @if ($subscription->stripe_status == 'active')
                                            <p class="ml-16 bg-color3-1 rounded-lg px-1 text-green-700">activa</p>
                                        @else
                                            <p class="ml-16 bg-red-200 text-red-700 rounded-lg px-1">desactiva</p>
                                        @endif

                                        @if ($subscription->ends_at != null)
                                            <p class="ml-4 bg-yellow-200 rounded-lg px-1"
                                                title="Esta suscripción no se actualizará">sin recurrencia</p>
                                        @endif

                                    </div>
                                    <div class="flex">
                                        @if (!Auth::user()->subscription($subscription->name_sub)->canceled())
                                            @if ($subscription->stripe_status == 'active')
                                                <p class="text-sm text-gray-500">
                                                    @switch($subscription->billing_method)
                                                        @case('week')
                                                            Facturaci&oacute;n cada {{ $subscription->interval_count }} semana
                                                        @break

                                                        @case('month')
                                                            Facturaci&oacute;n cada {{ $subscription->interval_count }} mes
                                                        @break

                                                        @case('year')
                                                            Facturaci&oacute;n cada {{ $subscription->interval_count }} año
                                                        @break

                                                        @default
                                                    @endswitch
                                                </p>
                                                <p class="text-2xl text-gray-500 ml-2 -mt-2">•</p>
                                            @endif
                                            <p class="text-sm text-gray-400 ml-2">Pr&oacute;xima factura el
                                                @switch($subscription->billing_method)
                                                    @case('week')
                                                        {{ $subscription->created_at->addWeek(1)->format('d M') . '.' }}
                                                    @break

                                                    @case('month')
                                                        {{ $subscription->created_at->addMonth(1)->format('d M') . '.' }}
                                                    @break

                                                    @case('year')
                                                        {{ $subscription->created_at->addYear(1)->format('d M') . '.' }}
                                                    @break

                                                    @default
                                                @endswitch
                                                de {{ $subscription->price / 100 }}.00 US$</p>
                                        @else
                                            <p class="text-sm text-gray-400">Cancela el
                                                {{ $subscription->ends_at->format('d M') . '.' }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex sm:mt-2 justify-center lg:justify-end lg:mr-4 h-7">
                            <button class="border rounded-l-lg px-2 disabled:opacity-25" title="Renovar Suscripción"
                                id="resumeSubscription" value="{{ $subscription->name_sub }}"
                                {{ $subscription->ends_at == null || $subscription->stripe_status != 'active' ? 'disabled' : '' }}><i
                                    class="fa-solid fa-repeat text-md"></i></button>
                            <button class="border px-2 disabled:opacity-25" title="Cancelar Suscripción Inmediatamente"
                                id="cancelNowSubscription" value="{{ $subscription->name_sub }}"
                                {{ $subscription->ends_at != null ? 'disabled' : '' }}><i
                                    class="fa-solid fa-ban text-md"></i></button>
                            <button class="border rounded-r-lg px-2 disabled:opacity-25" title="Cancelar Renovación"
                                id="cancelSubscription" value="{{ $subscription->name_sub }}"
                                {{ $subscription->ends_at != null ? 'disabled' : '' }}><i
                                    class="fa-solid fa-xmark text-md"></i></button>
                        </div>
                    </div>

                </li>
                <hr class="my-2">
            @endforeach
        </ul>

    </div>
    
    <script src="{{ asset('js/payments/cancel-subscription.js') }}"></script>
    <script src="{{ asset('js/payments/resume-subscription.js') }}"></script>
</div>
