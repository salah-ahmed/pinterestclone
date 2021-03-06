@extends('layouts/master')

@section('content')
	@foreach($pins as $pin)
	<div class="col-md-4">

	    <div class="thumbnail">
	        <img src="{{ $pin->url }}" alt="title" class="img-responsive">
	        
	    	<div class="caption">
	        	<p class="text-center">{{ $pin->title }}</p>
				@include('layouts/actions')
	   		</div>
	    </div>
	</div>
	@endforeach
@endsection