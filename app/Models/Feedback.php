<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'content', 'type'];
//    protected $guarded = ['geetest_challenge', 'geetest_validate', 'geetest_seccode'];


    public function getTypeString()
    {
        $type = $this->type;
        $string;
        switch($type) {
            case 1: 
                $string = "留言";
                break;
            case 2:
                $string = "订购";
                break;
            case 3:
                $string = "加盟";
                break;
            default: 
                $string = "留言";
                break;
        }
        return $string;
    }
}
