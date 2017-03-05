<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DecorItems extends Model
{
    protected $fillable = [ 'item', 'decorations_id'];

    public function decorations()
    {
        return $this->belongsTo(Decorations::class);
    }
}
