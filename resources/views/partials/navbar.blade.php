<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item">
                DreamTime
            </a>
            <a href="/" class="nav-item is-tab is-hidden-mobile {{ checkActive('/') }}">Home</a>
            <a class="nav-item is-tab is-hidden-mobile">Features</a>
            <a class="nav-item is-tab is-hidden-mobile">Pricing</a>
            <a class="nav-item is-tab is-hidden-mobile">About</a>
        </div>
        <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
        <div class="nav-right nav-menu">
            <a href="/" class="nav-item is-tab is-hidden-tablet {{ checkActive('/') }}">Home</a>
            <a class="nav-item is-tab is-hidden-tablet">Features</a>
            <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
            <a class="nav-item is-tab is-hidden-tablet">About</a>

            @if (!$auth)
                <span class="nav-item">
                    <a href="/login" class="button {{ checkActive('login', 'is-primary') }}">
                        <span class="icon">
                            <i class="fa fa-sign-in"></i>
                        </span>
                        <span>Sign in</span>
                    </a>
                    <a href="/register" class="button {{ checkActive('register', 'is-primary') }}">
                        <span class="icon">
                            <i class="fa fa-user-plus"></i>
                        </span>
                        <span>Register</span>
                    </a>
                </span>
            @else
                <a class="nav-item is-tab">
                    <figure class="image is-16x16" style="margin-right: 8px;">
                        <img src="http://bulma.io/images/jgthms.png">
                    </figure>
                    {{ $auth->name }}
                </a>
                <a class="nav-item is-tab" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </div>
</nav>