@extends('layouts.app')
@section('content')

<div class="w-75 container mx-auto py-5 ">
    <a href="{{ url()->previous() }}" title="Back">
        <img src="/svg/back.svg" class="scale" width="22px" alt="">
    </a>
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
