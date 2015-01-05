@extends('layouts.default')

@section('title')
Elevator (by Horntell)
@endsection

@section('content')

	<section class="head-banner bg-brand-primary">
		<img src="/assets/images/elevator-small.png" alt="Elevator" class="img-responsive img-center">
		<h2 class="font-bold">Hours of startup wisdom from influencers</h2>
		<h3 class="font-thin">in under 5-minutes</h3>
		<a href="/editions/sample" class="btn btn-cta font-thin">See a sample <i class="fa fa-angle-double-right"></i></a>
	</section>

	<section class="secondary-banner">
		<h3 class="font-thin">A tiny email filled with knowledge, delivered twice a week.</h3>
		<p class="font-thin">(first edition releasing on February 1, 2015)</p>
		<div class="form-group container wrapper">
			<form action="/join" method="POST">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="Name" required>
					</div>
					<div class="col-sm-4">
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					<div class="col-sm-4">
						<button type="submit" class="btn btn-brand-primary">Join The Elevator! :)</button>
					</div>
				</div>
			</form>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<div class="col-sm-4 wrapper-xl text-justify">
				<img src="/assets/images/icons/twitter.png" alt="Across the Twitter" class="img-responsive img-center">
				<h3 class="text-center">Across the Twitter</h3>
				<p>There's so much wisdom spread around by influencers as well as the others. I’ll hunt down handful of these to get your day started.</p>
			</div>
			<div class="col-sm-4 wrapper-xl text-justify">
				<img src="/assets/images/icons/blog.png" alt="Across the Blogs" class="img-responsive img-center">
				<h3 class="text-center">Across the Blogs</h3>
				<p>But they are so long! I’ll find and summarize the awesome blog posts in under 140 words for you to skim through.</p>
			</div>
			<div class="col-sm-4 wrapper-xl text-justify">
				<img src="/assets/images/icons/youtube.png" alt="Across the Youtube" class="img-responsive img-center">
				<h3 class="text-center">Across the Youtube</h3>
				<p>There's so much to consume and so less time. I’ll collect, transcribe and summarize the interesting videos for you.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 wrapper-xl text-justify">
				<img src="/assets/images/icons/producthunt.png" alt="Across the Products" class="img-responsive img-center">
				<h3 class="text-center">Across the Products</h3>
				<p>Need something new to try out? I will send you my favourite 3 products from ProductHunt for you to check out.</p>
			</div>
			<div class="col-sm-4 wrapper-xl text-justify">
				<img src="/assets/images/icons/bookshelf.png" alt="Across the Books" class="img-responsive img-center">
				<h3 class="text-center">Across the Books</h3>
				<p>I read a lot of books. (A Lot!) I will send the most interesting excerpts from them to you. <em>They will shake you up!</em></p>
			</div>
			<div class="col-sm-4 wrapper-xl text-justify">
				<img src="/assets/images/icons/shoeprints.png" alt="And from everywhere else" class="img-responsive img-center">
				<h3 class="text-center">And from everywhere else</h3>
				<p>Knowledge is not limited to just internet. Sometimes you meet someone who enlightens you. All of these will be send across to you.</p>
			</div>
		</div>
	</section>

	<section class="secondary-banner">
		<h3 class="font-thin">People say I write well. Thus a very short story included with every edition.</h3>
		<a href="/editions/sample" class="btn btn-brand-primary font-thin">See a sample <i class="fa fa-angle-double-right"></i></a>
	</section>

	<!-- <section class="container">
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
	</section> -->

	<section id="me" class="bg-brand-primary">
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


	<section class="bg-brand-primary text-center">
		<div class="container">
			<div class="form-group container">
				<form action="/join" method="POST">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-sm-6">
							<label class="pull-left">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Name" required>
						</div>
						<div class="col-sm-6">
							<label class="pull-left">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email" required>
						</div>
						<button type="submit" class="btn btn-cta">Join The Elevator :)</button>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection