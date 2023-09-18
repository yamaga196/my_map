@extends('layouts.app')

@section('content')

@foreach($data_id as $id)
    
    <a href="{{ route('detail',['id'=>$id->id]) }}" class="explanation_a">
        <div class="explanation_div">{{ $id->explanation }}・・・</div>
        <div class="explanation_text_div">{{ $id->explanation_text }}</div>
    </a>
    </br>
        
    @endforeach
@endsection
