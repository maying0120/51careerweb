<?php

namespace App\Model\application;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user','job'
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\user\User');
    }

    public function job()
    {
        return $this->belongsTo('App\Model\job\Job');
    }

    public function education() {
        return $this->hasOne('App\Model\user\Education','user','user_id');
    }

    public function experience() {
        return $this->hasOne('App\Model\user\Experience','user','user_id');
    }

    public function profile() {
        return $this->hasOne('App\Model\user\Profile','id','user_id');
    }


}
