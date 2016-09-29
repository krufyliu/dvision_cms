<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['title', 'url', 'description', 'icon'];

    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'creator_id');
    }
}
