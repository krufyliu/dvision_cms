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

    public static function keyNames()
    {
        $all = self::all();
        $map = [];
        foreach ($all as $item) {
            $map[$item->id] = $item->title;
        }
        return $map;
    }
}
