<form action="/register" method="POST">
    {{ csrf_field() }}

    <div class="field">
        <p class="control has-icon">
            <input name="name" class="input" type="text" placeholder="Your name" value="{{ old('name') }}" required autofocus>
            <span class="icon is-small">
      <i class="fa fa-user-circle"></i>
    </span>
        </p>
        @if ($errors->has('name'))
            <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="field">
        <p class="control has-icon">
            <input class="input" type="email" placeholder="Email" value="{{ old('email') }}" required>
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
            <input class="input" type="password" placeholder="Password" required>
            <span class="icon is-small">
      <i class="fa fa-lock"></i>
    </span>
        </p>
        @if ($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="field">
        <p class="control has-icon">
            <input name="password_confirmation" class="input" type="password" placeholder="Confirm password" required>
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
            <button class="button is-primary">
                Register
            </button>
        </p>
    </div>
</form>
