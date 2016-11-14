<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['news_name', 'news_description', 'news_date', 'news_thumbnail', 'news_active'];
}
