<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiomedicalEquipment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'maintenance_plan',
        'risk_factor_id',
        'category_id',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo('App\BiomedicalEquipmentCategory');
    }

    public function equipmentRoom()
    {
        return $this->hasOne('App\EquipmentRoomRequired');
    }

    public function risk_factor()
    {
        return $this->belongsTo('App\RiskFactor');
    }
}
