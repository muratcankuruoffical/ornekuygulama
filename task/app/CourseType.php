<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    //
    protected $table = "coursetypes";
    protected $fillable = ['name'];
    public function courses(){
        return $this->belongsToMany(Course::class, 'coursehastypes');
    }
}
