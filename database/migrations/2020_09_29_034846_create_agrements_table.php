<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agrements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date')->nullable();
            $table->string('active_date')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_address')->nullable();
            $table->string('owner_nid')->nullable();

            $table->string('guest_name')->nullable();
            $table->string('gurdian_name')->nullable();
            $table->string('guest_nid')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('seat_no')->nullable();
            $table->string('validity_date')->nullable();


            $table->string('admission_fee')->nullable();
            $table->string('security_deposit')->nullable();
            $table->string('seat_rent')->nullable();

            $table->string('roo_no')->nullable();
            $table->string('floor')->nullable();
            $table->string('hostel_address')->nullable();
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
        Schema::dropIfExists('agrements');
    }
}
