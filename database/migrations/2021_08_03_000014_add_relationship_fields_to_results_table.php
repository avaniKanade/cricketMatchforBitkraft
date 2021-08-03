<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedBigInteger('winnerteam_id')->nullable();
            $table->foreign('winnerteam_id', 'winnerteam_fk_4526178')->references('id')->on('matches');
            $table->unsignedBigInteger('second_team_id')->nullable();
            $table->foreign('second_team_id', 'second_team_fk_4526179')->references('id')->on('matches');
        });
    }
}
