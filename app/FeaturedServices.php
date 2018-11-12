<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedServices extends Model
{
    protected $fillable = array('description', 'image', 'title', 'size');
}
