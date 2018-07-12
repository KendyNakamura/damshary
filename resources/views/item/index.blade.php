@extends('layouts.all')

@section('content')
	<form class="form-inline" action="{{url('/items')}}">
		<div class="form-group">
			<select name="catesort">
				<option value="">選択してください</option>
				<option value="CD">CD</option>
				<option value="バッグ">バッグ</option>
				<option value="服">服</option>
				<option value="本">本</option>
			</select> 
			<!--<input type="text" name="keyword" value="" class="form-control" placeholder="名前を入力してください">-->
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
			</div>
		@endforeach
	</div>	
@endsection

@section('footer')
	2018 Kenji Nakamura
@endsection
