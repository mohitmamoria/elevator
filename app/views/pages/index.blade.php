@extends('layouts.default')

@section('title')
Elevator (by Horntell)
@endsection

@section('content')

	<section class="head-banner">
		<h2 class="font-bold">Hours of startup wisdom from influencers</h2>
		<h3 class="font-thin">in under 5-minutes</h3>
		<a href target="_blank" class="btn btn-cta font-thin">See a sample <i class="fa fa-angle-double-right"></i></a>
	</section>

	<section class="secondary-banner">
		<h3 class="font-thin">A tiny email filled with knowledge, delivered thrice a week.</h3>
	</section>

	<section class="container">
		<div class="row segment-box">
			<div class="col-md-6 col-md-offset-6">
				<h4 class="font-bold">Across the Twitter</h4>
				<p>I’ll hunt the 5 thought-provoking tweets to get your day started.</p>
			</div>
		</div>
		<div class="row segment-box">
			<div class="col-md-6 col-md-offset-6">
				<h4 class="font-bold">Across the blogs</h4>
				<p>I’ll find and summarize the awesome blog posts in under 140 words for you to skim through.</p>
			</div>
		</div>
		<div class="row segment-box">
			<div class="col-md-6 col-md-offset-6">
				<h4 class="font-bold">Across the Youtube</h4>
				<p>I’ll collect, transcribe and summarize the interesting videos.</p>
			</div>
		</div>
		<div class="row segment-box">
			<div class="col-md-6 col-md-offset-6">
				<h4 class="font-bold">Useful products</h4>
				<p>I’ll send you my most loved 3 hunts from ProductHunt for you.</p>
			</div>
		</div>
		<div class="row segment-box">
			<div class="col-md-6 col-md-offset-6">
				<h4 class="font-bold">One Last Thing</h4>
				<p>And then one more unique and interesting thing with each email.</p>
			</div>
		</div>
	</section>

	<section id="me">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<div class="col-md-3">
					<img src="assets/images/mohit-horntell.png" class="thumbnail avatar img-responsive">
				</div>
				<div class="col-md-9">
					<h1>Hi, I'm Mohit!</h1>
					<p class="bio">
						I am 23, a serial entrepreneur and a nerd. I am writing software
						since I was 11 and built first company at 18. Avid reader,
						occasional <a href="http://mohitmamoria.com">blogger</a>, regular <a href="http://twitter.com/mohitmamoria">tweeter</a>, currently CEO of <a href="http://horntell.com">Horntell</a>.
						Turning hacker-to-founder, I hunt and collect loads of knowledge nuggets
						spread across the internet. <a href="http://twitter.com/mohitmamoria">Twitter</a>
						is the best place to get hold of me.
					</p>
				</div>
			</div>
		</div>
	</section>
@endsection