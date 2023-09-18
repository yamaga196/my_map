@extends('layouts.app')

@section('content')

<div class="diary_detail_show_div">
  <p class="diary_detail_show_date">
    {{ $diary->date }}
  </p>
  <div class="diary_detail_show_img">
    <img src="{{ asset(Storage::url($diary->img_path)) }}" class="detail_img">
  </div>
  <p class="diary_detail_show_english">
    {{ $diary->english }}
  </p>
  <p class="diary_detail_show_good_point">
    {{ $diary->good_point }}
  </p>
  <p class="diary_detail_show_bad_point">
    {{ $diary->bad_point }}
  </p>
</div>


@endsection
