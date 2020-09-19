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
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

  <!-- Header -->
    <header id="header">
      <a href="/" class="logo"><strong>Forty</strong> <span>by HTML5 UP</span></a>
      <nav>
        <a href="#menu">Menu</a>
      </nav>
    </header>

  <!-- Menu -->
    <nav id="menu">
      <ul class="links">
        <li><a class="{{ Request::path() === '/' ? 'active-link' : '' }}" href="/">Home</a></li>
        <li><a class="{{ Request::path() === 'landing' ? 'active-link' : '' }}" href="/landing">Landing</a></li>
        <li><a class="{{ Request::path() === 'generic' ? 'active-link' : '' }}" href="/generic">Generic</a></li>
        <li><a class="{{ Request::path() === 'elements' ? 'active-link' : '' }}" href="/elements">Elements</a></li>
      </ul>
      <ul class="actions stacked">
        <li><a href="#" class="button primary fit">Get Started</a></li>
        <li><a href="#" class="button fit">Log In</a></li>
      </ul>
    </nav>

    @yield ('content')

	</body>
</html>