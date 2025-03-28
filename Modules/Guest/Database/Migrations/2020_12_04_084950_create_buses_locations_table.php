<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses_locations', function (Blueprint $table) {
            $table->id();
            $table->integer('bl_buses_id')->index()->default(0);
            $table->integer('bl_location_id')->index()->default(0);
            $table->timestamp('bl_time')->nullable();
            $table->tinyInteger('bl_type')->default(1);
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
        Schema::dropIfExists('buses_locations');
    }
}
