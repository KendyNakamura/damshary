@extends('layouts.all')

@section('content')
    <form action="{{ route('item.purchase') }}" method="post">
        <table>
            <tbody>
                @include('template.purchase_items')
           	</tbody>
        </table>
        <input type="submit" value="購入完了" class="btn btn-default">
    </form>
@endsection

@section('footer')
	2018 Kenji Nakamura
@endsection
