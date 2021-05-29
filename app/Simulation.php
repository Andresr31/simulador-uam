<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $fillable = [
        'time',
        'numberAttempts',
        'hopital_room_id',
        'user_id',
        'report_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function hospitalRoom()
    {
        return $this->belongsTo('App\HospitalRoom', 'hopital_room_id', 'id');
    }

    public function report()
    {
        return $this->belongsTo('App\Report');
    }
}
