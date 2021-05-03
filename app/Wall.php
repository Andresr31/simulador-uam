<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wall extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'image',
    ];

    public function hospitalRooms(){
        return $this->hasMany('App\HospitalRoom');
    }

}
