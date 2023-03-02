@extends('layouts.app')
@section('content')
{{-- {{ Auth::user()->name }} --}}
<div class=" container w-75 mx-auto py-5 vh-100">
    <a href="{{url('/cars')}}" class="btn btn-secondary">Back</a>
<h1 class="alert text-danger text-center pb-4">Renting</h1>
<form action="" method="post" class="mt-2">
    <h4>Car : {{$car->name}} {{$car->model}}</h4>
    <label for="" class="mt-3">Client</label>
    <input type="text" name="id" value="{{ Auth::user()->name }}" class="form-control"><br>
    <label for="">Duration</label>
    <input type="text" name="id" class="form-control"><br>
    <label for="">Date</label>
    <input type="date" name="id"  class="form-control"><br>
    <button class="btn btn-danger">Submit</button>
</form>
</div>
@endsection
