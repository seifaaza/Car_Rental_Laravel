@extends('layouts.app')
@section('content')
<div class="container py-5">
<h1 class=" text-danger text-center pb-4 fw-semibold">Discover our cars</h1>
<div class="row gap-4">
    @foreach($cars as $item)
    <div class="card cars-card" >
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="/img/{{$item->image}}.png" class="img-fluid rounded-start " alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">{{$item->price}} MAD</p>
              <div class="d-flex gap-2">

                  <a href="info/{{$item->id}}" class="btn  btn-outline-danger">Info</a>
                  <a href="rent/{{$item->id}}" class="btn  btn-danger">Rent</a>
                </div>
            </div>
          </div>
        </div>
      </div>
  @endforeach
</div>
</div>

@endsection



