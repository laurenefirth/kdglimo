@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">

	@if(Auth::user()->roles == 'Admin')
	
	<p class="label">Edit User</p>
 
    <div class="maincontent form-body ">
		@if(session()->has('message'))
			<div class="hasSuccess">
				{{ session()->get('message') }}
			</div>
			<br/>
		@endif
		<br/>
		<p>Current Name: {{$user->name}}</p>
		<p>Current Email: {{$user->email}}</p>
		<br/>
		<form method="POST" action="/updateusersaction">
			{{ csrf_field() }}
			<div class="form-group row">
				<label>New Name:</label>
				<input type="text" name="name" placeholder="Name" class="form-control @error('name') hasError @enderror" value="{{ old('name') }}">
				<small class="text-danger">{{ $errors->first('name') }}</small>
			</div>
			<div class="form-group row">
				<label>New Email:</label>
				<input type="email" name="email" placeholder="Email" class="form-control @error('email') hasError @enderror" value="{{ old('email') }}">
				<small class="text-danger">{{ $errors->first('email') }}</small>
			</div>
			<div class="form-group row">
				<input type="hidden" name="id" value="{{ $user->id }}">
				<input class="submitBtn" type="submit" value="Update">
			</div>
		</form>
	</div>
	
	@else
		<p>Please login as an administrator to continue.</p>
	@endif
 
 </div>   
@endsection