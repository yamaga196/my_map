@extends('layouts.app')

@section('content')

@foreach($diary as $diary)
<div class="diary_detail_div">
<a href="{{ route('diary_detail_show_detail',['id'=>$diary->id]) }}" class="diary_detail_a">
  <p class="diary_detail_date">
    {{ $diary->date }}
  </p>
  <p class="diary_detail_english">
    {{ $diary->english }}
  </p>
</a>
</div>
@endforeach

@endsection
