<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class Checkout extends Component
{

	public $cart, $totalPrice;
    public $u_name, $u_surname, $u_mail, $u_city, $u_address, $u_postal;


    public function render()
    {
    	$this->prepareCart();
        return view('livewire.checkout');
    }

    public function prepareCart() {

		if (session()->has('cart')) {
	    	$this->cart = session('cart');
	    } else {
	    	$this->cart = [];
	    }
	    $this->totalPrice = 0;
    	foreach($this->cart as $item) {
            $this->totalPrice += $item['price'] * $item['count']; 
        }
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

    public function makeOrder() {
        $this->prepareCart();

        $order = new Order;
        $order->u_name = $this->u_name;
        $order->u_surname = $this->u_surname;
        $order->u_mail = $this->u_mail;
        $order->u_city = "istanbul";
        $order->u_address = $this->u_address;
        $order->u_postal = $this->u_postal;
        $order->cart = $this->cart;

        $order->save();

        session()->forget('cart');

        return redirect()->to('/successful-payment');
    }


}
