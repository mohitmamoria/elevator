<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::asset('assets/styles/all.min.css') }}">

	<!-- Facebook Open Graph -->
	<meta property="og:title" content="Elevator (by Horntell)">
	<meta property="og:url" content="http://elevator.horntell.com">
	<meta property="og:image" content="http://elevator.horntell.com/assets/images/elevator-inverted.png">
	<meta property="og:description" content="Hours of startup wisdom from influencers in 5-minutes every Friday.">

	<!-- Google+ Metadata -->
	<meta itemprop="name" content="Elevator (by Horntell)">
	<meta itemprop="image" content="http://elevator.horntell.com/assets/images/elevator-inverted.png">
	<meta itemprop="description" content="Hours of startup wisdom from influencers in 5-minutes every Friday.">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@horntell">
	<meta name="twitter:creator" content="@mohitmamoria">
	<meta name="twitter:title" content="Hours of startup wisdom from influencers in 5-minutes every Friday.">
	<meta name="twitter:description" content="A tiny email filled with knowledge across the Twitter, Youtube, Blogs, Books and People. I will collect, transcribe and summarize the wisdom for you to consume in under 5-minutes.">
	<meta name="twitter:image:src" content="http://elevator.horntell.com/assets/images/elevator-inverted.png">
</head>
<body class="@yield('body-classes')">

@yield('content')

@include('_partials.footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>