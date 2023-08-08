@extends('layouts.app')
@section('content')
<div class="container py-5" >
<h1 class=" text-danger text-center p-2 fw-semibold">Discover our cars</h1>
<div class="alert main-bg sticky d-flex justify-content-center gap-3" >
    @foreach($categories as $item)
    <a href="{{route('category',['id'=>$item->id])}}" class="btn btn-outline-secondary rounded-3 {{ ($category->id)==($item->id) ? 'btn-secondary text-light' : "" }}" >{{$item->category}}</a>
    @endforeach
</div>
<div class="row gap-4 m-0">
    @foreach($cars->categories as $item)
    <button class="card px-3 card-btn flex-column rounded-4"
    onclick="window.location='{{route('info',['id'=>$item->id])}}'"
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
                <a href="{{route('rent',['id'=>$item->id])}}" class=" btn
                    btn-danger d-flex gap-1 p-2" title="Rent">
                    <img src="/svg/rent.svg"  alt="">
                    </a>
                    <a href="{{route('save',['id'=>$item->id])}}" class=" d-flex p-2 btn
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





