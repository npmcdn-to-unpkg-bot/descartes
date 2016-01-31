@extends('master')
@section('content')
    <h2>Results</h2>
	<div class="iso-grid hidden">
		@foreach($emoticons as $emoticon)
			@if ($emoticon->type == "image" || $emoticon->type == "gif")
				<div class="grid-item">
					<img src="{{ $emoticon->link }}" />
				</div>
			@elseif($emoticon->type == "youtube")
				<div class="grid-item">
					{!! $emoticon->embedded !!}
				</div>
			@endif	
		@endforeach
	</div>
@endsection
@section('scripts')
	<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
	<script src="../js/results.js"></script>
@endsection
