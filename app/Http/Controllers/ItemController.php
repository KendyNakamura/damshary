<?php

namespace App\Http\Controllers;

use App\Item;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use \Cart;
// use Redis;

class ItemController extends Controller
{
	public function index(Request $request)
	{
		return view('item.index', [
			'items' => Item::search($request),
		]);
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
		// itemモデルに移す
	  	$input = $request->all();

	 	// getClientOriginalName()：アップロードしたファイルのオリジナル名を取得
		$fileName = $request->fileName->getClientOriginalName();

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

	public function addItem($id)
	{
		$itemCart = Item::find($id);
		Cart::add($itemCart->id, $itemCart->name, 1, 0);
		return redirect('/items');
	}

	public function removeItem(Request $request)
	{
		$query = $request->removeItem;
		Cart::remove($query);
		return redirect('/items');
	}

	public function confirm()
	{
		return view('item.confirm');
	}

	public function complete()
	{
		$items = Item::all();
		return view('item.complete');
	}

	public function purchaseItem()
	{
		// $items = Item::all();
		// foreach(Cart::content() as $item)
		// 	{
		// 		$pur = Item::find($item->id);
		// 		$pur->purchase = 1;
		// 		$pur->save();
		// 	}
		return redirect('items/complete');
	}
}
