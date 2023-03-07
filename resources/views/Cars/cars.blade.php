@extends('layouts.app')
@section('content')
<div class="container py-5">
<h1 class=" text-danger text-center pb-4 fw-semibold">Discover our cars</h1>
<div class="row gap-4">
    @foreach($cars as $item)
    <button class="card card-btn flex-column"
     onclick="window.location='{{url('info',['id'=>$item->id])}}'"
      >
          <div class="col-md-4 w-100 flex-fill d-flex align-items-center">
            <img src="/img/{{$item->image}}.png" class="img-fluid rounded-start " alt="...">
          </div>
          <div class="py-3 align-item-end w-100 d-flex justify-content-between">
            <div class="text-start ">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">{{$item->price}} MAD</p>
            </div>
                <div class="card-icons d-flex gap-2 justify-content-end align-self-end" >
                    <a href="{{url('rent',['id'=>$item->id])}}" class="btn
                    btn-danger d-flex gap-1 btn-rent" title="Rent">
                        <img src="/svg/rent.svg" width="15px" class="scale" alt="">
                    </a>
                    <a href="{{url('save',['id'=>$item->id])}}" class="d-flex gap-1 btn-rent" title="Save">
                        <img src="/svg/save.svg" class="icon" alt="">
                    </a>
                </div>
          </div>
        </button>
  @endforeach

</div>
</div>

@endsection


{{-- <div class="dropdown-center">
    <a class="btn options" href="">
        <img src="/svg/options.svg" class="options" style="height: 20px" alt="">
    </a>
    <ul class="dropdown-menu dropdown-options" >
      <li class="d-flex dropdown-i p-0 text-danger">
        <a href="{{url('save',['id'=>$item->id])}}" class="">
            <span>Save</span>
            <img src="/svg/save.svg" width="20px" class="svg-icon" alt="">
        </a>
    </li>
      <li class="d-flex dropdown-i p-0 text-danger">
        <a href="{{url('',['id'=>$item->id])}}" class="">
            <span>Save</span>
            <img src="/svg/save.svg" width="20px" class="svg-icon" alt="">
        </a>
    </li>
    </ul>
  </div> --}}


