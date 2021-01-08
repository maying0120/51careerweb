<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class post extends Model
{
    public function tags()
    {
       return $this->belongsToMany('App\Model\user\tag','post_tags')->withTimestamps();
    }


    public function categories()

    {
       return $this->belongsToMany('App\Model\user\category','category_posts')->withTimestamps();

     }

    public function getRouteKeyName()

    {
        return 'slug';
    }

    public function scopeFilter($query,$filters)
    {

          if ($month = $filters['month'])
              {
               $query->whereMonth('created_at',Carbon::parse($month)->month );
              }

             if ($year = $filters['year'])
             {
                 $query->whereYear('created_at',$year );
             }
    }
}
