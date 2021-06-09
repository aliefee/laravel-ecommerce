<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;

class Orders extends Component
{
	public $orders;




    public function render()
    {
    	$this->orders = Order::all();
        return view('livewire.admin.orders');
    }
}
