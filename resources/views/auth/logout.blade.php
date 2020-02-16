@extends('layouts.base')

@section('title', 'Logout')

@section('content')
	<main>
		@include('auth.forms.logout')
	</main>
@endsection