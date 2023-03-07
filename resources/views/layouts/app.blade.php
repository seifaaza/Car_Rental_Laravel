<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="svg/logo-red.svg" />
    <title>Luxury Car</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Genos:ital,wght@0,100;0,400;1,600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="resources/css/app.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        *{
            font-family: 'Exo', sans-serif;
        }
        :root{
            --light: #f3f6fc;
            --dark: #1e293b;
            --danger: #dc3545;
        }
        .title{
            font-family: 'Genos', sans-serif;
            font-weight: 600;
            font-size: 3rem;
            line-height: 0.9;
        }
        .home-card{
            border: none ;
        }
        nav a:hover{
            opacity: 0.8;
        }
    .container{
        padding: 1.5rem;
    }
.row, .row-x{
    display: grid;
    grid-template-columns:  repeat( auto-fit, minmax(250px, 1fr) );
}
.carousel-item{
    width: 100%;
    height: 700px;
    background-size: cover;
}
.carousel{
    width: fit-content;
    overflow: hidden;
}
@media(min-width:576px){
    .carousel{
        width: 25% !important;
    }
    .carousel-item{
        height: 400px;
    }
    .header-content, .info{
        width: 75% !important;
    }
    .rent, .owner, .reviews{
        width: 50% !important;
    }
    .row-x{
        grid-template-columns:  repeat( auto-fit, minmax(250px, 300px) );
    }
}
.header-bg{
    background-image: url('img/bg.jpg');
    background-position: center center;
    background-size: cover;
    width: 100%;
}
.header{
    height: 100%;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.702);
    backdrop-filter: blur(8px)
}
.navbar{
    position: sticky;
    top: 0%;
    z-index: 999;
}

.card-btn{
    transition-duration: 500ms ;
    transition-property: transform, filter;
}
.card-btn:hover{
    transform: scale(1.03);
    filter: drop-shadow(0 20px 13px rgb(0 0 0 / 0.03)) drop-shadow(0 8px 5px rgb(0 0 0 / 0.03));            }
.bg-light{
    background-color: var(--light) !important;
}
.text-dark{
    color: var(--dark) !important;
}


.options:hover + .dropdown-options, .dropdown-options:hover{
/* .dropdown-options, .dropdown-options:hover{ */
    width: 100px !important;
    right: 0%;
    display: block;
    bottom: -5%;
    filter: drop-shadow(0 20px 13px rgb(0 0 0 / 0.09)) drop-shadow(0 8px 5px rgb(0 0 0 / 0.03));
    min-width: fit-content;
 }
.dropdown-i a {
   color: #dc3545;
   filter: grayscale(100%) opacity(0.7);
   text-decoration: none;
   padding: 0.20rem 0.6rem;
}
.dropdown-i a:hover  {
    filter: none;
}
.dropdown-i:hover  {
    background-color: white;
}
.scale{
    transition: 200ms;
}
.icon:hover, .btn:hover img{
    transform: scale(0.9);
}
.svg-icon{
    width: 1rem;
}
.icon{
    width: 25px;
    filter: grayscale(100%) opacity(0.5);
}
.icon:hover{
    filter: none;

}

    </style>
</head>
<body >
    <div id="app " class="overflow-hidden">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger ">
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
        <footer style="height:500px" class="bg-danger">
            <h1 class="alert text-light text-center">Footer</h1>
        </footer>
    </div>
    <script src="/lottie.js"></script>
</body>
</html>
