<div>
	<div class="flex flex-col h-screen justify-between">
	<div class="flex-grow">
		@if($isModalOpen)
        @include('livewire.admin.order-detail')
        @endif
		<table class="min-w-full table-auto">
			<thead class="justify-between">
				<tr class="bg-gray-800">
					<th class="px-8 py-2">
						<span class="text-gray-300">Order ID</span>
					</th>
					<th class="px-8 py-2">
						<span class="text-gray-300">City</span>
					</th>
					<th class="px-8 py-2">
						<span class="text-gray-300">e-Mail</span>
					</th>
					<th class="px-8 py-2">
						<span class="text-gray-300">Date</span>
					</th>
					<th class="px-8 py-2">
						<span class="text-gray-300"></span>
					</th>
					<th class="px-8 py-2">
						<span class="text-gray-300"></span>
					</th>
				</tr>
			</thead>
			<tbody class="bg-gray-200">
				@foreach($orders as $order)
				<tr class="bg-white border-4 border-gray-200">
					<td class="px-16 py-2">
						<span class="text-center ml-2 font-semibold">{{ $order->id }}</span>
					</td>
					<td class="px-16 py-2">
						<span class="text-center ml-2 font-semibold">{{ $order->u_city }}</span>
					</td>
					<td class="px-16 py-2">
						<span class="text-center ml-2">{{ $order->u_mail }}</span>
					</td>
					<td class="px-10 py-2">
						<span class="text-center ">{{ $order->created_at }}</span>
					</td>
					<td class="px-16 py-2">
						<button wire:click="viewDetails({{ $order->id }})" type="button" class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100">
				            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				            <div>
				              <p class="text-xs font-medium ml-2 ">
				                Details
				              </p>
				            </div>
				        </button>
					</td>
					<td class="px-16 py-2">
						<button wire:click="delete({{ $order->id }})" type="button" class="bg-red-500 hover:bg-red-700 text-sm text-white px-2 py-2 border rounded-md hover:text-black focus:outline-none focus:shadow-outline">
						Cancel Order
						</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@livewire('footer')
	</div>
</div>