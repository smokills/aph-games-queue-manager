<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name'];

    public function stations()
    {
        return $this->belongsToMany(App\Station::class);
    }

    public function players()
    {
        return $this->hasMany(App\Player::class);
    }
}
