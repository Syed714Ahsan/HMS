<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('city');
            $table->string('hostel_name');
            $table->string('hostel_type');
            $table->string('hostel_picture');
            $table->integer('available_seats');
            $table->integer('total_persons');
            $table->string('facilities');
            $table->string('warden_name');
            $table->string('hostel_address');
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
        Schema::dropIfExists('hostels');
    }
}
