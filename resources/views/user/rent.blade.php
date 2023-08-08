@extends('layouts.app')
@section('content')
{{-- {{ Auth::user()->name }} --}}
<div class="rent container w-100 mx-auto py-5 ">
    <a href="{{ url()->previous() }}" title="Back">
        <img src="/svg/back.svg" class="scale" width="22px" alt="">
    </a>
    <form action="" method="post" class="card p-4 mt-3">
    <h1 class=" text-danger text-center pb-2 fw-semibold">Renting</h1>
    <h4>Car : {{$car->name}} {{$car->model}}</h4>
    <label for="" class="mt-3">Client</label>
    <input type="text" name="name" placeholder="Enter the client name" value="{{ Auth::user()->name }}" class="form-control"><br>
    <label for="" class="mt-3">Start date</label>
    <input type="date" name="id"  class="form-control"><br>
    <label for="" class="mt-3">End date</label>
    <input type="date" name="id"  class="form-control"><br>
    <button class="btn btn-danger mt-3">Submit</button>
</form>
</div>
@endsection
