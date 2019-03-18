<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('driver_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('property_number');
            $table->string('first_line_address');
            $table->string('post_code');
            $table->string('phone_number');
            $table->string('route_id');
            $table->timestamps();
            $table->foreign('route_id')->references('route_id')->on('routes')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
