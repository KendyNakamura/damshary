<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemPhoto;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function index()
	{
		$items = Item::all();
		return view('item.index', compact('items'));
	}

	public function create(Request $request)
	{
		//POST
		if ($request->isMethod('POST')) {
			//商品情報の保存
			$item = Item::create(
				[
					'jan'=>$request->jan, 
					'category'=>$request->category, 
					'name'=>$request->name, 
					'content'=>$request->content,
				]
			);

			//商品画像の保存
			foreach ($request->file('files') as $index => $e) {
				//拡張子の取得
				$ext = $e['photo']->guessExtension();
				$filename = "{$request->jan}_{$index}.{$ext}";
				$path = $e['photo']->storeAs('photos', $filename);
				// photosメソッドにより、商品に紐づけられた画像を保存する
				$item->photos()->create(['path'=> $path]);
			}
			return redirect('/')->with(['success' => '保存しました']);

		}

		//GET
		return view('item.create');
	}
}
