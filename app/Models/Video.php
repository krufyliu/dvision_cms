<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'cover_image', 'url', 'description', 'category_id'];

    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'creator_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\VideoCategory', 'category_id');
    }
}
