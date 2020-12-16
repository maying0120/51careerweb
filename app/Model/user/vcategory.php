<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class vcategory extends Model
{
     public function videos()

     {
      return $this->belongsToMany('App\Model\user\video','video_vcategory');

     }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
