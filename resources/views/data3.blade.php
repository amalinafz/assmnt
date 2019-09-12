@extends('layouts.app')

@section('content')
	<div class="container">
		@foreach ($data as $d)
			<h3>{{$d->effective_date}}</h3>
		@endforeach

	</div>
@endsection