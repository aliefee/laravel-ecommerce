<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Laravel</title>
   	@livewireStyles
</head>
<body>
	{{ $slot ?? '' }}
	@livewireScripts
</body>
</html>
