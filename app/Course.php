<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'units', 'rooms'];

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
