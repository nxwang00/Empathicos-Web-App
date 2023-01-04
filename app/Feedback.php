<?php

namespace App;

use App\Feedback;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "message","user_id",
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
     * Get the feedback created at.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['created_at']));
    }


    /**
     * Get the feedback updated at.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute()
    {
        return date(config()->get('constants.date_time'), strtotime($this->attributes['updated_at']));
    }

    /**
    * Get the user associated with the feedback.
    */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
