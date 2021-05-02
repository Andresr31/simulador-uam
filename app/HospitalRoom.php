<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalRoom extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'mesh',
        'floor_id',
        'celling_id',
        'wall_id'
    ];

    public function floor(){
        return $this->belongsTo('App\Floor');
    }

    public function wall(){
        return $this->belongsTo('App\Wall');
    }

    public function celling(){
        return $this->belongsTo('App\Celling');
    }

    public function biomedicalEquipments(){
        return $this->hasMany('App\EquipmentRoomRequired');
    }
}
