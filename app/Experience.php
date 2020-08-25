<?php

namespace App;

use Carbon\Carbon;
use Carbon\CarbonInterface;
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

    public function getDurationAttribute()
    {
        if ($this->attributes['current']) {
            return Carbon::now()->to(Carbon::parse($this->attributes['from']), CarbonInterface::DIFF_ABSOLUTE, false, 2);
        }

        return Carbon::parse($this->attributes['to'])->to(Carbon::parse($this->attributes['from']), CarbonInterface::DIFF_ABSOLUTE, false, 2);
    }
}
