@extends('layouts.default')

@section('title')
{{ $edition->name }}
@endsection

@section('date')
{{ $edition->published_at ? $edition->published_at->toFormattedDateString() : 'unpublished edition (previewing only)' }}
@endsection

@section('body-classes')
bg-edition
@endsection

@section('content')
<div class="container wrapper">
	<div class="row">
		<div class="col-md-4">
			<a href="/"><img src="/assets/images/elevator-inverted-small.png" alt="Elevator" class="img-responsive img-center"></a>
			<hr />

			@if($others->count() > 0)
			<section class="hidden-sm">
				<h5 class="font-bold">OTHER EDITIONS</h5>
				<ul class="list-unstyled list-group">
					@foreach($others as $other)
					<li class="list-group-item">
						<a href="{{ $other->url }}">{{ $other->name }}</a>
					</li>
					@endforeach
				</ul>
			</section>
			@endif
		</div>
		<div class="col-md-8">
			<div class="panel no-borders edition">
				<div class="panel-heading spaced-out-h">
					<h1 class="heading-edition">@yield('title')</h1>
					<p class="edition-meta">
						@yield('date')
					</p>
				</div>
				<div class="panel-body spaced-out-h">
					@yield('edition')
				</div>
				<nav class="wrapper">
					<ul class="pager">
						<li class="previous {{is_null($previous) ? 'disabled' : ''}}"><a href="{{ $previous->url or '#'}}"><span aria-hidden="true">&larr;</span> Older</a></li>
						<li class="next {{is_null($next) ? 'disabled' : ''}}"><a href="{{ $next->url or '#'}}">Newer <span aria-hidden="true">&rarr;</span></a></li>
					</ul>
				</nav>
				<div class="panel-footer edition-subscription-area">
					<section class="bg-brand-primary text-center wrapper pull-in">
						<h2 class="font-bold">How about receiving this in your inbox?</h2>
						<h3 class="font-thin">every friday</h3>
						<p><em>(nothing dull ever, promise)</em></p>
						<div class="form-group">
							<form action="/join" method="POST">
								<div class="row">
									<div class="col-sm-6">
										<label class="pull-left">Name</label>
										<input type="text" name="name" class="form-control" placeholder="Name" required>
									</div>
									<div class="col-sm-6">
										<label class="pull-left">Email</label>
										<input type="email" name="email" class="form-control" placeholder="Email" required>
									</div>
								</div>
								<button type="submit" class="btn btn-cta">Join The Elevator! :)</button>
							</form>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script async src="//connect.facebook.net/en_US/all.js#xfbml=1" charset="utf-8"></script>
@endsection