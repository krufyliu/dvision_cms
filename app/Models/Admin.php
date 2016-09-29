<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
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

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'creator_id');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video', 'creator_id');
    }

    public function links()
    {
        return $this->hasMany('App\Models\Link', 'creator_id');
    }

    public function careerJobs()
    {
        return $this->hasMany('App\Models\CareerJob', 'creator_id');
    }
}
