@extends('layouts.app')
@section('content')
<div class="header-bg">
    <div class=" header py-5">
        <div class="container d-flex flex-column gap-5">
            <div class=" position-relative d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5">
                <div class="header-content w-100 d-flex flex-column text-center text-sm-start gap-1 ">
                    <h1 class="text-danger title ">Luxury Car</h1>
                    <h4 class="mt-2">Car rental agency</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima laudantium officiis ipsam. Labore et, culpa sed odio dolorem exercitationem nulla laudantium maxime incidunt magnam quasi reprehenderit harum quae quod, Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, maxime.</p>
                    <a href="{{url('/about')}}" class="btn btn-danger align-self-sm-start">More info</a>
                </div>
            <div id="carouselExampleDark" data-bs-ride="carousel" class="carousel carousel-dark slide w-100 rounded-3 shadow-lg">
                <div class="carousel-inner">
                    <div class="carousel-item  active" data-bs-interval="3000" style="background-image: url('/img/car-1.jpg');" >

                  </div>
                  <div class="carousel-item" data-bs-interval="3000" style="background-image: url('/img/car-2.jpg');" >
                  </div>
                  <div class="carousel-item" data-bs-interval="3000" style="background-image: url('/img/car-3.jpg');" >
                  </div>
                </div>
              </div>



            </div>


            </div>
    </div>
</div>
<div class="container py-5 ">
    <h2 class="alert text-danger text-center fw-semibold">Lorem ipsum dolor sit amet consectetur.</h2>
    <div class="d-flex flex-md-row flex-column gap-4">
        <div class="card home-card bg-light"  >
            <img src="/img/card-1.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card home-card bg-light " >
            <img src="/img/card-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card home-card bg-light " >
            <img src="/img/card-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>


    </div>

</div>

@endsection
