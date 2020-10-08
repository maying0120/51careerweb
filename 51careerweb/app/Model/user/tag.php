<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts()

    {
     return $this->belongsToMany('App\Model\user\post','category_post');

    }

    public function getRouteKeyName()
      {

         return 'slug';
      }

}
