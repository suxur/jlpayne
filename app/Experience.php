<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'from',
        'to'
    ];

    public function getFromAttribute($value)
    {
        return Carbon::parse($value)->format('M. Y');
    }

    public function getToAttribute($value)
    {
        return Carbon::parse($value)->format('M. Y');
    }
}
