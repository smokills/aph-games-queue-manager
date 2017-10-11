<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staion extends Model
{
    protected $fillable = ['name', 'status'];

    public function games()
    {
        return $this->hasMany(App\Game::class);
    }
}
