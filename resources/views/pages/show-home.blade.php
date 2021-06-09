@extends('layouts.app')


<div class="flex flex-col h-screen justify-between">

@livewire('navbar')
@livewire('cart')


<div class="flex-grow">
	<div class="pt-32">
		<h1 class="text-5xl font-semibold uppercase text-center text-gray-500">
	            	Home Page
	    </h1>
	</div>
</div>

</div>

@livewire('footer')