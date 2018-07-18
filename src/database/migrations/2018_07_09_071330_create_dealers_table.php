<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname');
            $table->string('addressline1');
            $table->string('addressline2');
            $table->string('state');
            $table->string('pincode');
            $table->string('country');
            $table->string('mobile');
            $table->string('gst');
            $table->string('email');
            $table->string('website');
            $table->string('contact_person');
            $table->string('contact_person_mobile');
            $table->string('opening_balance')->nullable();
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
        Schema::dropIfExists('dealers');
    }
}
