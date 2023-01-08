<?php

namespace App;

use App\Mainsubcat;
use Illuminate\Database\Eloquent\Model;

class Mainsubcat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id','title', 'description','image', 'is_mini_course'
    ];

    protected $table = 'main_subcategories';

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