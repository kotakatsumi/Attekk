@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/users.css') }}">
@endsection

@section('content')
<div class="instruction">
</div>
<div class="users-content">
    <div class="users-table">
        <table class="users-table__inner">
            <tr class="users-table__row">
                <th class="users-table__header"></th>
                <th class="users-table__header">ユーザーID</th>
                <th class="users-table__header">氏名</th>
                <th class="users-table__header">メールアドレス</th>
            </tr>
            @foreach ($items as $item)
            <tr class="users-table__row">
                <td class="users-table__item">
                    <form action="/users/attendance" method="post">
                        @csrf
                        <input type="hidden" name="userid" value="{{$item->id}}">
                        <button type="submit">表示</button>
                    </form>
                </td>
                <td class="users-table__item">{{ $item['id'] }}</td>
                <td class="users-table__item">{{ $item['name'] }}</td>
                <td class="users-table__item">{{ $item['email'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@if($items->total() > 0)
<div class="pagination-text">
    <p>{{ $items->total() }}件中{{ $items->firstItem() }}〜{{ $items->lastItem() }} 件を表示</p>
</div>
<div class="pagination__indicator">
    <p>{!! $items->links() !!}</p>
</div>
@endif
@endsection