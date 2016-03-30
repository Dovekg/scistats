<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->index();
            $table->tinyInteger('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->string('phone')->nullable();
            $table->float('salary_total')->nullable();
            $table->float('salary_left')->nullable();
            $table->float('checkout_money')->nullable();
            $table->tinyInteger('checkout_type')->nullable();
            $table->tinyInteger('checkout_account')->nullable();
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
        Schema::drop('profiles');
    }
}
