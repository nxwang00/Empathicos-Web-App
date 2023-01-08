<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'title', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * Get the template created at.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['created_at']));
    }

    /**
     * Get the template updated at.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['updated_at']));
    }

    public function next()
    {
         return $this->where('id', '>', $this->id)->orderBy('id','asc')->first();
    }
    public function previous()
    {
        return $this->where('id', '<', $this->id)->orderBy('id','desc')->first();
    }

    public function category()
    {
        return $this->belongsTo('App\Mainsubcat', 'category_id');
    }
}
