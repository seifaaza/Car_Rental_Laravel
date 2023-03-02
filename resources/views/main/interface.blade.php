@extends('layouts.app')
@section('content')
<div class="header-bg">
    <div class=" header py-5">
        <div class="container d-flex flex-column gap-5">
            <div class=" position-relative d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5">
                <div class="w-75 d-flex flex-column text-center text-sm-start text-light">

                    <h1 class="">Car rental agency</h1>
                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima laudantium officiis ipsam. Labore et, culpa sed odio dolorem exercitationem nulla laudantium maxime incidunt magnam quasi reprehenderit harum quae quod, Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, maxime.</p>
                    <a href="{{url('/about')}}" class="btn btn-danger align-self-sm-start">More info</a>
                </div>
            <div id="carouselExampleDark" data-bs-ride="carousel" class="carousel carousel-dark slide w-75 rounded-3 shadow-lg">
                <div class="carousel-inner">
                    <div class="carousel-item  active" data-bs-interval="3000" style="background-image: url('/img/car1.jpg');" >

                  </div>
                  <div class="carousel-item" data-bs-interval="3000" style="background-image: url('/img/car2.jpg');" >
                  </div>
                  <div class="carousel-item" data-bs-interval="3000" style="background-image: url('/img/car3.jpg');" >
                  </div>
                </div>
              </div>



            </div>


            </div>
    </div>
</div>
<div class="container py-5">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur beatae nulla est fuga neque, aspernatur maxime, facere ipsum minima doloremque autem quis placeat quam asperiores animi, fugit ducimus dolores.
</div>

@endsection
