<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    public const TYPES = [
        '1' => 'First Templates',
        '2' => 'Second Templates',
        '3' => 'Third Templates',
        '4' => 'Fourth Templates',
        '5' => 'Fifth Templates',
        '6' => 'Sixth Templates',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'field', 'value',
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


    /**
     * Get the user associated with the Payment.
     */
    public function category()
    {
        return $this->belongsTo('App\BadgeCategory', 'category_id');
    }
}
