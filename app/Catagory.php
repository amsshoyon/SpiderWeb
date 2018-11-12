<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function Portfolio()
	{
		 return $this->hasMany(Portfolio::class);
		 
	}
}
