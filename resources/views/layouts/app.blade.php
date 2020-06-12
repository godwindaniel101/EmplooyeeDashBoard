<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="{{asset('/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/vue.css')}}">
	
	</head>
	<body>
	<div id="app">
		@yield('content')
	</div>
	<script src="{{ asset('js/app.js') }}" defer></script>
	

	</body>
</html>









 


















