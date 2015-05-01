<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

    public function subjects()
    {
        return $this->belongsToMany('Subject', 'teacher_subject');
    }

    public function lessons()
    {
        return $this->hasMany('Event');
    }
}