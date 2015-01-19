@extends('layouts.default')

@section('title')
Elevator (by Horntell)
@endsection

@section('content')
<div class="container wrapper">
	<div class="row">
		<div class="col-md-4">
			<a href="/"><img src="/assets/images/elevator-inverted-small.png" alt="Elevator" class="img-responsive img-center"></a>
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
				<div class="panel-footer edition-subscription-area">
					<section class="bg-brand-primary text-center wrapper pull-in">
						<h2 class="font-bold">How about receiving these in your inbox?</h2>
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
@endsection