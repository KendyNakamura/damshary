@extends('layouts.all')

@section('content')
    <table>
        <tbody>
            @include('template.purchase_items')
       	</tbody>
    </table>
    <form action="{{ url('items/purchase') }}" method="post">
        <input type="submit" value="購入完了" class="btn btn-default">
    </form>
    <a href="purchase">購入完了</a>
@endsection

@section('footer')
	2018 Kenji Nakamura
@endsection
