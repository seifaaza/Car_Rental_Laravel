@extends('layouts.app')
@section('content')

<div class="container info w-100 py-5 mx-auto ">
    <a href="{{url('/cars')}}" class="btn btn-secondary">Back</a>
    <div class="card mt-3 p-3 d-flex flex-column align-items-center flex-md-row gap-3" >
        <div ><img src="/img/{{$car->image}}.png" class="card-img-top " style="width: 20rem" alt="..."></div>
        <div >
        <div class="card-body">
          <h5 class="card-title">{{$car->name}}</h5>
          <p class="card-text">{{$car->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$car->price}}</li>
          <li class="list-group-item">{{$car->model}}</li>
          <li class="list-group-item">{{$car->type}}</li>
        </ul>
        <div class="card-body">
            <div class="d-flex gap-2">

                <a class="btn  btn-outline-danger">Save</a>
                <a href="{{url('rent',['id'=>$car->id])}}" class="btn  btn-danger">Rent</a>
              </div>
        </div>
      </div>
    </div>
    <div class=" mt-3 d-flex flex-column flex-sm-row gap-3" >
        <div class="card p-3 owner ">
            <h4 class="text-danger">Car owner</h4>
            <div class="mt-2">
          <h5 class="card-title">{{$car->owners->name}}</h5>
          <p class="card-text">{{$car->owners->description}}</p>
            </div>
            <div class="mt-3">
            <div >
                <a href="{{url('profil',['id'=>$car->owner_id])}}" class="btn  btn-danger">View profil</a>
              </div>
            </div>
        </div>
        <div class="card p-3 reviews align-items-stretch">
            <h4 class="text-danger">Reviews</h4>
        </div>
    </div>
</div>
@endsection
