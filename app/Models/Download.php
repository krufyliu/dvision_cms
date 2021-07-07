<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = ['aura'];
    protected $casts = ['aura' => 'array'];


    public function path()
    {
        return '/admin/download/' . $this->id;
    }
}
