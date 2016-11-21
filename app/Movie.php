<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    public function diaries(){
        return $this->hasMany(Diary::class);
    }
}
