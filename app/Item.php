<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name', 'category', 'content', 'photo1'];

	public function item_photos()
	{
		return $this->hasMany('App\ItemPhoto');
	}
}
