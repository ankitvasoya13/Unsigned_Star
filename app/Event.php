<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'event_name', 'description', 'venue', 'location', 'featured_image', 'start_datetime', 'end_datatime'

    ];

}
