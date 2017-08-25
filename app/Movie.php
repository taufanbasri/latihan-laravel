<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'released_date', 'studio_id'];

    public function studio(){
        return $this->belongsTo('App\Studio');
    }
}
