<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalRoom extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'mesh',
        
    ];

    public function floors(){
        return $this->hasMany('App\Floor');
    }

    public function walls(){
        return $this->hasMany('App\Wall');
    }

    public function cellings(){
        return $this->hasMany('App\Celling');
    }

    public function biomedicalEquipments(){
        return $this->hasMany('App\EquipmentRoomRequired');
    }
}
