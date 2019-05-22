@extends('layouts.app')

@section('content')

<a href="/adds" class="btn btn-default">Go Back</a>

    <h1>{{$add->title}}</h1>
    <small>Written on {{$add->created_at}}</small> <br><br>
    <img style="width:100%" src="/storage/cover_images/{{$add->cover_image}}">
   
    <hr>
    <p>{{$add->body}}</p>
    <hr>

    @if(!Auth::guest())
      @if(Auth::user()->id == $add->user_id)

        <a href="/adds/{{$add->id}}/edit" class="btn btn-default"> Edit </a>

        {!! Form::open(array('action' => ['AddsController@destroy', $add->id],'method' => 'POST', 'class' => 'pull-right')) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete' ,['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}

     @endif
    @endif

@endsection
         