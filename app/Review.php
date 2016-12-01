<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [ 'company_name', 'reviewer_name', 'reviewer_position', 'review_date', 'review_text', 'review_visual_content'];
}
