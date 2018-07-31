@extends('layouts.all')

@section('content')
	<form class="form-inline" action="{{ route('item.index') }}" method="get">
		<div class="form-group">
			<select name="catesort">
				<option value="">選択してください</option>
				<option value="CD">CD</option>
				<option value="バッグ">バッグ</option>
				<option value="服">服</option>
				<option value="本">本</option>
			</select>
		</div>
		<input type="submit" value="検索" class="btn btn-info">
	</form>
	<div class="row">
		@foreach ($items as $item)
			<div class="d-inline-block col-lg-3 col-sm-6 border px-2 py-2 text-center">
				<a href="{{ url('items/'.$item->id) }}">{{ $item->name }}<br></a>
				<img src="{{ asset($item->photo1) }}" width="100" height="100" /><br>
				{{ $item->category}}<br>
				{{ $item->content }}
				<!-- カートへ入れるフォーム　-->
				<form action="{{url('/items/add/'.$item->id)}}">
					<div class="form-group">
						<input type="submit" value="カートへ">
					</div>
				</form>
			</div>
		@endforeach
	</div>

<table>
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
           	<th>Price</th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>
   	<tbody>
		@include('template.purchase_items')
		<a class="btn btn-success" href="/items/confirm">購入確認画面へ</a>
   	</tbody>
</table>
@endsection

@section('footer')
	2018 Kenji Nakamura
@endsection
