<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{
	public $cart;
	public $product;

    /*
    public function mount($id)
    {
        $this->product = Product::find($id);
    }
*/
    public function render()
    {
        return view('livewire.product-detail');
    }



    public function addToCart($count)
    {
        if (session()->has('cart')) {
    		$this->cart = session('cart');

            $hasItemAlready = False;
            foreach($this->cart as $key => $item) {
                if ($item['id'] == $this->product->id) {
                    $hasItemAlready = True;
                    $this->cart[$key]['count'] = $item['count'] + $count;
                    break;
                }   
            }
            if (!$hasItemAlready)
                array_push($this->cart,[
                    'id' => $this->product->id,
                    'name' => $this->product->name,
                    'price' => $this->product->price,
                    'image' => $this->product->image,
                    'count' => $count,
                ]);

    	} else {
    		$this->cart = [[
                'id' => $this->product->id,
                'name' => $this->product->name,
                'price' => $this->product->price,
                'image' => $this->product->image,
                'count' => $count,
            ],];
    	}


    	session([
    		'cart' => $this->cart,
    	]);

        $this->emit('updateCart');
    }



}
