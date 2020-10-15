<?php

namespace App\Model\application;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'userid','jobid'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function job()
    {
        return $this->belongsTo('App\Model\job\Job');
    }


}