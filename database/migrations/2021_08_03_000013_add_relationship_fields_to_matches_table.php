<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMatchesTable extends Migration
{
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_4526116')->references('id')->on('venues');
            $table->unsignedBigInteger('team_1_id')->nullable();
            $table->foreign('team_1_id', 'team_1_fk_4526117')->references('id')->on('teams');
            $table->unsignedBigInteger('team_2_id')->nullable();
            $table->foreign('team_2_id', 'team_2_fk_4526118')->references('id')->on('teams');
        });
    }
}
