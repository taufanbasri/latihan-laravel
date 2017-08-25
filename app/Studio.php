<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillabel = ['name', 'founded_at'];

    /**
     * @return array
     */
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
