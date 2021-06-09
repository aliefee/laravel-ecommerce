<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}


	<div class="container mx-auto px-6">
	    <div class="md:flex md:items-center">
	        <div class="w-full h-64 md:w-1/2 lg:h-96">
	            <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{ '/'.$product->image }}" alt="Item Image">
	        </div>
	        <div x-data="{ count : 1 }" class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
	            <h3 class="text-gray-700 uppercase text-lg">{{ $product->name ?? '' }}</h3>
	            <span class="text-gray-500 mt-3">${{ $product->price }}</span>
	            <hr class="my-3">
	            <div class="mt-2">
	                <label class="text-gray-700 text-sm" for="count">Count:</label>


	                <div class="flex items-center mt-1">
	                    <button x-on:click="count++" class="text-gray-500 focus:outline-none focus:text-gray-600">
	                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
	                    </button>
	                    <span x-text="count" class="text-gray-700 text-lg mx-2"></span>
	                    <button x-on:click="count--"  class="text-gray-500 focus:outline-none focus:text-gray-600">
	                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
	                    </button>
	                </div>


	            </div>
	           
	            <div class="flex items-center mt-6">
	                
	                <button x-on:click="$wire.addToCart(count)" type="button" class="flex items-center text-gray-600 border rounded-md p-2 bg-blue-100 hover:bg-blue-300 focus:outline-none">
	                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>&nbspAdd to cart
	                </button>
	            </div>
	        </div>
	    </div>
	    <div class="mt-16 pb-4">
	        <h4 class="text-gray-600 text-2xl font-medium">Details</h4>
	        <blockquote>
      			<p class="text-lg">{{ $product->description ?? '' }}</p>
   			</blockquote>
	    </div>
	</div>

</div>