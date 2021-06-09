<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Laravel</title>

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

	<style>
		[x-cloak] {
        display: none !important;
    	}
	</style>

   	@livewireStyles
</head>
<body>
	
	{{ $slot ?? '' }}

	@livewireScripts
	
</body>
</html>
