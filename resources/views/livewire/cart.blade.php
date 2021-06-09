<section
	x-data="{ cartOpen: false }"
>


<div x-show="cartOpen" x-cloak x-on:cart.window="cartOpen = !cartOpen"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform scale-90"
     x-transition:enter-end="opacity-100 transform scale-100"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100 transform scale-100"
     x-transition:leave-end="opacity-0 transform scale-90"
     class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
    <div class="flex items-center justify-between">
        <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>

        <button @click="cartOpen = false" class="fixed top-0 right-0 mr-4 mt-2 z-50" class="text-gray-600 focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

    </div>
    <hr class="my-3">
    
    @foreach($cart as $item)
    <div class="flex justify-between mt-6">
        <div class="flex">
            <img class="h-20 w-20 object-cover rounded" src="{{ '/'.$item['image'] ?? 'defaultimage' }}" alt="">
            <div class="mx-3">
                <h3 class="text-sm text-gray-600">{{ $item['name'] ?? 'defaultname' }}</h3>
                <div x-data="{ count : {{ $item['count'] ?? 0 }} }" class="flex items-center mt-2">
                    <button wire:click="increaseCount({{ $item['id'] }})" type="button" class="text-gray-500 focus:outline-none focus:text-gray-600">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </button>
                    <span x-text="count" class="text-gray-700 mx-2"></span>
                    <button wire:click="decreaseCount({{ $item['id'] }})" type="button" class="text-gray-500 focus:outline-none focus:text-gray-600">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <span class="text-gray-600">{{ $item['price'] ?? 'defaultprice' }}$</span>
    </div>
    @endforeach

    <div class="mt-8">
        <div class="flex items-center justify-center">
            <button wire:click="clearCart()" class="ml-3 flex items-center px-3 py-2 bg-red-600 text-white text-sm uppercase font-medium rounded hover:bg-red-500 focus:outline-none focus:bg-red-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                <span>&nbspClear</span>
            </button>
        </div>
    </div>
    <a href="/checkout" class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
        <span>Checkout</span>
        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
    </a>
</div>

</section>