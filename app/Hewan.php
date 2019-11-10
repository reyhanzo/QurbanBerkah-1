<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
	public function gambarhewan()
	{
		return $this->hasMany("App\GambarHewan");
	}

	public function satugambarhewan()
	{
		return $this->hasOne("App\GambarHewan")->oldest();
	}
}
