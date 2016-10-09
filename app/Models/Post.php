<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'cover_image', 'content', 'status', 'creator_id'];

    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'creator_id');
    }

    public function path()
    {
        return '/admin/posts/' . $this->id;
    }
}
