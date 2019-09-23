<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
 
<h1>Create New Bookings</h1>
 
<div class="container">
 
    <form method="POST" action="/bookingsaction">
 
        {{ csrf_field() }}
 
       <div>
          <label >Booking First Name</label>
          <input type="text" name="firstName" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking Last Name</label>
          <input type="text" name="lastName" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking Company</label>
          <input type="text" name="company" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking Account Num</label>
          <input type="text" name="accountNum" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking Pickup Date</label>
          <input type="text" name="pickupDate" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking Pickup Time</label>
          <input type="text" name="pickupTime" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking City</label>
          <input type="text" name="cityPickup" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking State</label>
          <input type="text" name="statePickup" placeholder="Booking Name">
 
      </div>
	  <div>
          <label >Booking Fare</label>
          <input type="text" name="fare" placeholder="Booking Name">
 
      </div>
      <div>
 
            <input type="submit" value="Make Booking">
 
      </div>
 
    </form>  
 
 </div>   
 
</body>
</html>