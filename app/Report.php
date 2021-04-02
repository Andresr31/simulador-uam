<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'pre', 
        'simulation',
        'post',
        'score'
    ];

    public function simulation(){
        return $this->belongsTo('App\Simulation');
    }
}
