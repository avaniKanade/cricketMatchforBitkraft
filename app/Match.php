<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public $table = 'matches';

    protected $dates = [
        'start_game',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'start_game',
        'result_1',
        'result_2',
        'city_id',
        'team_1_id',
        'team_2_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getStartGameAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setStartGameAttribute($value)
    {
        $this->attributes['start_game'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function city()
    {
        return $this->belongsTo(Venue::class, 'city_id');
    }

    public function team_1()
    {
        return $this->belongsTo(Team::class, 'team_1_id');
    }

    public function team_2()
    {
        return $this->belongsTo(Team::class, 'team_2_id');
    }
}
