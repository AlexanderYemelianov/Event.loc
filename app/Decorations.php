<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decorations extends Model
{
    protected $fillable = [ 'decorations_name', 'decorations_description', 'decorations_thumb'];

    public function decorItems()
    {
        return $this->hasMany(DecorItems::class);
    }
}
