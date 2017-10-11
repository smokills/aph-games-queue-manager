<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['ign'];

    public function queue()
    {
        return $this->belongsTo(App\Queue::class);
    }

    public function game()
    {
        return $this->belongsToMany(App\Game::class);
    }
}
