@extends('layouts.app')
@section('content')
{{-- {{ Auth::user()->name }} --}}
<div class="container py-5 ">
<h1 class=" text-danger text-center pb-4 fw-semibold" >Your bag</h1>
<div class="row-x gap-4 justify-content-start">
@foreach($bags as $item)
<button class="card p-2" onclick="window.location='{{url('info',['id'=>$item->id])}}'">
    <div class="d-flex py-2 gap-3">
        <div class="w-50 align-self-center">
            <img src="/img/{{$item->image}}.png" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="w-50 text-nowrap align-self-center text-start d-flex flex-column">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text text-muted mt-2">Saved at : <br>
                <small class="text-muted text-wrap">{{$item->created_at}} </small> </p>
            <a href="{{url('bag/delete', $item->id)}}" class="icon" ><img src="/svg/trash.svg" class=" align-items-end" alt=""></a>

        </div>
    </div>

</button>

@endforeach
</div>
</div>
@endsection
