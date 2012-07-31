<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ Asset::container('bootstrapper')->styles(); }}
</head>
<body>
	
	
	{{ render('partials.navigation'); }}
	<div class="container">
	@yield('content')

    </div> <!-- /container -->
  {{ Asset::container('bootstrapper')->scripts(); }}
  {{ Asset::container('backbone')->scripts(); }}
</body>
</html>