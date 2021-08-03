<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('start_game')->nullable();
            $table->integer('result_1')->nullable();
            $table->string('result_2')->nullable();
            $table->timestamps();
        });
    }
}
