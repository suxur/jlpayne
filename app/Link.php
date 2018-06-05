<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
