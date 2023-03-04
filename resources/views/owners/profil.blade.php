@extends('layouts.app')
@section('content')

<div class="w-75 container mx-auto py-5 ">
    <a href="{{url('/cars')}}" class="btn btn-secondary">Back</a>
    <form action="" method="post" class="card p-4 mt-3">
    <h1 class=" text-danger text-center pb-2 ">{{$owner->name}}</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><h5> Overview :</h5> {{$owner->description}}</li>
        <li class="list-group-item"><h5> Email :</h5> {{$owner->email}}</li>
        <li class="list-group-item"><h5> Contact :</h5> 0763849764</li>
      </ul>
</form>
<h2 class="text-danger mt-5">{{$owner->name}}'s cars</h2>



<div class="row gap-4">
    @foreach($cars as $item)
    <div class="card cars-card " >
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
