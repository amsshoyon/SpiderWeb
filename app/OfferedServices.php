<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferedServices extends Model
{
    protected $fillable = array('description', 'image', 'title', 'size');
}
