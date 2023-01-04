<?php

namespace App;

use App\AudioCourse;
use Illuminate\Database\Eloquent\Model;

class AudioCourse extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id','title', 'description','image','audio'
    ];
    
    protected $table = 'audio_courses';
     
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

}