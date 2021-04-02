<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiomedicalEquipmentCategory extends Model
{
    protected $fillable = [
        'name', 
        'description',
    ];

    public function biomedicalEquipments(){
        return $this->hasMany('App\BiomedicalEquipments');
    }
}
