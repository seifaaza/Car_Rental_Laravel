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



<div class="row-x gap-4">
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
