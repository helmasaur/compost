<form method="POST" action="{{ route('register') }}">
	@csrf
	<input id="name" type="text" name="username" value="{{ old('username') }}" required autofocus />
	@if ($errors->has('username'))
		<strong>{{ $errors->first('username') }}</strong>
	@endif
	<input id="email" type="email" name="email" value="{{ old('email') }}" required>
	@if ($errors->has('email'))
		<strong>{{ $errors->first('email') }}</strong>
	@endif
	<input id="password" type="password" name="password" required />
	@if ($errors->has('password'))
		<strong>{{ $errors->first('password') }}</strong>
	@endif
	<input id="password-confirm" type="password" name="password_confirmation" required />
	<button type="submit">Inscription</button>
</form>
