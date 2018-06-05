<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the profile record associated with the user.
     */
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     * Get the links record associated with the user.
     */
    public function links()
    {
        return $this->hasMany('App\Link');
    }

    /**
     * Get the skills record associated with the user.
     */
    public function skills()
    {
        return $this->hasMany('App\Skills')->whereNull('parent_id')->with('children');
    }
}
