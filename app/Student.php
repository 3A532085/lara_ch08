<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Score as ScoreEloquent;
use \App\User as UserEloquent;
use DB;

class Student extends Model
{
    protected $table ='students';

    public function score()
    {
        return $this->hasOne(ScoreEloquent::class);
    }

    public function user()
    {
        return $this->belongsTo(UserEloquent::class);
    }
}
