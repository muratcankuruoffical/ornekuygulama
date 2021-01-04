<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = ['name','email','logo'];
    public function campuses(){
        return $this->hasMany(Campus::class);
    }
}
