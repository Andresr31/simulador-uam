<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
        'code',
        'main_teacher',
        'assistant_teacher'
    ];

    public function main_teacher()
    {
        $main_teacher = User::find($this->main_teacher);
        return $main_teacher;
    }

    public function assistant_teacher()
    {
        $assistant_teacher = User::find($this->assistant_teacher);
        if ($assistant_teacher) {
            return $assistant_teacher;
        }else{
            return null;
        }
        
    }
}
