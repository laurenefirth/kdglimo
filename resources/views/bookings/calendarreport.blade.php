@extends('layouts.app')

@section('title', 'Calendar Report')

@section('content')
<div class="container">

	<p class="label">Calendar Report</p>
	 
    <div class="maincontent form-body ">
		<p>Please see below the Fall/Winter 2019 Calendar.</p>

		@if(session()->has('message'))
			<div class="hasSuccess">
				{{ session()->get('message') }}
			</div>
			<br/>
		@endif
		
		<section>
		  
			<table>
				<caption>September 2019</caption>
		  
				<thead>
					<tr>
						<th>M</th>
						<th>Tu</th>
						<th>W</th>
						<th>Th</th>
						<th>F</th>
						<th>Sa</th>
						<th>Su</th>
					</tr>
				</thead>
		  
				<tbody>
					<tr>
						<td>
							22
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-22-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>23
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-23-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>24
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-24-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>25
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-25-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>26
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-26-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>27
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-27-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>28
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-28-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>29
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-29-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>30
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '09-30-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<br/>
			<table>
				<caption>October 2019</caption>
		  
				<thead>
					<tr>
						<th>M</th>
						<th>Tu</th>
						<th>W</th>
						<th>Th</th>
						<th>F</th>
						<th>Sa</th>
						<th>Su</th>
					</tr>
				</thead>
		  
				<tbody>
					<tr>
						<td></td>
						<td>1
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-01-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>2
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-02-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>3
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-03-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>4
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-04-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>5
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-05-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>6
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-06-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>7
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-07-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>8
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-08-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>9
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-09-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>10
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-10-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>11
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-11-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>12
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-12-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>13
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-13-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>14
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-14-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>15
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-15-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>16
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-16-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>17
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-17-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>18
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-18-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>19
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-19-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>20
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-20-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>21
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-21-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>22
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-22-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>23
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-23-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>24
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-24-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>25
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-25-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>26
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-26-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>27
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-27-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>28
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-28-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>29
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-29-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>30
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-30-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>31
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '10-31-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<br/>
			<table>
				<caption>November 2019</caption>
		  
				<thead>
					<tr>
						<th>M</th>
						<th>Tu</th>
						<th>W</th>
						<th>Th</th>
						<th>F</th>
						<th>Sa</th>
						<th>Su</th>
					</tr>
				</thead>
		  
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-01-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>2
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-02-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>3
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-03-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>4
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-04-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>5
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-05-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>6
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-06-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>7
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-07-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>8
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-08-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>9
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-09-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>10
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-10-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>11
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-11-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>12
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-12-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>13
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-13-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>14
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-14-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>15
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-15-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>16
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-16-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>17
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-17-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>18
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-18-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>19
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-19-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>20
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-20-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>21
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-21-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>22
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-22-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>23
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-23-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>24
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-24-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>25
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-25-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>26
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-26-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>27
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-27-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>28
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-28-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>29
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-29-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>30
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '11-30-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<br/>
			<table>
				<caption>December 2019</caption>
		  
				<thead>
					<tr>
						<th>M</th>
						<th>Tu</th>
						<th>W</th>
						<th>Th</th>
						<th>F</th>
						<th>Sa</th>
						<th>Su</th>
					</tr>
				</thead>
		  
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-01-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>2
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-02-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>3
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-03-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>4
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-04-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>5
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-05-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
									
								@endif
							@endforeach
						</td>
						<td>6
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-06-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>7
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-07-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>8
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-08-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>9
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-09-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>10
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-10-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>11
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-11-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>12
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-12-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>13
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-13-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>14
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-14-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>15
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-15-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>16
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-16-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>17
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-17-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>18
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-18-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>19
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-19-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>20
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-20-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>21
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-21-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>22
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-22-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>23
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-23-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>24
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-24-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>25
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-25-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>26
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-26-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>27
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-27-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>28
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-28-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>29
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-29-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
					</tr>
					<tr>
						<td>30
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-30-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td>31
							@foreach ($bookings as $booking)
								@if($booking->pickupDate == '12-31-2019')
									<div>
										<p>Time: {{ $booking->pickupTime}}</p>
										<p>Member: {{ $booking->firstName }} {{ $booking->lastName}}</p>
										<p>Company: {{ $booking->company }} - {{ $booking->accountNum}}</p>
										<p>Location: {{ $booking->cityPickup }}, {{ $booking->statePickup}}</p>
										<p>Price: ${{ $booking->fare }}</p>
									</div>
								@endif
							@endforeach
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<br/>

		</section>

	</div>
 
 </div>   
@endsection