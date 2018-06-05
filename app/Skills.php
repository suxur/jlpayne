<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->hasOne(Skills::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Skills::class, 'parent_id');
    }
}
