@extends('layouts.app')

@section('content')
<div class="detail">
  <div class="detail_div_form">
    <h1 class="detail_h1">{{ $maps->explanation }}</h1>
    <form action="{{ route('detail_create',['id'=>$maps->id]) }}" method="post" class="detail_form">
      @csrf
      <input type="hidden" name="maps_id" value="{{ $maps->id }}">
      <textarea name="text" class="detail_text" cols="30" rows="5" required></textarea>
      <input type="submit" value="追加" class="detail_submit">
    </form>
  </div>
  <div class="detail_div_ul">
    @foreach($detail_text as $text)
    <ul class="detail_ul">
      <li class="detail_li">{{ $text->text }}</li>
    </ul>
    @endforeach
  </div>
</div>
@endsection