<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'cover_image', 'content'];

    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'creator_id');
    }
}
