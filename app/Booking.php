<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
	/**
     * Return the pickupDateTime timestamp as date only.
     *
     * @return Carbon\Carbon date m-d-Y
     */
    public function getPickupDateAttribute(){
		return Carbon::parse($this->pickupDateTime)->format('m-d-Y');
	}
	
	/**
     * Return the pickupDateTime timestamp as time only (24h).
     *
     * @return Carbon\Carbon time H:i:s
     */
	public function getPickupTimeAttribute(){
		return Carbon::parse($this->pickupDateTime)->format('H:i:s');
	}
}
