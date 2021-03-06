<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'title', 'content', 'featured_image', 'meta_title', 'meta_description'

    ];

}
