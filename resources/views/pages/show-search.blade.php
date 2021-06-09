@extends('layouts.app')


<div class="flex flex-col h-screen justify-between">

@livewire('navbar')
@livewire('cart')
<div class="flex-grow">
@livewire('search', ['searchTerm' => $searchTerm])
</div>
@livewire('footer')

</div>