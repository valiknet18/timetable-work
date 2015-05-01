<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model {

    protected $table = "events";

    public function auditory()
    {
        return $this->belongsTo('Auditory');
    }

    public function teacher()
    {
        return $this->belongsTo('Teacher');
    }

    public function subject()
    {
        return $this->belongsTo('Subject');
    }

    public function groups()
    {
        return $this->belongsToMany('Group', 'event_group');
    }
}
