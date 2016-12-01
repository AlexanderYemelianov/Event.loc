<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryVideo extends Model
{
    protected $fillable = [ 'video_name', 'gallery_id'];

    public function galleryVideo()
    {
        return $this->belongsTo(Gallery::class);
    }

}
