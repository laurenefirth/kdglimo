@extends('layouts.app')

@section('title', 'Submit Bookings')

@section('maincontent')
<div class="container">

	<p class="label">Submit Bookings</div>
 
    <div class="maincontent form-body ">
		@if(session()->has('message'))
			<div class="hasSuccess">
				{{ session()->get('message') }}
			</div>
			<br/>
		@endif
		<form method="POST" action="/bookingsaction">
			{{ csrf_field() }}
			<div class="form-group row">
				<label>First Name:</label>
				<input type="text" name="firstName" placeholder="First Name" class="form-control @error('firstName') hasError @enderror" value="{{ old('firstName') }}">
				<small class="text-danger">{{ $errors->first('firstName') }}</small>
			</div>
			<div class="form-group row">
				<label>Last Name:</label>
				<input type="text" name="lastName" placeholder="Last Name" class="form-control @error('lastName') hasError @enderror" value="{{ old('lastName') }}">
				<small class="text-danger">{{ $errors->first('lastName') }}</small>
			</div>
			<div class="form-group row">
				<label>Company Name:</label>
				<input type="text" name="company" placeholder="Company Name" class="form-control @error('company') hasError @enderror" value="{{ old('company') }}">
				<small class="text-danger">{{ $errors->first('company') }}</small>
			</div>
			<div class="form-group row">
				<label>Account Number:</label>
				<input type="integer" name="accountNum" placeholder="Account Number" class="form-control @error('accountNum') hasError @enderror" value="{{ old('accountNum') }}">
				<small class="text-danger">{{ $errors->first('accountNum') }}</small>
			</div>
			<div class="form-group row"
				<label>Pickup Date:</label>
				<input type="date" name="pickupDate" placeholder="Pickup Date" class="form-control @error('pickupDate') hasError @enderror" value="{{ old('pickupDate') }}">
				<small class="text-danger">{{ $errors->first('pickupDate') }}</small>
			</div>
			<div class="form-group row">
				<label>Pickup Time:</label>
				<input type="time" name="pickupTime" placeholder="Pickup Time" class="form-control @error('pickupTime') hasError @enderror" value="{{ old('pickupTime') }}">
				<small class="text-danger">{{ $errors->first('pickupTime') }}</small>
			</div>
			<div class="form-group row">
				<label>Pickup City:</label>
				<input type="text" name="cityPickup" placeholder="Pickup City" class="form-control @error('cityPickup') hasError @enderror" value="{{ old('cityPickup') }}">
				<small class="text-danger">{{ $errors->first('cityPickup') }}</small>
			</div>
			<div class="form-group row">
				<label>Pickup State:</label>
				<select name="statePickup" class="form-control @error('statePickup') hasError @enderror">
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NY">New York</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="VT">Vermont</option>
				</select>
				<small class="text-danger">{{ $errors->first('statePickup') }}</small>
			</div>
			<div class="form-group row">
				<label>Booking Fare:</label>
				<input type="integer" name="fare" placeholder="Must be >$50" class="form-control @error('fare') hasError @enderror" value="{{ old('fare') }}">
				<small class="text-danger">{{ $errors->first('fare') }}</small>
			</div>
			<br/>
			<div class="form-group row">
				<input class="submitBtn" type="submit" value="Submit">
			</div>
		</form>
	</div>
 
 </div>   
@endsection