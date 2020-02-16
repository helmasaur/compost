@extends('layouts.base')

@section('title', $show->name)

@section('content')
	<main>
		<h2>{{ $show->name }}</h2>
		@include('modules.episodes.list')
	</main>
@endsection