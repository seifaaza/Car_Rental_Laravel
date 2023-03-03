@extends('layouts.app')
@section('content')
{{-- {{ Auth::user()->name }} --}}
<div class="w-75 container vh-100 mx-auto py-5 ">
    <a href="{{url('/cars')}}" class="btn btn-secondary">Back</a>
    <form action="" method="post" class="card p-4 mt-3">
    <h1 class=" text-danger text-center pb-2 ">{{$car->owners->name}}</h1>

</form>
</div>
@endsection
