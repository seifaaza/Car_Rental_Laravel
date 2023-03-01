@extends('layouts.app')
@section('content')

<div class="w-75 mx-auto">
    <a href="{{url('/cars')}}" class="btn btn-secondary">Back</a>
    <div class="card mt-5" >
        <img src="..." class="card-img-top" alt="...">
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
                <a href="rent/{{$car->id}}" class="btn  btn-danger">Rent</a>
              </div>
        </div>
      </div>
</div>
@endsection
