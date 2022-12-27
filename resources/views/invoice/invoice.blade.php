@section('title', 'Factura')
<x-app-layout>
    <!-- component -->
<div class="antialiased sans-serif min-h-screen bg-white" style="min-height: 900px">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<div 
		class="container mx-auto py-6 px-4"
		x-data="invoices()"
		x-cloak
	>
		<div class="flex justify-between">
			<h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Factura</h2>

			<div>
				<div class="relative mr-4 inline-block">
					<div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printInvoice()">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
							<path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
							<rect x="7" y="13" width="10" height="8" rx="2" />
						</svg>				  
					</div>
					<div x-show.transition="showTooltip" class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
						Imprimir esta factura
					</div>
				</div>
				
				<div class="relative inline-block">
					<div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip2 = true" @mouseleave="showTooltip2 = false" @click="window.location.reload()">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -5v5h5" />
							<path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 5v-5h-5" />
						</svg>	  
					</div>
					<div x-show.transition="showTooltip2" class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
						Recargar página
					</div>
				</div>
			</div>
		</div>

		<div class="flex mb-8 justify-between">
			<div class="w-2/4">
				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">No. Factura</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-init="invoiceNumber = '{{ $subscription->name_sub }}'" x-model="invoiceNumber" disabled>
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Fecha</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 " type="text" id="datepicker1" placeholder="eg. 17 Feb, 2020" x-model="invoiceDate" x-init="invoiceDate = '{{ $subscription->updated_at->toFormattedDateString() }}'" disabled>
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Fecha venc.</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="datepicker2" type="text" placeholder="eg. 17 Mar, 2020" x-model="invoiceDueDate" x-init="invoiceDueDate = '{{ $subscription->updated_at->addMonth()->toFormattedDateString() }}'" disabled>
					</div>
				</div>
			</div>
			<div>
				<div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
					<img id="image" class="object-cover w-full h-32" src="{{ asset('google-icon.png') }}" />
					
					<div class="absolute top-0 left-0 right-0 bottom-0 w-full block cursor-pointer flex items-center justify-center" onClick="document.getElementById('fileInput').click()">
						<button type="button"
							style="background-color: rgba(255, 255, 255, 0.65)"
							class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm"
						>
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
								<circle cx="12" cy="13" r="3" />
							</svg>							  
						</button>
					</div>
				</div>
				<input name="photo" id="fileInput" accept="image/*" value="{{ asset('google-icon.png') }}" class="hidden" type="file" onChange="let file = this.files[0]; 
					var reader = new FileReader();
0
					reader.onload = function (e) {
                        console.log(e.target.result);
						document.getElementById('image').src = e.target.result;
						document.getElementById('image2').src = e.target.result;
					};
                    
					reader.readAsDataURL(file);
				">
			</div>
		</div>


		<div class="flex flex-wrap justify-between mb-8">
			<div class="w-full md:w-1/3 mb-2 md:mb-0">
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Facturar/Enviar a:</label>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Billing company name" x-init="billing.name = '{{ $user->name }}'" x-model="billing.name">
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Billing company address" x-init="billing.address = '{{ $user->email }}'" x-model="billing.address">
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Additional info" x-init="billing.extra = '+591 {{ $user->phone }}'" x-model="billing.extra">
			</div>
			<div class="w-full md:w-1/3">
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Desde:</label>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Your company name" x-init="from.name = 'Software Systran'" x-model="from.name">

				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Your company address" x-init="from.address = 'Av. San Martín - Edificio GreenTower Oficina 123'" x-model="from.address">

				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Additional info" x-init="from.extra = '+591 69172849'" x-model="from.extra">
			</div>
		</div>

		<div class="flex -mx-1 border-b py-2 items-start">
			<div class="flex-1 px-1">
				<p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Descripción</p>
			</div>

			<div class="px-1 w-20 text-right">
				<p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Unidades</p>
			</div>

			<div class="px-1 w-32 text-right">
				<p class="leading-none">
					<span class="block uppercase tracking-wide text-sm font-bold text-gray-800">$/unidad</span>
					<span class="font-medium text-xs text-gray-500">(s/Incl. IVA)</span>
				</p>
			</div>

			<div class="px-1 w-32 text-right">
				<p class="leading-none">
					<span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Monto</span>
					<span class="font-medium text-xs text-gray-500">(s/Incl. IVA)</span>
				</p>
			</div>

			<div class="px-1 w-20 text-center">
			</div>
		</div>
		<div class="flex -mx-1 py-2 border-b">
			<div class="flex-1 px-1">
				<p class="text-gray-800" x-text="'Compra de una suscripción mensual al plan {{ $subscription->billing_method }}  {{ $subscription->description }}'"></p>
			</div>

			<div class="px-1 w-20 text-right">
				<p class="text-gray-800" x-text="1"></p>
			</div>

			<div class="px-1 w-32 text-right">
				<p class="text-gray-800" x-text="'{{ $subscription->price / 100 }}'"></p>
			</div>

			<div class="px-1 w-32 text-right">
				<p class="text-gray-800" x-text="'{{ $subscription->price / 100 }}'"></p>
			</div>

			<div class="px-1 w-20 text-right">
			</div>
		</div>


		<div class="py-2 ml-auto mt-5 w-full sm:w-2/4 lg:w-1/4">
			<div class="flex justify-between mb-3">
				<div class="text-gray-800 text-right flex-1">Total s/incl. IVA</div>
				<div class="text-right w-40">
					<div class="text-gray-800 font-medium">{{ ($subscription->price / 100) }} $</div>
				</div>
			</div>
			<div class="flex justify-between mb-4">
				<div class="text-sm text-gray-600 text-right flex-1">IVA(13%) s/incl. en Total</div>
				<div class="text-right w-40">
					<div class="text-sm text-gray-600">{{ ($subscription->price / 100) * 0.13 }} $</div>
				</div>
			</div>
		
			<div class="py-2 border-t border-b">
				<div class="flex justify-between">
					<div class="text-xl text-gray-600 text-right flex-1">Monto total</div>
					<div class="text-right w-40">
						<div class="text-xl text-gray-800 font-bold">{{ ($subscription->price / 100) + ($subscription->price / 100) * 0.13 }} $</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Print Template -->
		<div id="js-print-template" x-ref="printTemplate" class="hidden">
			<div class="mb-8 flex justify-between">
				<div>
					<h2 class="text-3xl font-bold mb-6 pb-2 tracking-wider uppercase">Factura</h2>

					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">No. Factura</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="invoiceNumber"></div>
					</div>
		
					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Fecha</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="invoiceDate"></div>
					</div>
		
					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Fecha venc.</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="invoiceDueDate"></div>
					</div>
				</div>
				<div class="pr-5">
					<div class="w-32 h-32 mb-1 overflow-hidden">
						<img id="image2" class="object-cover w-20 h-20" />
					</div>
				</div>
			</div>

			<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Facturar/Enviar a:</label>
					<div>
						<div x-text="billing.name"></div>
						<div x-text="billing.address"></div>
						<div x-text="billing.extra"></div>
					</div>
				</div>
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Desde:</label>
					<div>
						<div x-text="from.name"></div>
						<div x-text="from.address"></div>
						<div x-text="from.extra"></div>
					</div>
				</div>
			</div>

			<div class="flex flex-wrap -mx-1 border-b py-2 items-start">
				<div class="flex-1 px-1">
					<p class="text-gray-600 uppercase tracking-wide text-xs font-bold">Descripcion</p>
				</div>
	
				<div class="px-1 w-32 text-right">
					<p class="text-gray-600 uppercase tracking-wide text-xs font-bold">Unidades</p>
				</div>
	
				<div class="px-1 w-32 text-right">
					<p class="leading-none">
						<span class="block uppercase tracking-wide text-xs font-bold text-gray-600">$/Unidad</span>
						<span class="font-medium text-xs text-gray-500">(s/Incl. IVA)</span>
					</p>
				</div>
	
				<div class="px-1 w-32 text-right">
					<p class="leading-none">
						<span class="block uppercase tracking-wide text-xs font-bold text-gray-600">Monto</span>
						<span class="font-medium text-xs text-gray-500">(s/Incl. IVA)</span>
					</p>
				</div>
			</div>
			<div class="flex flex-wrap -mx-1 py-2 border-b">
				<div class="flex-1 px-1">
					<p class="text-gray-800">Compra de una suscripción mensual al plan {{ $subscription->billing_method }} 
						<br>
						{{ $subscription->description }}
					</p>
				</div>

				<div class="px-1 w-32 text-right">
					<p class="text-gray-800">1</p>
				</div>

				<div class="px-1 w-32 text-right">
					<p class="text-gray-800">{{ $subscription->price / 100 }}</p>
				</div>

				<div class="px-1 w-32 text-right">
					<p class="text-gray-800">{{ $subscription->price / 100 }}</p>
				</div>
			</div>
		

			<div class="py-2 ml-auto mt-20" style="width: 320px">
				<div class="flex justify-between mb-3">
					<div class="text-gray-800 text-right flex-1">Total s/incl. IVA</div>
					<div class="text-right w-40">
						<div class="text-gray-800 font-medium">{{ ($subscription->price / 100) }} $</div>
					</div>
				</div>
				<div class="flex justify-between mb-4">
					<div class="text-sm text-gray-600 text-right flex-1">IVA(13%) s/incl. en Total</div>
					<div class="text-right w-40">
						<div class="text-sm text-gray-600">{{ ($subscription->price / 100) * 0.13 }} $</div>
					</div>
				</div>
			
				<div class="py-2 border-t border-b">
					<div class="flex justify-between">
						<div class="text-xl text-gray-600 text-right flex-1">Amount due</div>
						<div class="text-right w-40">
							<div class="text-xl text-gray-800 font-bold">{{ ($subscription->price / 100) + ($subscription->price / 100) * 0.13 }} $</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Print Template -->

	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
	<script src="{{ asset('js/invoice/invoice.js') }}"></script>
</div>
</x-app-layout>