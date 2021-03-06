<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');

    }

    public function posts()
    {
        return $this
            ->hasMany('App\Post')
            ->orderBy('created_at', 'desc');
    }
}
