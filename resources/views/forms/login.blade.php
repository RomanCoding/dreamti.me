<form action="/login" method="POST">
    {{ csrf_field() }}
    <div class="field">
        <p class="control has-icon">
            <input name="email" class="input" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="icon is-small">
      <i class="fa fa-envelope"></i>
    </span>
        </p>
        @if ($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div class="field">
        <p class="control has-icon">
            <input name="password" class="input" type="password" placeholder="Password" required>
            <span class="icon is-small">
      <i class="fa fa-lock"></i>
    </span>
        </p>
        @if ($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>
    <div class="field">
        <p class="control">
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember me
            </label>
        </p>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-primary">
                Login
            </button>
        </p>
    </div>
    <a href="{{ route('password.request') }}">
        Forgot your password?
    </a>
</form>