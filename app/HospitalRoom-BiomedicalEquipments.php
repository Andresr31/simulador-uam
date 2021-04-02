<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalRoomBiomedicalEquipments extends Model
{
    protected $fillable = [
        'room_id', 
        'enviroment_id',
        'required',
        'feedback'
    ];

    public function hospitalRoom(){
        return $this->belongsTo('App\HospitalRoom');
    }

    public function biomedicalEquipment(){
        return $this->belongsTo('App\BiomedicalEquipment');
    }
    
}
