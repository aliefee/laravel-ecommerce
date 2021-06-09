<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Product;

class Board extends Component
{
    use WithFileUploads;
    public $image, $photo;
	public $products, $name, $price, $description, $quantity, $product_id;
    public $isModalOpen = 0;

    public function render()
    {
    	$this->products = Product::all();
        return view('livewire.admin.board');
    }

	public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->price = '';
        $this->description = '';
        $this->quantity = 0;
        $this->product_id = 0;
        $this->image = '';
        $this->photo = null;
        #$this->reset();
    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|max:1024',
            'quantity' => 'required|integer'
        ]);

        if ($this->photo != null) {
            $image = "storage/".substr($this->photo->store('public/products'), 7);
        } elseif ($this->image != '') {
            $image = $this->image;
        } else {
            $image = 'storage/products/product-default.png';
        }

        Product::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'image' => $image,
        ]);

        session()->flash('message', $this->product_id ? 'Product updated.' : 'Product created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->id = $id;
        $this->product_id = $id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->quantity = $product->quantity;
        $this->image = $product->image;

        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'Product deleted.');
    }


}
