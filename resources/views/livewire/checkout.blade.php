
<div>
	<div class="container mx-auto px-6">
		<h3 class="text-gray-700 text-2xl font-medium">Checkout</h3>
		<div class="flex flex-col lg:flex-row mt-8">


			<div x-data="setup()" class="w-full lg:w-1/2 order-2">
            		<div x-cloak x-show="activeTab===0">@include('livewire.checkout.contacts')</div>
					<div x-cloak x-show="activeTab===1">@include('livewire.checkout.payments')</div>
			</div>


			<div class="w-full mb-8 flex-shrink-0 order-1 lg:w-1/2 lg:mb-0 lg:order-2">
				<div class="flex justify-center lg:justify-end">
					<div class="border rounded-md max-w-md w-full px-4 py-3">
						<div class="flex items-center justify-between">
							<h3 class="text-gray-700 font-medium">Order total ({{count($cart)}} item)</h3>
							<span class="text-gray-600 text-sm"></span>
						</div>
						@foreach($cart as $item)
						<div class="flex justify-between mt-6">
							<div class="flex">
								<img class="h-20 w-20 object-cover rounded" src="{{ '/'.$item['image'] ?? 'defaultimage' }}" alt="">
								<div class="mx-3">
									<h3 class="text-sm text-gray-600">{{ $item['name'] ?? 'defaultname' }}</h3>
									<div x-data="{ count : {{ $item['count'] ?? 0 }} }" class="flex items-center mt-2">
										<button wire:click="increaseCount({{ $item['id'] }})" type="button" class="text-gray-500 focus:outline-none focus:text-gray-600">
											<svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
												<path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
										</button>
										<span x-text="count" class="text-gray-700 mx-2"></span>
										<button wire:click="decreaseCount({{ $item['id'] }})" type="button" class="text-gray-500 focus:outline-none focus:text-gray-600">
											<svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
												<path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
										</button>
									</div>
								</div>
							</div>
							<span class="text-gray-600">${{ $item['price'] ?? 'defaultprice' }}</span>
						</div>
						@endforeach

						<hr class="my-3">
						<div class="flex justify-between mt-6">
							<h3 class="text-lg pb-3 text-black">Total price:</h3>
							<span x-data="{ total: {{$totalPrice}} }" x-text="'$'+total" class="text-black text-lg mx-2"></span>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<script>
	function setup() {
    return {
      activeTab: 0,
      tabs: [
          "Tab No.1",
          "Tab No.2",
      ]
    };
  };
</script>

