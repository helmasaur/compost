@extends('layouts.base')

@section('title', 'Planter')

@section('content')
	<main>
		@foreach($modules as $module)
			@include('dashboard.module')
		@endforeach
	</main>
@endsection