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
	<meta property="og:description" content="Hours of startup wisdom from influencers in 5-minutes. Twice a week.">

	<!-- Google+ Metadata -->
	<meta itemprop="name" content="Elevator (by Horntell)">
	<meta itemprop="image" content="http://elevator.horntell.com/assets/images/elevator-inverted.png">
	<meta itemprop="description" content="Hours of startup wisdom from influencers in 5-minutes. Twice a week.">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@horntell">
	<meta name="twitter:creator" content="@mohitmamoria">
	<meta name="twitter:title" content="Hours of startup wisdom from influencers in 5-minutes. Twice a week.">
	<meta name="twitter:description" content="A tiny email filled with knowledge across the Twitter, Youtube, Blogs, Books and People. I will collect, transcribe and summarize the wisdom for you to consume under 5-minutes.">
	<meta name="twitter:image:src" content="http://elevator.horntell.com/assets/images/elevator-inverted.png">
</head>
<body class="bg-edition">

<div class="container wrapper">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="panel no-borders wrapper">
				<div class="panel-body">
					<h1 class="heading-edition">Stop Talking, Start Doing!</h1>
					<p class="text-edition">Winters - the perfect season to laze around! But do you know, there are two guys at some far-off place, sitting in a basement, wrapped in blankets and <em>doing</em> the thing that you're only <em>planning</em> to do tomorrow.</p>
					<p class="text-edition">I don't know who they are. It's very probable that they are in their early 20s but I am not sure how they look like. I don't even know what they are working on, but I know one thing for sure - they are hustling right now (and it's past midnight in their timezone).</p>
					<p class="text-edition">They might fail at whatever they are doing. But does it matter? Once fallen, they will get up, dust their shirts off and start afresh. And someday you will find them all over the internet as yet another <strong>overnight success story</strong>.</p>
					<img src="/assets/images/overnight-success.png" alt="Overnight success takes years." class="img-center img-responsive img-thumbnail">
					<p class="text-center text-xs"><a href="http://startupquote.com/post/1645456526">http://startupquote.com/post/1645456526</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>