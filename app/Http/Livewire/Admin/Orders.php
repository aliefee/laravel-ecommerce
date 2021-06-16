<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\Product;

class Orders extends Component
{
	public $orders;
	public $cart, $address, $postal, $u_name, $u_surname;
	public $isModalOpen = 0;

    public function render()
    {
    	$this->orders = Order::all();
        return view('livewire.admin.orders');
    }



    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    public function viewDetails($id)
    {
    	$order = Order::findOrFail($id);
    	$this->cart = $order->cart;
        $this->address = $order->u_address;
        $this->postal = $order->u_postal;
        $this->u_name = $order->u_name;
        $this->u_surname = $order->u_surname;
    	$this->openModalPopover();
    }

    public function delete($id)
    {
    	$cart = Order::findOrFail($id)->cart;
    	foreach($cart as $item) {
            Product::find($item['id'])->increment('quantity',$item['count']);
        }
        Order::findOrFail($id)->delete();
    }
    
}
