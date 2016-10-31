<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function types()
    {
        return $this->hasMany(EventsType::class, Event::class);
    }
}
