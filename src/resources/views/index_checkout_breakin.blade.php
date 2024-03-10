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
    <div class="attendance__button">
      <button class="attendance__button-submit--off" type="submit">勤務開始</button>
    </div>
    <form class="attendance__button" action="/checkout" method="post">
      @csrf
      <button class="attendance__button-submit" type="submit">勤務終了</button>
    </form>
  </div>
  <div class="break__panel">
    <form class="break__button" action="/breakin" method="post">
      @csrf
      <button class="break__button-submit" type="submit">休憩開始</button>
    </form>
    <div class="break__button">
      <button class="break__button-submit--off" type="submit">休憩終了</button>
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