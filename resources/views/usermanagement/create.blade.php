@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<div class="container">

	@if(Auth::user()->roles == 'Admin')
	
	<p class="label">Create User</p>
 
    <div class="maincontent form-body ">
		@if(session()->has('message'))
			<div class="hasSuccess">
				{{ session()->get('message') }}
			</div>
			<br/>
		@endif
		<form method="POST" action="/createusersaction">
			{{ csrf_field() }}
			<div class="form-group row">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Name" class="form-control @error('name') hasError @enderror" value="{{ old('name') }}">
				<small class="text-danger">{{ $errors->first('name') }}</small>
			</div>
			<div class="form-group row">
				<label>Email:</label>
				<input type="email" name="email" placeholder="Email" class="form-control @error('email') hasError @enderror" value="{{ old('email') }}">
				<small class="text-danger">{{ $errors->first('email') }}</small>
			</div>
			<div class="form-group row">
				<label>Password:</label>
				<input type="password" name="password" placeholder="Password" class="form-control @error('password') hasError @enderror" value="{{ old('password') }}">
				<small class="text-danger">{{ $errors->first('password') }}</small>
			</div>
			<div class="form-group row">
				<input class="submitBtn" type="submit" value="Submit">
			</div>
		</form>
	</div>
	
	@else
		<p>Please login as an administrator to continue.</p>
	@endif
 
 </div>   
@endsection