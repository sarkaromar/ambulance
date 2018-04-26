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
            $table->increments('booking_id');
            $table->string('booking_applicant_name');
            $table->integer('booking_ambulance_type_id');
            $table->string('booking_form');
            $table->string('booking_to');
            $table->string('booking_date');
            $table->string('booking_time');
            $table->string('booking_mobile');
            $table->string('booking_email')->nullable();
            $table->string('booking_address');
            $table->integer('booking_status')->nullable()->default(0)->comment('0 = inactive, 1 = active');
            $table->integer('booking_updated_by')->nullable();
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
