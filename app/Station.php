<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['name', 'status'];

    public function games()
    {
        return $this->belongsToMany(\App\Game::class);
    }

    public function queue()
    {
        # code...
    }

     public function getGameIdsAttribute()
    {
        return $this->games->pluck('id');
    }
}
