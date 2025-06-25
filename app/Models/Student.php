<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable  = [
        "name"
    ];



    public function fields()
    {

        return $this->belongsToMany(Field::class, "field_students");
    }
}
