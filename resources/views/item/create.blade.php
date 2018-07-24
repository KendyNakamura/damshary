@extends('layouts.all')

@section('content')
<!-- エラーメッセージ -->
@if (count($errors) > 0)
<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>
@endif

<!-- フォーム -->
{{ Form::open(array('action' => 'ItemController@store' , 'method' => 'post', 'files'=> true)) }}
<!-- <form action="{{action('ItemController@store')}}" method="post" enctype="multipart/form-data"> -->
	<div class="form-group">
		<h2>カテゴリ</h2>
		<select name="category" class="form-control" required>
			<option value="">選択してください</option>
			<option value="CD">CD</option>
			<option value="bag">バッグ</option>
			<option value="cloth">服</option>
			<option value="book">本</option>
		</select>
	</div>
	<div class="form-group">
		<h2>商品名</h2>
		<input type="text" name="name" class="form-control" required>
	</div>
	<div class="form-group">
		<h2>説明</h2>
		<input type="text" name="content" class="form-control">
	</div>
	<div class="form-group">
		<h2>画像</h2>
		<input type="file" name="fileName" required>
	</div>
	{{ csrf_field() }}
	<div class="form-group">
		<input type="submit" value="upload" class="btn btn-success">
	</div>
<!-- </form> -->
{{ Form::close() }}
@endsection

@section('footer')
	KenjiNakamura
@endsection
