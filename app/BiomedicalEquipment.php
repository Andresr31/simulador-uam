<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiomedicalEquipment extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'maintenance',
        'maintenance_periodicity',
        'category_id',
        'image'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function hospitalRooms(){
        return $this->hasMany('App\EquipmentRoomRequired');
    }
}
