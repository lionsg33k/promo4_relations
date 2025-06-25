<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    //

    protected $fillable  = [
        "name"
    ];


    public function students()
    {

        return $this->belongsToMany(Student::class, "field_students");
    }
}
