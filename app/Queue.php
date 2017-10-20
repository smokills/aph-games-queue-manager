<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = [
        'type',
        'status',
        'needed_stations',
    ];

    public function players()
    {
        return $this->hasMany(\App\Player::class);
    }
}
