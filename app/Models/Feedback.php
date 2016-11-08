<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'content'];
//    protected $guarded = ['geetest_challenge', 'geetest_validate', 'geetest_seccode'];
}
