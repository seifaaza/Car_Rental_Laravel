<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{url('svg/logo-red.svg')}}" />
    <title>Luxury Car</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Genos:ital,wght@0,100;0,400;1,600&display=swap" rel="stylesheet">




    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

    </style>
</head>
<body >
    <div id="app " >
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger position-fixed w-100">
            <div class="container-fluid">
              <a class="navbar-brand svg-icon" href="/">
                <img src="{{url('svg/logo-light.svg')}}" width="28px" alt="">
            </a>
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
                            <span>Account</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-2">

                          <li>
                            <a class="dropdown-item d-flex gap-2" href="{{ route('login') }}">
                                <img src="/svg/login.svg" class="icon" alt="">
                                <span>Login</span>
                            </a>
                        </li>
                          @endif

                          @if (Route::has('register'))

                          <li>
                            <a class="dropdown-item d-flex gap-2" href="{{ route('register') }}">
                                <img src="/svg/sign-up.svg" class="icon" alt="">
                                <span>Sign up</span>
                            </a>
                        </li>
                          @endif
                          @else
                          <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light d-flex gap-2 align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/svg/account.svg" width="22px" alt="">
                                <span>{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item d-flex gap-2" href="{{route('saved',['id'=>Auth::user()->id])}}">
                                    <img src="/svg/saved.svg" class="icon" alt="">
                                    <span>Saved</span>
                                </a>
                                <a class="dropdown-item text-danger d-flex gap-2" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <img src="/svg/logout.svg"   alt="">
                                    <span>Logout</span>
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
















        <main class="my-5">
            @yield('content')
            <link rel="stylesheet" href="{{url('css/style.css')}}">
            <script src="{{url('jquery-3.6.4.min.js')}}"></script>
        </main>
        <footer style="height:500px" class="bg-danger">
            <h1 class="alert text-light text-center">Footer</h1>
        </footer>
    </div>
</body>
</html>

