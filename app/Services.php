<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [ 'service', 'service_description', 'service_photo', 'price' ];
}
