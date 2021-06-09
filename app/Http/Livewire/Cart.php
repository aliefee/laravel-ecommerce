<?php

namespace App\Http\Livewire;

use Livewire\Component;
#use App\Models\Product;

class Cart extends Component
{

	public $cart;
	protected $listeners = ['updateCart' => 'render'];
	

    public function render()
    {	
    	if (session()->has('cart')) {
	    	$this->cart = session('cart');
	    } else {
	    	$this->cart = [];
	    }
	    #dd(session('cart'));
	    #dd($this->cart);
        return view('livewire.cart');
    }


    public function deleteItem($id) {
    	$this->cart = session('cart');
    	foreach($this->cart as $key => $item) {
            if ($item['id'] == $id) {
                \array_splice($this->cart, $key, 1);;
                break;
            }   
        }
        session([
    		'cart' => $this->cart,
    	]);
    }
    public function increaseCount($id) {

    	$this->cart = session('cart');

        foreach($this->cart as $key => $item) {
            if ($item['id'] == $id) {
                $this->cart[$key]['count']++;
                break;
            }   
        }
    	session([
    		'cart' => $this->cart,
    	]);

    }
    public function decreaseCount($id) {

    	$this->cart = session('cart');

        foreach($this->cart as $key => $item) {
            if ($item['id'] == $id) {
                $this->cart[$key]['count']--;
                if ($this->cart[$key]['count'] == 0) {
                	$this->deleteItem($id);
                } else {
                	session([
    					'cart' => $this->cart,
    				]);
                }
                break;
            }   
        }
    	
    }

    public function clearCart()
    {
        session()->forget('cart');
    }


}
