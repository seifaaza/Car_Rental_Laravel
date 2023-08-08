@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h1 class=" text-danger text-center p-2 fw-semibold">Discover our cars</h1>
    <a href="{{ url()->previous() }}" title="Back">
        <img src="/svg/back.svg" class="scale" width="22px" alt="">
    </a>
<h5 class=" pb-3  mt-4"><span class="text-muted"> Cars related with :</span> <span class=" fw-semibold"> {{$tag->tags}} </span></h5>
<div class="row-x gap-4">
    @foreach($tag->cars as $car)
    <button class="card p-2 card-btn flex-column"
     onclick="window.location='{{route('info',['id'=>$car->id])}}'"
      >
          <div class="col-md-4 w-100 flex-fill d-flex align-items-center">
            <img src="/img/{{$car->image}}.png" class="img-fluid rounded-start " alt="...">
          </div>
          <div class="py-3 align-item-end w-100 d-flex justify-content-between">
            <div class="text-start ">
              <h5 class="card-title">{{$car->name}}</h5>
              <p class="card-text">{{$car->price}} MAD</p>
            </div>
            <div class="card-icons d-flex gap-2 justify-content-end align-self-end" >
                <a href="{{route('rent',['id'=>$car->id])}}" class=" btn
                    btn-danger d-flex gap-1 p-2" title="Rent">
                    <img src="/svg/rent.svg"  alt="">
                    </a>
                    <a href="{{route('save',['id'=>$car->id])}}" class=" d-flex p-2 btn
                        btn-outline-danger" title="Save">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                          </svg>
                    </a>
               </div>
          </div>
        </button>
  @endforeach






</div>
</div>

@endsection

