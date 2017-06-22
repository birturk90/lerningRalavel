<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Seller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('token');
            $table->string('mobile');
            $table->string('bank_card');
            $table->string('status');
            $table->SoftDeletes();
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::drop('seller');
    }
}