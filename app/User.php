<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'address', 'city', 'email', 'password', 'performance'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function specializations()
    {
        return $this->belongsToMany('App\Specialization');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    
    public function advertise()
    {
    return $this->belongsToMany('App\Advertise');
    }

    public function advertises_doctors()
    {
    return $this->hasMany('App\AdvertiseDoctor');
    }
}