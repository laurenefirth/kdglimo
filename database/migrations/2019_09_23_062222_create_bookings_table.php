<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('firstName', 100);
			$table->string('lastName', 100);
			$table->string('company', 100);
			$table->decimal('accountNum', 7, 0);
			$table->datetime('pickupDateTime');
			$table->string('cityPickup', 100);
			$table->char('statePickup', 2);
			$table->integer('fare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
