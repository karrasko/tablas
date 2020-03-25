<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    //Relacion One to Many

    public function comments()
    {

        return $this->hasmany('App\Comment');
    }

    //Relacion Muchos a One

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }
}
