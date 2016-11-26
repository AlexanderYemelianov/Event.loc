<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypesPhoto extends Model
{
    protected $fillable = ['events_type_id', 'photo'];

    //There should be a strict Select of teambuildings programs

    public function photoForType()
    {
        return $this->belongsTo(EventsType::class);
    }
}
