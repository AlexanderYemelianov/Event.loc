<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_name','events_type_id', 'description', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function eventType()
    {
        return $this->belongsTo(EventsType::class);
    }

    public function photos()
    {
     return $this->hasMany(EventsPhoto::class);
    }
}
