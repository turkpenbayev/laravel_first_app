<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function notpassed(){
        return static::where('passed_exam', 0)->get();
    }
}
