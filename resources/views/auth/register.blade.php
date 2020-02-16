@extends('layouts.base')

@section('title', 'Registration')

@section('content')
	<main>
		@include('auth.forms.register')
	</main>
@endsection