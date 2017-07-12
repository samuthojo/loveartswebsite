<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'title', 'description', 'type', 'url', 'yt_id', 'placeholder_color'
    ];
}
