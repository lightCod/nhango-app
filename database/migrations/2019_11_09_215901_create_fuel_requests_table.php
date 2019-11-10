<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('quantity');
            $table->integer('requested_by');
            $table->date('requested_at');
            $table->date('approved_at');
            $table->string('approved_by');
            $table->string('fueled_by');
            $table->date('fueled_at');
            $table->string('obs');
            $table->timestamps();

            $table->unsignedInteger('users_id');
            $table->unsignedInteger('vehicles_id');
            $table->unsignedInteger('locations_id');

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('vehicles_id')->references('id')->on('vehicles');
            $table->foreign('locations_id')->references('id')->on('locations');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_requests');
    }
}
