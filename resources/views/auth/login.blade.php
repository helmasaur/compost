@extends('layouts.base')

@section('title', 'Login')

@section('content')
	<main>
		@include('auth.form.login')
	</main>
@endsection