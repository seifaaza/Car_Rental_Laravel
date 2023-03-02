<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Car rental</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
            .row{
                display: grid;
                grid-template-columns:  repeat( auto-fit, minmax(250px, 1fr) );
            }
            .carousel-item{
                width: 100%;
                height: 400px;
                background-size: cover;
            }
            .carousel{
                width: fit-content;
                overflow: hidden;
            }
            @media(min-width:768px){
                .carousel{
                    width: 25% !important;
                }
            }
            .header-bg{
                background-image: url('img/bg.jpg');
                background-size: cover;
                width: 100%;
            }
            .header{
                height: 100%;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.377);
                backdrop-filter: blur(15px)
            }
            .navbar{
                position: sticky;
                top: 0%;
                z-index: 999;
            }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger ">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="/">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/cars')}}">Cars</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/about')}}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/contact')}}">Contact us</a>
                  </li>


                </ul>
                <ul class=" navbar-nav d-flex">
                    @guest
                            @if (Route::has('login'))
                    <li class="nav-item dropdown">
                        <a class="btn text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">

                          <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                          @endif

                          @if (Route::has('register'))

                          <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('register') }}</a></li>
                          @endif
                          @else
                          <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/bag')}}">My bag</a>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest


                        </ul>
                      </li>
                </ul>


              </div>
            </div>
          </nav>
















        <main class="mb-5">
            @yield('content')
        </main>
        <footer style="height:700px" class="bg-danger">
            <h1 class="alert text-light text-center">Footer</h1>
        </footer>
    </div>
</body>
</html>
