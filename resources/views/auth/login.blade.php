@guest
<form method="POST" action="{{ route('login') }}">
    	@csrf
        <input type="text" id="username" name="username" class=""  value="{{ old('username') }}" required autofocus />
        @if ($errors->has('username'))
        	<strong>{{ $errors->first('username') }}</strong>
        @endif
        <input type="password" id="password" name="password" required />
        @if ($errors->has('password'))
        	<strong>{{ $errors->first('password') }}</strong>
        @endif
		<input type="checkbox" name="remember" /> Souvenir
		<button type="submit">Connexion</button>
	</form>
@endguest