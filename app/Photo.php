<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [ 'photo_name', 'gallery_id'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

}
