<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerJob extends Model
{
    protected $fillable = ['title', 'description', 'location', 'department', 'status', 'creator_id'];

    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'creator_id');
    }

    public function path()
    {
        return '/admin/career_jobs/' . $this->id;
    }
}
