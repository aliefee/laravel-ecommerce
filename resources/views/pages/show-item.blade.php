@extends('layouts.app')

@livewire('navbar')
@livewire('product-detail', ['product' => $product])