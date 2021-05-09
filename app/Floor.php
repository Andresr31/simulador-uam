<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'image',
    ];

    protected $hidden = [
        'image', 'created_at','updated_at',
    ];

    public function hospitalRooms(){
        return $this->hasMany('App\HospitalRoom');
    }
}
