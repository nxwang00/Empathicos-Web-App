<?php

namespace App;

use App\Favorite;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "badge_id",
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
     * Get the favorite created at.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['created_at']));
    }


    /**
     * Get the favorite updated at.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['updated_at']));
    }

}
