<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id');
            $table->integer('user_id')->index();
            $table->boolean('agreement')->default(1);
            $table->tinyInteger('level')->default(1);
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('data_file')->nullable();
            $table->string('result_file')->nullable();
            $table->string('review_file')->nullable();
            $table->float('budged')->nullable();
            $table->float('pay')->nullable();
            $table->tinyInteger('pay_method')->nullable();
            $table->string('pay_account')->nullable();
            $table->boolean('require_invoice')->default(0);
            $table->boolean('invoice_delivered')->default(0);
            $table->boolean('verified')->default(0);
            $table->boolean('claimed')->default(0);
            $table->boolean('completed')->default(0);
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
        Schema::drop('tasks');
    }
}
