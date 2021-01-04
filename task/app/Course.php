<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['campus_id','name', 'price'];

    public function getPriceAttribute(){
        return $this->attributes['price'] / 100;
    }
    public function setPriceAttribute($value){
        $this->attributes['price'] = $value * 100;
    }
    public function coursetypes(){
        return $this->belongsToMany(CourseType::class, 'coursehastypes');
    }
    public function campuses(){
        return $this->belongsToMany(Campus::class);
    }
}
