@extends('layouts.app')

@section('title', 'List Report')

@section('content')
<div class="container">

	<p class="label">List Report</p>
	 
    <div class="maincontent form-body ">
		<p>Please see below for the list of bookings over the next 7 days.</p>

		@if(session()->has('message'))
			<div class="hasSuccess">
				{{ session()->get('message') }}
			</div>
			<br/>
		@endif

		<ul>
			@foreach ($bookings as $booking)
				<li>
					<div>
						<p>Date and Time: {{ $booking->pickupDateTime}}</p>
						<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
						<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
						<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
						<p>Price: ${{ $booking->fare }}</p>
					</div>  
				</li>
			@endforeach
		</ul>
	</div>
 
 </div>   
@endsection