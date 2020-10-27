<?php

namespace App\Model\application;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id','job_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\user\User');
    }

    public function job()
    {
        return $this->belongsTo('App\Model\job\Job');
    }


}
