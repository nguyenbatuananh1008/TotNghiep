<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_support')->nullable();
            $table->string('email')->unique();
            $table->string('slug')->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->text('about')->nullable();
            $table->text('about_price')->nullable();
            $table->string('avatar')->nullable();
            $table->char('phone',15)->nullable();
            $table->integer('point')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_register_one')->default(0);
            $table->tinyInteger('is_guest')->default(0);
            $table->integer('presenter_id')->default(0)->index();
            $table->integer('vote_number')->default(0);
            $table->integer('vote_total')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
