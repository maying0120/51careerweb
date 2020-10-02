<?php

namespace App\Model\job;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
        'position','job_type','salary','company_size','company','start_time','end_time','hire_time','major','visa_status','english_level','skill','industry','exp_level','expire_time','description','detail','country','state','city'
    ];

    #overwritte
    public function save(array $options = []) {
        $this['start_time'] = date('Y-m-d', strtotime($this['start_time']));
        $this['end_time'] = date('Y-m-d', strtotime($this['end_time']));
        $this['hire_time'] = date('Y-m-d', strtotime($this['hire_time']));
        $this['expire_time'] = date('Y-m-d', strtotime($this['expire_time']));

        parent::save($options);
    }
    

    public function applications()
    {
        return $this->hasMany('App\Model\application\Application');
    }


    
}
