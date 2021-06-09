<div class="flex items-center">
	<button class="flex text-sm text-gray-700 focus:outline-none"><span class="flex items-center justify-center border-2 border-blue-500 rounded-full h-5 w-5 mr-2">1</span> Contacts</button>
	<button class="flex text-sm text-gray-500 ml-8 focus:outline-none" disabled><span class="flex items-center justify-center border-2 border-gray-500 rounded-full h-5 w-5 mr-2">2</span> Card Information</button>
	<button class="flex text-sm text-gray-500 ml-8 focus:outline-none" disabled><span class="flex items-center justify-center border-2 border-gray-500 rounded-full h-5 w-5 mr-2">3</span> Finish Payment</button>
</div>
<form class="mt-8 lg:w-3/4">
	<div class="mt-8">
		<h4  class="text-sm text-gray-500 font-medium">Name</h4>
		<div class="mt-2 flex">
			<label class="block flex-1">
			<input wire:model="u_name" class="form-input py-1 px-2 border border-2 border-gray-300 focus:outline-none mt-1 block w-full text-gray-700" placeholder="Name">
			</label>
		</div>
	</div>
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">Surname</h4>
		<div class="mt-2 flex">
			<label class="block flex-1">
			<input wire:model="u_surname" class="form-input py-1 px-2 border border-2 border-gray-300 focus:outline-none mt-1 block w-full text-gray-700" placeholder="Surname">
			</label>
		</div>
	</div>
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">E-mail Address</h4>
		<div class="mt-2 flex">
			<label class="block flex-1">
			<input wire:model="u_mail" class="form-input py-1 px-2 border border-2 border-gray-300 focus:outline-none mt-1 block w-full text-gray-700" placeholder="please enter your email address">
			</label>
		</div>
	</div>
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">Delivery address</h4>
		<div class="mt-2 flex">
			<label class="block w-3/12">
				<select wire:model="u_city" class="form-select py-2 px-2 text-gray-700 mt-1 block w-full">
					<option>Istanbul</option>
					<option>Ankara</option>
					<option>Izmir</option>
					<option>Kocaeli</option>
					<option>Bursa</option>
				</select>
			</label>
			<label class="block flex-1 ml-3">
			<input wire:model="u_address" type="text" class="form-input py-1 px-2 border border-2 border-gray-300 focus:outline-none mt-1 block w-full text-gray-700" placeholder="Address">
			</label>
		</div>
	</div>
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">Postal Code</h4>
		<div class="mt-2 flex">
			<label class="block flex-1">
			<input wire:model="u_postal" class="form-input py-1 px-2 border border-2 border-gray-300 focus:outline-none mt-1 block w-full text-gray-700" placeholder="Postal code">
			</label>
		</div>
	</div>
	
	<div class="flex items-center justify-between mt-8">
		<button type="button" onclick="location.href='/';" class="flex items-center text-gray-700 text-sm font-medium rounded hover:underline focus:outline-none">
			<svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
				<path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
			</svg>
			<span class="mx-2">Continue shopping</span>
		</button>
		<button type="button" @click="activeTab = 1" class="flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
			<span>Payment</span>
			<svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
				<path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
			</svg>
		</button>
	</div>
</form>