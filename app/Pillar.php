<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
    protected $fillable = [
        'name', 'description', 'image_url'
    ];

    public function artists(){
        return $this->HasMany('App\User');
    }
}
