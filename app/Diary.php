<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['seen_date', 'body'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function movie(){
        return $this->belongsTo('App\Movie');
    }
}
