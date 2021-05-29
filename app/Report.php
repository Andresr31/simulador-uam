<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'pre', 
        'simulation',
        'score_pre',
        'score_simulation',
        'score_pos',
        'score_total'
    ];

    public function simulation(){
        return $this->belongsTo('App\Simulation');
    }
}
