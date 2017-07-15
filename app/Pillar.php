<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function artists(){
        return $this->HasMany('App\User');
    }
}
