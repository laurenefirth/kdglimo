@extends('layouts.app')

@section('title', 'User List')

@section('content')
<div class="container">

	@if(Auth::user()->roles == 'Admin')

	<p class="label">User List</p>
	 
    <div class="maincontent form-body ">
		
		@if(session()->has('message'))
			<div class="hasSuccess">
				{{ session()->get('message') }}
			</div>
			<br/>
		@endif
		
		<div>
			<div class="linkDiv">
				<a href="{{ url('/createuser') }}" class="btn">{{ __('Create User') }}</a> 
			</div>
		</div>
		
		<br/>
		<p>Please see below the list of users on the site.</p>
		<hr>
		<br/>
		
		<div>
			<ul>
				@foreach ($users as $user)
					<li>
						<div>
							<p>Name: {{ $user->name }}</p>
							<p>Email: {{ $user->email }}</p>
							@if(Auth::user()->id != $user->id)
								<form action="{{ url('/updateuser', ['id' => $user->id]) }}" method="post">
									<input class="btn submitBtn" type="submit" value="Edit User" />
									@csrf
								</form>
								<br/>
								<form action="{{ url('/userdelete', ['id' => $user->id]) }}" method="post">
									<input class="btn submitBtn" type="submit" value="Delete User" />
									@method('delete')
									@csrf
								</form>
							@endif
						</div>  
					</li>
				@endforeach
			</ul>
		</div>
	</div>
	
	@else
		<p>Please login as an administrator to continue.</p>
	@endif
 
 </div>   
@endsection