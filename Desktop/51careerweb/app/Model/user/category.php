<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     public function posts()

     {
      return $this->belongsToMany('App\Model\user\post','post_tags');

     }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
