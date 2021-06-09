<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Search extends Component
{

	public $searchTerm;
	public $cart;



    public function render()
    {
    	$searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search', [

            'products' => Product::where('name','like', $searchTerm)->paginate(16)

        ]);
    }


    public function addToCart($id)
    {
    	$product = Product::find($id);

        if (session()->has('cart')) {
    		$this->cart = session('cart');

            $hasItemAlready = False;
            foreach($this->cart as $key => $item) {
                if ($item['id'] == $id) {
                    $hasItemAlready = True;
                    $this->cart[$key]['count'] = $item['count'] + 1;
                    break;
                }   
            }
            if (!$hasItemAlready)
                array_push($this->cart,[
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                    'count' => 1,
                ]);

    	} else {
    		$this->cart = [[
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'count' => 1,
            ],];
    	}


    	session([
    		'cart' => $this->cart,
    	]);

        $this->emit('updateCart');
    }

}
