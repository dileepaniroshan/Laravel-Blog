@extends('layouts.app')

@section('content')

    <h1>All Adds</h1>

    @if(count($add) > 0)

        @foreach($add as $sadd)
           <div class="well">
      
            <div class="row">

              <div class="col-md-4 col-sm-4">
              <img style="width:100%" src="/storage/cover_images/{{$sadd->cover_image}}">
              </div>

              <div class="col-md-8 col-sm-8">
                  <h3><a href="/adds/{{$sadd->id}}">{{$sadd->title}}</a></h3>
                  <small>Written on {{$sadd->created_at}} by {{$sadd->user->name}}</small>
              </div>
            </div>

         
           </div>
        @endforeach

        {{$add->links()}}

    @else
      <p>No Adds found</p>
    @endif

@endsection
         