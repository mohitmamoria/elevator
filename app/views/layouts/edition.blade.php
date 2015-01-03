@extends('layouts.default')

@section('title')
Elevator (by Horntell)
@endsection

@section('content')
	<section class="bg-brand-primary">
		<a href="/"><img src="/assets/images/elevator-small.png" alt="Elevator" class="img-responsive img-center"></a>
	</section>

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="title-area">
			<h1 class="font-thin">{{ $edition['title'] or 'Stop Talking, Start Doing!' }}</h1>
			<p><em>{{ $edition['created_at'] or 'Jan 02, 2015'}}</em></p>
		</div>
		
		@yield('edition')
	</div>
</div>
<section class="bg-brand-primary text-center wrapper">
	<h2 class="font-bold">How about receiving these in your inbox?</h2>
	<h3 class="font-thin">twice a week</h3>
	<p><em>(nothing dull ever, promise)</em></p>
	<div class="form-group container">
		<form action="/join" method="POST">
			<div class="col-md-8 col-md-offset-2">
				<div class="col-sm-6">
					<label class="pull-left">Name</label>
					<input type="text" class="form-control" placeholder="Name">
				</div>
				<div class="col-sm-6">
					<label class="pull-left">Email</label>
					<input type="email" class="form-control" placeholder="Email">
				</div>
				<button type="submit" class="btn btn-cta">Join The Elevator! :)</button>
			</div>
		</form>
	</div>
</section>
@endsection

@section('scripts')
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection