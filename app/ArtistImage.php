<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistImage extends Model
{
    protected $fillable = [
        'user_id', 'url'
    ];

    public function artist(){
        return $this->BelongsTo('App\User');
    }
}
