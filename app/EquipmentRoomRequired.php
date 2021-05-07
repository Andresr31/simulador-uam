<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentRoomRequired extends Model
{
    protected $fillable = [
        'biomedical_equipment_id', 
        'hospital_room_id',
        'required',
        'feedback'
    ];

    protected $hidden = [
        'id','hospital_room_id', 'created_at','updated_at',
    ];

    public function hospitalRoom(){
        return $this->belongsTo('App\HospitalRoom');
    }

    public function biomedicalEquipment(){
        return $this->belongsTo('App\BiomedicalEquipment');
    }
}
