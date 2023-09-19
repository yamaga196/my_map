@extends('layouts.app')

@section('content')

<form action="{{ route('opinion') }}" method="post" class="detail_form">
      @csrf
      <textarea name="opinion" class="opinion_text" required></textarea>
      <input type="submit" value="追加" class="opinion_submit">
</form>

@endsection