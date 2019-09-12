@extends('layouts.app')

@section('content')
	<div class="container">
		@if (is_array($data) || is_object($data))
			@foreach ($data as $d)
				<li>{{$d->year}}</li>
				<li>{{$d->date}}</li>
				<li>{{$d->change_in_opr}}</li>
				<li>{{$d->new_opr_level}}</li>
			@endforeach
		@endif

	</div>
@endsection