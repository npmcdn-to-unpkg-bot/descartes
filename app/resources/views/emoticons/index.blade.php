@extends('index')
@section('content')
	<h1>Testing</h1>
	@foreach($emoticons as $emoticon)
		<img src="{{ $emoticon->href }}" />
	@endforeach
@endsection
