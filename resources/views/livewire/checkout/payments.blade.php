<div class="flex items-center">
	<button class="flex text-sm text-blue-500 focus:outline-none"><span class="flex items-center justify-center text-white bg-blue-500 rounded-full h-5 w-5 mr-2">1</span> Contacts</button>
	<button class="flex text-sm text-gray-700 ml-8 focus:outline-none"><span class="flex items-center justify-center border-2 border-blue-500 rounded-full h-5 w-5 mr-2">2</span> Card Information</button>
	<button class="flex text-sm text-gray-500 ml-8 focus:outline-none" disabled><span class="flex items-center justify-center border-2 border-gray-500 rounded-full h-5 w-5 mr-2">3</span> Finish Payment</button>
</div>
<form class="mt-10 lg:w-3/4">
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">Name Surname on Card</h4>
		<div class="mt-2 flex">
			<label class="block flex-1">
			<input type="text" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none" placeholder="Name Surname">
			</label>
		</div>
	</div>
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">Card no</h4>
		<div class="mt-2 flex">
			<label class="block flex-1">
			<input class="shadow appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none" placeholder="Card no">
			</label>
		</div>
	</div>
	<div class="mt-8">
		<h4 class="text-sm text-gray-500 font-medium">CV number</h4>
		<div class="mt-2 flex">
			<span class="shadow appearance-none text-sm border rounded-l px-4 py-2 bg-gray-300 whitespace-no-wrap">CV</span>
    		<input name="field_name" class="shadow appearance-none border focus:outline-none rounded-r px-4 py-2" type="text" placeholder="***" />
		</div>
	</div>

	<div class="flex items-center justify-between mt-10">
		<button type="button" @click="activeTab = 0" class="flex items-center text-gray-700 text-sm font-medium rounded hover:underline focus:outline-none">
			<svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
				<path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
			</svg>
			<span class="mx-2">Back step</span>
		</button>
		<button wire:click="makeOrder" type="button" class="flex items-center px-6 py-2 bg-purple-600 text-white text-m font-medium rounded-md hover:bg-purple-500 focus:outline-none focus:bg-purple-500">
			<span>Finish Payment</span>
		</button>
	</div>
</form>
