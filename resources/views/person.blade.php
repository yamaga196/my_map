@extends('layouts.app')

@section('content')
  <div class="person_div">
    <form action="{{ route('person_create') }}" method="post" class="form_create">
      @csrf
      <input type="text" name="name" placeholder="name" class="input_latitude" required>
      <textarea name="person_text" class="input_explanation" placeholder="explanation" cols="30" rows="2" required></textarea>
      <input type="hidden" name="user_id" value="{{ Auth::id() }}" required>
      <input type="submit" value="追加" class="input_submit">
    </form>
  </div>

  <div class="person_list">
    @foreach($person as $person)
    <ul class="person_list_ul">
      <li class="person_list_li">
        <span class="person_list_li_span_name">{{ $person->name }}</span>
        <span class="person_list_li_span_text">{{ $person->person_text }}</span>
      </li>
    </ul>
  </br>
  @endforeach
</div>
@endsection