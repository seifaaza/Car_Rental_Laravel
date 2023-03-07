@extends('layouts.app')
@section('content')

<div class="container info w-100 py-5 mx-auto ">
    <a href="{{url('/cars')}}" title="Back">
        <img src="/svg/back.svg" class="icon" alt="">
    </a>
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
                <a href="{{url('rent',['id'=>$car->id])}}" class="btn
                    btn-danger d-flex gap-1 btn-rent" title="Rent">
                    <span>Rent</span>
                        <img src="/svg/rent.svg" width="15px" class="scale" alt="">
                    </a>
                    <a href="{{url('save',['id'=>$car->id])}}" class="d-flex gap-1" title="Save">
                        <img src="/svg/save.svg" class="icon" alt="">
                    </a>
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

                <a style="width: fit-content" href="{{url('profil',['id'=>$car->owner_id])}}" class="btn
                    btn-danger d-flex gap-1" >
                    <span>Profile</span>
                        <img src="/svg/profil.svg" width="15px" class="scale " alt="">
                    </a>
              </div>
            </div>
        </div>
        <div class="card p-3 reviews d-flex flex-column gap-2">
            <h4 class="text-danger">Give Your review</h4>
            <form action="" method="post" >
                @csrf
                <textarea name="" id="" cols="50" rows="3" placeholder="How was your experience with it?" class="form-control " ></textarea>
                <button class="btn btn-outline-danger mt-3">Share</button>
            </form>

        </div>
    </div>
    <div class="container card p-3 mt-3" style="height: 50vh">
        <h4 class=" text-center text-danger">Reviews</h4>
        <table class="table-hover table-striped">
            <thead></thead>
        </table>
    </div>
</div>
@endsection
