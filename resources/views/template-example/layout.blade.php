<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <!-- Built with WebPack & SASS -->
    <link rel="stylesheet" href="css/app.css" /> 
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
    <div id="wrapper">
      @include('template-example/partials/header')    
      @include('template-example/partials/nav')
      
      @yield ('content')

      @include('template-example/partials/contact')
      @include('template-example/partials/footer')
      @include('template-example/partials/scripts')
    </div>
	</body>
</html>