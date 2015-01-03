@extends('layouts.default')

@section('title')
Elevator (by Horntell)
@endsection

@section('content')
@include('_partials.header')

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="title-area">
			<h1 class="font-thin">Join The Elevator</h1>
		</div>

		{{ Form::open(['class' => 'form-horizontal']) }}

		<div class="form-group">
			<label class="col-sm-2 control-label">Name</label>
			<div class="col-sm-8">
				<input class="form-control" type="text" name="name" value="{{ ! is_null(Input::old('name')) ? Input::old('name') : Input::get('name') }}" required>
				{{ $errors->first('name', '<span class="text-danger text-sm">:message</span>') }}
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-8">
				<input class="form-control" type="email" name="email"  value="{{ ! is_null(Input::old('email')) ? Input::old('email') : Input::get('email') }}" required>
				{{ $errors->first('email', '<span class="text-danger text-sm">:message</span>') }}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-brand-primary">Join The Elevator :)</button>
				{{ $errors->first('_global', '<p class="text-danger text-sm">:message</p>') }}
			</div>
		</div>

		{{ Form::close() }}
	</div>
	@endsection