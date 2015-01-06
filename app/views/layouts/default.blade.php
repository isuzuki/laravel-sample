<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Laravel Sample</title>
</head>

<body>
	<div class="container">
		@yield('content')
	</div>

	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}
	@yield('append_js')
</body>
</html>
