@extends('layouts.default')

@section('title')
Elevator (by Horntell)
@endsection

@section('content')
@include('_partials.header')

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="title-area">
			<h1 class="font-thin">Awesome!</h1>
			<p>You've successfully joined the Elevator.</p>
			<hr />
			<p>Think your pals will enjoy the lift too? Share the Elevator.</p>
			<a href="https://twitter.com/intent/tweet?button_hashtag=JoinTheElevator&text=A%205-minute%20long%20email%20filled%20with%20%23startup%20knowledge%20from%20influencers%2C%20delivered%20every%20Friday." class="twitter-hashtag-button" data-size="large" data-related="mohitmamoria,horntell" data-url="http://elevator.horntell.com">Tweet #JoinTheElevator</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
	</div>
</div>
@endsection