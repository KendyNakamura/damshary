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
{!!Form::open(['action' => 'ItemController@store', 'files' => 'true']) !!}
	<div class="form-group">
	{!!Form::label('category', 'カテゴリ') !!}<br>
	{!!Form::select('category', ['CD' => 'CD', 'バッグ' => 'bag', '服' => 'cloth', '本' => 'book' ], null, ['placeholder' => 'カテゴリ'], ['class' => 'form-control']);!!}<br>
	</div>
	<div class="form-group">
	{!!Form::label('name', '商品名') !!}<br>
	{!!Form::text('name', null, ['class' => 'form-control']); !!}
	</div>
	<div class="form-group">
	{!!Form::label('content', '説明') !!}<br>
	{!!Form::text('content', null, ['class' => 'form-control']); !!}
	</div>
	<div class="form-group">
	{!!Form::label('fileName', '画像') !!}<br>
	{!!Form::file('fileName'); !!}<br>
	</div>
	{!!Form::token();!!}
	<div class="form-group">
	{!!Form::submit('upload', ['class' => 'btn btn-seccess']); !!}
	</div>
{!!Form::close() !!}

@endsection

@section('footer')
	KenjiNakamura
@endsection

