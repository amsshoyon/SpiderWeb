<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = array('image', 'name', 'designation', 'fb_link', 'twitter_link', 'google_link', 'linkedin_link', 'size');
}
