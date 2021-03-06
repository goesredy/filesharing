<html>
	<head>
		<meta charset="utf-8">
		<title>Files Sharing</title>
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
		<script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
		<script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
		<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
	</head>

	<body id="@yield('page')">

		@include('header')

		<div id="content">@yield('content')</div>

		@include('footer')
	</body>
</html>
