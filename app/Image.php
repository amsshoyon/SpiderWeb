<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public function Portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}
}
