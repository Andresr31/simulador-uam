<?php

namespace App;

use App\Notifications\UserResetPassworNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'career_id', 'semester', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_verified_at', 'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function simulations()
    {
        return $this->hasMany('App\Simulation')->orderBy('created_at', 'desc');
    }

    public function career()
    {
        return $this->belongsTo('App\Career');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Return true or false, if a user is an assistant teacher.
     *
     * @return array
     */
    public function isAssistantTeacher()
    {
        if (count(Group::where('assistant_teacher',$this->id)->get())>0) {
            return true;
        }else{
            return false;
        }
    }

    public function sendPasswordResetNotification($token){
        $this->notify(new UserResetPassworNotification($token));
    }

}
