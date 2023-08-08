@extends('layouts.app')
@section('content')

<div class="container py-5 min-vh-100" >
    <h1 class=" text-danger text-center p-2 fw-semibold">Saved</h1>
    <div class="d-flex gap-1  align-items-center">
        <img src="/svg/shield.svg" class="icon " alt="">
        <p class="text-muted m-0">Only you can see what you've saved</p>
    </div>
<div class="row-x gap-4 justify-content-start mt-4">

    @forelse($user->cars as $car)
<button class="card p-2" onclick="window.location='{{url('info',['id'=>$car->id])}}'">
    <div class="d-flex py-2 gap-3">
        <div class="w-50 align-self-center">
            <img src="/img/{{$car->image}}.png" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="w-50 text-nowrap align-self-center text-start d-flex flex-column">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text text-muted mt-2">Saved at : <br>
                <small class="text-muted text-wrap">{{$car->created_at}} </small> </p>
            <a href="{{url('saved/delete',['id'=>$car->id] )}}" class="icon align-self-end" >
                <img src="/svg/delete.svg" class=" scale"  alt=""></a>
        </div>
    </div>
</button>
@empty  <p class="text-muted m-0">There is no saved items</p>

@endforelse

</div>
</div>
@endsection
