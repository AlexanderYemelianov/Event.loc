<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsType extends Model
{
    protected $fillable = ['type_name', 'description', 'thumbnail', 'class'];

    //There should be a strict Select of teambuildings programs

    public function events()
    {
        return $this->hasMany(Event::class);
    }

}
