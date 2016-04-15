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
            $table->primary('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('agreement')->default(true);
            $table->tinyInteger('level')->default(1);
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('data_file')->nullable();
            $table->string('data_mime')->nullable();
            $table->string('data_ori_filename')->nullable();
            $table->string('result_file')->nullable();
            $table->string('result_mime')->nullable();
            $table->string('result_ori_filename')->nullable();
            $table->string('review_file')->nullable();
            $table->string('review_mime')->nullable();
            $table->string('review_ori_filename')->nullable();
            $table->float('budged')->nullable();
            $table->tinyInteger('paid')->default(1);
            $table->tinyInteger('pay_method')->nullable();
            $table->string('pay_account')->nullable();
            $table->boolean('require_invoice')->default(false);
            $table->boolean('invoice_delivered')->default(false);
            $table->boolean('verified')->default(false);
            $table->boolean('claimed')->default(false);
            $table->integer('claimed_user_id')->index()->nullable();
            $table->boolean('completed')->default(false);
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
