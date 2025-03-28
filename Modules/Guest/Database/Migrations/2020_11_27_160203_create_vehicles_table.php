<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('v_name')->nullable();
            $table->string('v_slug')->index();
            $table->tinyInteger('v_number_seats')->default(0);
            $table->tinyInteger('v_type')->default(0)->comment('loại xe nằm hay ngồi');
            $table->string('v_avatar')->nullable();
            $table->string('v_map')->nullable();
            $table->text('v_tags')->nullable();
            $table->string('v_license_plate')->nullable();
            $table->integer('v_guest_id')->default(0);
            $table->tinyInteger('v_status')->default(1);
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
        Schema::dropIfExists('vehicles');
    }
}
