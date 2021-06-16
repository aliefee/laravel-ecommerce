<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">


            <div class="w-full">
				<div class="flex justify-center">
					<div class="border rounded-md max-w-md w-full px-4 py-3">
						<div class="flex items-center justify-between">
							<h3 class="text-gray-700 font-medium">Order total ({{count($cart)}} item)</h3>
							<span class="text-gray-600 text-sm"></span>
						</div>

            		@foreach($cart as $item)
						<div class="flex justify-between mt-6">
							<div class="flex">
								<img class="h-20 w-20 object-cover rounded" src="{{ '/'.$item['image'] ?? 'defaultimage' }}" alt="">
								<div class="mx-3 mt-5">
									<h3 class="text-lg text-gray-600">{{ $item['name'] ?? 'defaultname' }}</h3>
								</div>
							</div>
							<div class="flex justiy-end">
								<span class="text-gray-600">{{ $item['count'] ?? 'defaultprice' }}x&nbsp</span>
								<span class="text-blue-600">${{ $item['price'] ?? 'defaultprice' }}</span>
							</div>
						</div>
					@endforeach

						<hr class="my-3">
						<div class="flex flex-col mt-6">
							<span class="text-gray-900">Name: {{ $u_name ?? 'defaultaddress' }}</span>
							<span class="text-gray-900">Surname: {{ $u_surname ?? 'defaultaddress' }}</span>
							<span class="text-gray-900">Delivery address: {{ $address ?? 'defaultaddress' }}</span>
							<span class="text-gray-900">Postal Code: {{ $postal ?? 'defaultaddress' }}</span>
						</div>
						<div class="flex justify-center mt-6">
							<button type="button" wire:click="closeModalPopover()" class="border-2 border-gray-500 rounded-full font-bold text-gray-500 px-4 py-3 transition duration-300 ease-in-out hover:bg-gray-500 hover:text-white mr-6">
    						Close
							</button>
						</div>
					</div>
				</div>
			</div>


        </div>
    </div>
</div>