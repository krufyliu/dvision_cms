<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerJob extends Model
{
    protected $fillable = ['title', 'description', 'location', 'department'];

    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'creator_id');
    }
}
