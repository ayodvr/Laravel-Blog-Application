<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
                <div class="col">
                    <p class="mb-0 phone"><span class=""></span> <a href="#"></a></p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div style="margin-top: 5px">
                        <form method="GET" action="/results" class="search-form">
                          <div class="form-group d-flex">
                            <span class="fa fa-search"></span>
                            <input type="text" class="form-control" name="query" placeholder="Type and hit enter">
                          </div>
                        </form>
                      </div>
                </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'lifecoach') }}
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>
          <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            @if(!empty($categories))
              @foreach($categories as $cat)
              <li class="nav-item">
                <a  class="nav-link" href="/posts/all/{{$cat->id}}">{{$cat->description}}</a>
                </li>
                @endforeach
             @endif
          <li class="nav-item"><a href="/posts" class="nav-link" >All News</a>
          </li>
        </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
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
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>
<!-- END nav -->