<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'date', 'location', 'poster', 'url'
    ];

    protected $dates = ['published_at', 'date'];
}
