@extends('layouts.app')
@section('content')

<div class="w-75 container mx-auto py-5 ">
    <a href="{{url('/cars')}}" title="Back">
        <img src="/svg/back.svg" class="icon" alt="">
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
    <button class="card p-2 card-btn flex-column"
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
