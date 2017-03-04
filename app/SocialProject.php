<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProject extends Model
{
    protected $fillable = ['project_name', 'description', 'thumbnail'];

    public function content()
    {
        return $this->hasMany(SocialProjectsContent::class);
    }
}
