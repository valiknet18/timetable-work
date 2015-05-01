<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditory extends Model {

    public function lessons()
    {
        return $this->hasMany('Event');
    }

}