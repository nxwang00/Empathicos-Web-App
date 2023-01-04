<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BadgeCategory extends Model
{
    protected $table = 'badge_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'description', 'status',
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
     * Get the Badge category created at.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['created_at']));
    }


    /**
     * Get the Badge category updated at.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['updated_at']));
    }

    public function badges()
    {
        return $this->hasMany('App\Badge', 'category');
    }

    public function templates()
    {
        return $this->hasMany('App\Template', 'category_id');
    }

}
