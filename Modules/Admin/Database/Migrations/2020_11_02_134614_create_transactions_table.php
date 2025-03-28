<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('t_user_id')->default(0)->index();
            $table->integer('t_guest_id')->default(0)->index();
            $table->integer('t_busts_id')->default(0)->index();
            $table->integer('t_admin_id')->default(0);
            $table->integer('t_total_money')->default(0);
            $table->char('t_code')->nullable();
            $table->text('t_note')->nullable();
            $table->string('t_phone')->nullable();
            $table->string('t_name')->nullable();
            $table->string('t_email')->nullable();
            $table->string('t_address')->nullable();
            $table->date('t_date_success')->nullable();
            $table->integer('t_destination_id')->default(0);
            $table->integer('t_starting_point_id')->default(0);
            $table->integer('t_vehicle_id')->default(0);
            $table->integer('t_buses_location_start')->default(0);
            $table->integer('t_buses_location_stop')->default(0);
            $table->timestamp('t_time_start')->nullable();
            $table->timestamp('t_time_stop')->nullable();
            $table->tinyInteger('t_type_pay')->default(1);
            $table->tinyInteger('t_total_ticket')->default(0);
            $table->tinyInteger('t_pick_home')->default(0);
            $table->tinyInteger('t_status_pick_home')->default(1);
            $table->string('t_address_pick_home')->nullable();
            $table->text('t_note_user')->nullable();
            $table->timestamp('t_time_process')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
