<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Item extends Model
{
	protected $fillable = ['name', 'category', 'content', 'photo1', 'purchase'];

	public function item_photos()
	{
		return $this->hasMany('App\ItemPhoto');
	}

	public static function search(Request $request)
	{
		$query = Item::query();

		if($query) {
			$items = Item::where('category', 'LIKE', "%{$request->catesort}%");
		}

		return $items->orderBy('created_at', 'desc');
	}
}
