<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $table = 'players';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'surname',
        'country_id',
        'team_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
