<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    public function lessons()
    {
        return $this->hasMany('Event');
    }

    public function events()
    {
        return $this->belongsToMany('Event', 'event_group');
    }
}