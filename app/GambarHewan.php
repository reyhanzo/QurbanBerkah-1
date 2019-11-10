<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarHewan extends Model
{
	public function hewan()
	{ 
		return $this->belongsTo("App\Hewan");
	}
}
