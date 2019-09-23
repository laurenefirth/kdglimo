<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

class BookingsController extends Controller
{
    public function index(){
 
        $bookings = Booking::all();
 
        return view('bookings.index',compact('bookings'));
    }
 
    public function create(){
        return view('bookings.create');
    }
 
    public function storeBooking(){
 
        $booking = new Booking();
 
        $booking->firstName = request('firstName');
        $booking->lastName = request('lastName');
		$booking->company = request('company');
        $booking->accountNum = request('accountNum');
		$booking->pickupDate = now();
        $booking->pickupTime = now();
		$booking->cityPickup = request('cityPickup');
        $booking->statePickup = request('statePickup');
		$booking->fare = request('fare');
 
        $booking->save();
 
        return redirect('/bookings');
 
    }
}
