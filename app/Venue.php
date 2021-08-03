<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public $table = 'venues';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'city',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
