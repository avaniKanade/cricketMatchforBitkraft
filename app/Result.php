<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use SoftDeletes;

    public $table = 'results';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'winnerteam_id',
        'second_team_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function winnerteam()
    {
        return $this->belongsTo(Match::class, 'winnerteam_id');
    }

    public function second_team()
    {
        return $this->belongsTo(Match::class, 'second_team_id');
    }
}
