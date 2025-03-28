<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->integer('b_destination_id')->default(0)->index()->comment('điểm đến');
            $table->integer('b_starting_point_id')->default(0)->index()->comment('điểm đi');
            $table->integer('b_vehicle_id')->default(0)->index();
            $table->timestamp('b_time_start')->nullable();
            $table->timestamp('b_time_stop')->nullable();
            $table->char('b_time',20)->nullable();
            $table->integer('b_guest_id')->default(0)->index();
            $table->integer('b_price')->default(0);
            $table->tinyInteger('b_status')->default(0);
            $table->tinyInteger('b_type')->default(0);
            $table->date('b_date')->nullable();
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
        Schema::dropIfExists('buses');
    }
}
