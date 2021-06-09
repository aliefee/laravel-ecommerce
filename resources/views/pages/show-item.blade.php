@extends('layouts.app')

@livewire('navbar')
@livewire('cart')
@livewire('product-detail', ['product' => $product])
@livewire('footer')