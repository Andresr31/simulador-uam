<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyCard extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'content',
        'image',
        'owner_id'
    ];

    public function owner(){
        return $this->belongsTo('App\User');
    }
}
