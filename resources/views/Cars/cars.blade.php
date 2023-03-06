@extends('layouts.app')
@section('content')
<div class="container py-5">
<h1 class=" text-danger text-center pb-4 fw-semibold">Discover our cars</h1>
<div class="row gap-4">
    @foreach($cars as $item)
    <button class="card flex-column" onclick="window.location='{{url('info',['id'=>$item->id])}}'" >
          <div class="col-md-4 w-100 flex-fill d-flex align-items-center">
            <img src="/img/{{$item->image}}.png" class="img-fluid rounded-start " alt="...">
          </div>
          <div class="col-md-8 align-item-end">
            <div class="card-body text-start">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">{{$item->price}} MAD</p>
              <div class="d-flex gap-2">

                  <a href="{{url('info',['id'=>$item->id])}}" class="btn  btn-outline-danger">Info</a>
                  <a href="{{url('rent',['id'=>$item->id])}}" class="btn  btn-danger">Rent</a>
                </div>
            </div>
          </div>
      </button>
  @endforeach

</div>
</div>

@endsection



