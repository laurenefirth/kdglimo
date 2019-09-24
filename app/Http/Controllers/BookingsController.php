<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Booking;

/**
*
*/
class BookingsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Bookings Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles creating new bookings for the limo service.
    |
    */
	
	/**
     * Get all the bookings from the bookings table and show in the calendar view.
     *
     * @return view
     */
	public function calendarreport(){
 
        $bookings = Booking::all();
 
        return view('bookings.calendarreport',compact('bookings'));
    }
	
	/**
     * Get all the bookings from the bookings table and show in the list view.
     *
     * @return view
     */
	public function listreport(){
 
        $bookings = Booking::where('pickupDateTime','>=',date("Y-m-d"))
			->where('pickupDateTime','<',date("Y-m-d", strtotime("+ 7 day")))
			->orderBy('pickupDateTime')
			->get();
 
        return view('bookings.listreport',compact('bookings'));
    }
 
 	/**
     * Redirect to the form submission view.
     *
     * @return view
     */
    public function create(){
        return view('bookings.create');
    }
 
 	/**
     * Validate all the fields on the form, then submit the form if all fields are valid.
     *
	 * @param Request $request
     * @return redirect
     */
    public function storeBooking(Request $request){
	
		// Validate all fields - all fields required, some fields have extra requirements
		$validator = Validator::make($request->all(), [
            'firstName' => 'required|string',
			'lastName' => 'required|string',
			'company' => 'required|string',
			'accountNum' => 'required|digits:7',
			'pickupDate' => 'required|date',
			'pickupTime' => 'required',
			'cityPickup' => 'required|string',
			'statePickup' => 'required|string',
			'fare' => 'required|integer|min:50',
        ]);

		// If validation fails, redirect back with error messages
        if ($validator->fails()) {
            return redirect('createbooking')
                        ->withErrors($validator)
                        ->withInput();
        }
	
		// Create new Booking model, add required fields from form, and save to the database
        $booking = new Booking();
		
		$pickupDate = request('pickupDate');
		$pickupTime = request('pickupTime');
 
        $booking->firstName = request('firstName');
        $booking->lastName = request('lastName');
		$booking->company = request('company');
        $booking->accountNum = request('accountNum');
		$booking->pickupDateTime = $pickupDate." ".$pickupTime;
		$booking->cityPickup = request('cityPickup');
        $booking->statePickup = request('statePickup');
		$booking->fare = request('fare');
 
        $booking->save();
 
		// If successful, redirect back to the page with a success message
		return redirect()->back()->with('message', 'Your booking was submitted successfully!');
 
    }
	
}
