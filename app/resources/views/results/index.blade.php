@extends('master')
@section('content')
    <h2>Results</h2>
    @foreach($emoticons as $emoticon)
        <img src="{{ $emoticon->href }}" />
    @endforeach
@endsection
