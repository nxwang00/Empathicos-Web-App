<?php

namespace App;

use App\Badge;
use App\BadgeTemplate;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','image','status','journey_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];


    /**
     * Get the Badge created at.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['created_at']));
    }


    /**
     * Get the Badge updated at.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['updated_at']));
    }


    public function templates()
    {
        return $this->hasMany('App\BadgeTemplate', 'badge_id');
    }
}
