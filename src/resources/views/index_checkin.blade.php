@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="greeting">
  <p class="greeting__words">
    <?php $user = Auth::user(); ?>{{ $user->name }}さんお疲れ様です！
  </p>
</div>

<div class="attendance__content">
  <div class="attendance__panel">
    <form class="attendance__button" action="/checkin" method="post">
      @csrf
      <button class="attendance__button-submit" type="submit">勤務開始</button>
    </form>
    <div class="attendance__button">
      <button class="attendance__button-submit--off">勤務終了</button>
    </div>
  </div>
  <div class="break__panel">
    <div class="break__button">
      <button class="break__button-submit--off">休憩開始</button>
    </div>
    <div class="break__button">
      <button class="break__button-submit--off">休憩終了</button>
    </div>
  </div>
</div>

@if (session('alert'))
<div class="alert">{{ session('alert') }}</div>
@endif
@if ('message')
<div class="message">{{ $message ?? '' }}</div>
@endif
@endsection