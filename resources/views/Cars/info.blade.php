@extends('layouts.app')
@section('content')

<div class="container info w-100  py-5 mx-auto ">
        <h1 class=" text-danger text-center p-2 fw-semibold">Discover our cars</h1>
    <a href="{{url()->previous()}}" title="Back">
        <img src="/svg/back.svg" class="scale" width="22px" alt="">
    </a>
    <div class="card mt-3 p-3 d-flex flex-column align-items-center flex-md-row gap-3" >
        <div ><img src="/img/{{$car->image}}.png" class="card-img-top " style="width: 20rem" alt="..."></div>
        <div >
        <div class="card-body">
          <h5 class="card-title">{{$car->name}}</h5>
          <p class="card-text">{{$car->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$car->price}}</li>
          <li class="list-group-item">{{$car->model}}</li>
          <li class="list-group-item">{{$car->type}}</li>
          <li class="list-group-item mt-3">
            <span class="text-muted"></span>
            @foreach($car->tags as $tag)
                <a href="{{route('tags',['id'=>$tag->id])}}" class=" bg-light text-dark p-1  rounded mx-1">
                    <img src="/svg/tag.svg" alt="">
                     {{$tag->tags}}
                </a>
            @endforeach
          </li>
        </ul>
        <div class="card-body">
            <div class="d-flex gap-2">
                <a href="{{route('rent',['id'=>$car->id])}}" class="btn
                    btn-danger d-flex gap-2" title="Rent">
                    <span>Rent</span>
                    <img src="/svg/rent.svg" alt="">
                </a>
                    <a href="{{route('save',['id'=>$car->id])}}" class="btn
                        btn-outline-danger d-flex gap-2" title="Save">
                        <span>Save</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                          </svg>
                    </a>
              </div>
        </div>
      </div>
    </div>
    <div class=" mt-3 d-flex flex-column flex-sm-row gap-3 " >
        <div class="card p-3 owner ">
            <h4 class="text-danger">Car owner</h4>
            <div class="mt-2">
                <div title="Show profile">
                    <a style="width: fit-content" href="{{route('profil',['id'=>$car->owner_id])}}" class="btn btn-profile
                         d-flex p-0 gap-2" >
                        <img src="/svg/profil.svg" width="15px" class="scale " alt="">
                        <h5 class=" m-0">{{$car->owners->name}}</h5>
                        </a>
                  </div>
          <p class="card-text mt-2">{{$car->owners->description}}</p>
            </div>
            <div>

            </div>
        </div>
        <div class="card p-3 reviews d-flex flex-column gap-2">
            <h4 class="text-danger">Give Your review</h4>
            <form action="{{url("review", ['id'=>$car->id])}}" method="post" >
                @csrf
                <textarea required style="resize: none;" name="review" cols="50" rows="3" placeholder="How was your experience with it?" class="form-control " ></textarea>
                <button style="width: fit-content" class="btn btn-outline-danger mt-3 d-flex gap-2" title="Share" id="share">
                    <span>Share</span>
                    <svg class="scale" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                      </svg>
                </button>
            </form>
        </div>
    </div>
    <div class="container p-0 mt-4 " >
        <h4 class="text-danger m-3">Reviews</h4>
        <div class="list-group reviewContent">
            @forelse($reviews as $item)
            <div class="list-group-item border-top-1 p-3 ">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="pl-3">{{$item->users->name}}</h5>
                <small class="text-muted">{{$item->created_at}}</small>
              </div>
              <div class=" d-flex w-100">

                <form action="{{url('editReview', ['id'=>$item->id])}}" method="post" class="flex-fill d-flex justify-content-between gap-5">
                    @csrf
                    @method('PUT')
                    <input name="review" required autofocus disabled type="text" value="{{$item->review}}" class="review w-75" >
                @if (Auth::guest())
                @else
                    <button type="submit" id="{{$item->id}}" style="display: none; filter: none;" class="scale {{(Auth::user()->id) == ($item->user_id) ?  'modify' : '' }}" title="Modify"><img src="/svg/share.svg"  alt="" ></button>
                </form>
                <div class="d-flex gap-2 align-self-center">
                    <button id="{{$item->id}}"
                      class="mr-2 icon scale align-self-end edit {{(Auth::user()->id) == ($item->user_id) ?  '' : 'd-none' }}" title="Edit your review"><img src="/svg/edit.svg"  alt="" ></button>
                    <a href="{{url('review/delete', $item->id)}}"  class="icon scale align-self-end {{(Auth::user()->id) == ($item->user_id) ?  '' : 'd-none' }}" title="Delete your review"><img src="/svg/delete.svg"  alt=""></a>
                </div>
                @endif
                </div>
            </div>
            @empty
                <div class="d-flex list-group w-100 justify-content-between">
                    <h5 class="p-3 list-group-item w-100 text-muted">No reviews yet </h5>
                </div>
            @endforelse
          </div>
    </div>
</div>
@endsection
