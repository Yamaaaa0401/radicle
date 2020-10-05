<div id="app">
  <nav class="navbar navbar-expand-md  navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">ラジくる</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{url("/")}}">セミナー一覧 <span class="sr-only"></span></a>
          <a class="nav-item nav-link" href="{{ route('createSeminar') }}">セミナー投稿</a>
        </div>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->family_name }}
              {{ Auth::user()->given_name }}
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a class="dropdown-item" href="{{ route('index') }}">マイページ</a>
              </li>
              <li>
                <a class=" dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}</a>
              </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
      </div>
      </li>
      @endguest
      </ul>
    </div>
</div>
</nav>
</div>