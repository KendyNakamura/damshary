<?php

namespace App\Http\Controllers;

use App\Item;
use App\Http\Requests\ItemRequest;
//use Illuminate\Http\Request;
use Request;
use Intervention\Image\Facades\Image;

class ItemController extends Controller
{
	public function index()
	{
		$items = Item::all();
		return view('item.index', compact('items'));
	}

	public function getSearch()
	{
		$query = Request::input('catesort');

		if ($query) {
			$items = Item::where('category', 'LIKE', "%$query%")->get();
		}else{
			$items = Item::all();
		}

		return view('item.index', compact('items'));
	}

	public function show($id)
	{
		$item = Item::find($id);
		return view('item.show', ['item' => $item]);
	}

	public function create()
	{
		return view('item.create');
	}

	 public function store(Request $request)
	 {
		 $input = $request->all();

		  // getClientOriginalName()：アップロードしたファイルのオリジナル名を取得します
  		 $fileName = $input['fileName']->getClientOriginalName();

 		 // getRealPath()：アップロードしたファイルのパスを取得します。
 		 $image = Image::make($input['fileName']->getRealPath());

		 // 画像を保存する
		 $image->save(public_path() . '/images/' .  '/' . $fileName);

		 $path = '/images/'.$fileName;

		 $item = new Item;
         $item->category = $request->category;
         $item->name = $request->name;
         $item->content = $request->content;
		 $item->photo1 = $path;

		 $item->save();

		 return redirect('/items');
	 }
}
