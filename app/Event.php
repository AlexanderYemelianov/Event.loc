<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_name','events_type_id', 'description'];

    public function eventType()
    {
        return $this->belongsTo(EventsType::class);
    }

}
