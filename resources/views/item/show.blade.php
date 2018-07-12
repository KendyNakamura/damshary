@extends('layouts.all')

@section('content')
	<div class="row">
		<div class="border px-2 py-2 text-center w-100">
			{{ $item->name }}<br>
			<img src="{{ asset($item->photo1) }}" width="100" height="100" /><br>
			カテゴリ：{{ $item->category}}<br>
			説明：{{ $item->content }}
		</div>
	</div>	
@endsection

@section('footer')
	2018 Kenji Nakamura
@endsection
