@extends('layout.base')

@section('title', $module->name)

@section('content')
	<main>
		<h2>{{ $module->name }}</h2>
		<p>{{ $module->content }}</p>
	</main>
@endsection