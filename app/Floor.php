<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'image',
        'enviroment_id'
    ];

    public function hospitalRoom(){
        return $this->belongsTo('App\HospitalRoom');
    }
}
