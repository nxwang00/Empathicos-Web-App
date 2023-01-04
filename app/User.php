<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id', 'name', 'birthday', 'email', 'about', 'password', 'image', 'status', 'email_verified_at','promo_code','device_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token','email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
    ];


    /**
     * Get the User created at.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['created_at']));
    }


    /**
     * Get the User updated at.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['updated_at']));
    }



    /**
     * Get the User birthday.
     *
     * @param  string  $value
     * @return string
     */
    public function getBirthdayAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['birthday']));
    }


}
