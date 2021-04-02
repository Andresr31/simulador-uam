<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $fillable = [
        'time', 
        'numberAttempts',
        'user_id',
        'enviroment_id',
        'report_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function hospitalRoom(){
        return $this->belongsTo('App\HospitalRoom');
    }

    public function report(){
        return $this->belongsTo('App\Report');
    }

    
}
