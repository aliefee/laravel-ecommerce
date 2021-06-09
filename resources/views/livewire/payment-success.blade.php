@extends('layouts.app')


<div class="flex flex-col h-screen justify-between">

@livewire('navbar')
@livewire('cart')


<div class="flex-grow">
	<div class="pt-32 flex justify-center">
	    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="green">
  			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
		</svg>
		<h1 class="text-4xl font-semibold uppercase pl-3 pt-3 text-green-500">
	            	Success Payment
	    </h1>
	</div>
	<div class="pt-4 flex justify-center">
		Your Payment was Successful. You can continue shopping!
	</div>
</div>

</div>

@livewire('footer')