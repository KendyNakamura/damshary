@extends('layouts.all')

@section('content')
	<h1>Danshary</h1>
	<table>
	<tr>
		<th>id</th>
		<th>jan code</th>
		<th>category</th>
		<th>name</th>
		<th>content</th>
		<th>photo</th>
	</tr>
	@foreach ($items as $item)
	<tr>
			<td>{{ $item->id }}</td>
			<td>{{ $item->jan }}</td>
			<td>{{ $item->category }}</td>
			<td>{{ $item->name }}</td>
			<td>{{ $item->content }}</td>
			<td>{{ $item->item_photos->path }}</td>
	</tr>
	@endforeach
	</table>
@endsection

@section('footer')
	2018 Kenji Nakamura
@endsection
