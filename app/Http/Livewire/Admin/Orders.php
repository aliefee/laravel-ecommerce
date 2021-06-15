<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\Product;

class Orders extends Component
{
	public $orders;
	public $cart;
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
