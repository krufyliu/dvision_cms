<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $fillable = ['title'];

    public function videos()
    {
        return $this->hasMany('App\Models\Video', 'category_id');
    }
}
