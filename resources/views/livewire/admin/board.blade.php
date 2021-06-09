<div>

<div class="flex flex-col h-screen">
	<div class="flex-grow py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        	<h1 class="text-4xl font-bold text-center">
            	Admin Board
        	</h1>	
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()"
                class="bg-green-700 text-white font-bold py-2 px-4 rounded my-3">Add Product</button>
            @if($isModalOpen)
            @include('livewire.admin.create')
            @endif

	        <table class="w-full text-md bg-white shadow-md rounded mb-4">
	            <tbody>
	                <tr class="border-b">
	                	<th class="text-left p-3 px-5">Image</th>
	                    <th class="text-left p-3 px-5">Name</th>
	                    <th class="text-left p-3 px-5">Price</th>
	                    <th class="text-left p-3 px-5">Status</th>
	                    <th></th>
	                </tr>
	                @foreach($products as $product)
	                	<tr class="border-b hover:bg-orange-100 bg-gray-100">
		                	<td class="p-3">
		                		<a href="{{ '/product/' . $product->id }}" >
		                			<img class="object-left object-contain h-20 rounded-md " src="{{ $product->image }}" alt="Item Image">
		                		</a>
		                	</td>
		                    <td class="p-3 px-5"><input type="text" value="{{ $product->name }}" class="bg-transparent"></td>
		                    <td class="p-3 px-5"><input type="text" value="{{ $product->price }}" class="bg-transparent"></td>
		                    <td class="p-3 px-5">
		                        <select value="user.role" class="bg-transparent">
		                            <option value="user">available</option>
		                            <option value="admin">non-available</option>
		                        </select>
		                    </td>
		                    <td class="p-3 px-5 flex-end justify-end"><button wire:click="edit({{ $product->id }})" type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button wire:click="delete({{ $product->id }})" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
	                	</tr>
	                @endforeach
	            </tbody>
	        </table>

	    </div>
    </div>
	</div>

@livewire('footer')
</div>

</div>
