<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsType extends Model
{
    protected $fillable = ['type_name', 'description', 'thumbnail', 'class'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function photos()
    {
        return $this->hasMany(TypesPhoto::class);
    }

}
