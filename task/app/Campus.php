<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //
    protected $fillable = ['schoold_id','name', 'email', 'phone', 'address'];
    public function schools(){
        return $this->belongsToMany(School::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
