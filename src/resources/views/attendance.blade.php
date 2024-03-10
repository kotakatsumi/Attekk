@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="attendance-content">
    <div class=date>
        <form class="date__form" action="/attendance" method="post">
            @csrf
            <input type="hidden" name="add" value=-1>
            <button class="date__button" type="submit">＜</button>
        </form>
        <p class="date__indication">{{ $year ?? '' }}年{{ $month ?? '' }}月{{ $day ?? '' }}日</p>
        <form class="date__form" action="/attendance" method="post">
            @csrf
            <input type="hidden" name="add" value=1>
            <button class="date__button" type="submit">＞</button>
        </form>
    </div>
    <div>
        @if ('alert')
        <div class="alert">{{ $alert ?? '' }}</div>
        @endif
    </div>
    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">氏名</th>
                <th class="attendance-table__header">勤務開始時刻</th>
                <th class="attendance-table__header">勤務終了時刻</th>
                <th class="attendance-table__header">休憩時間(min)</th>
                <th class="attendance-table__header">勤務時間(hr)</th>
            </tr>
            @foreach ($items as $item)
            <tr class="attendance-table__row">
                <td class="attendance-table__item">{{ $item['user_id'] }}</td>
                <td class="attendance-table__item">{{ (new DateTime($item['check_in']))->format('H:i') }}</td>
                <td class="attendance-table__item">{{ (new DateTime($item['check_out']))->format('H:i') }}</td>
                <td class="attendance-table__item">{{ $item['break_time'] }}</td>
                <td class="attendance-table__item">{{ sprintf('%.2f', $item['work_time']) }}</td>
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