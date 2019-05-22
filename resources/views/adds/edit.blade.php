@extends('layouts.app')

@section('content')

    <h1>Edit Add</h1>
    
    {!! Form::open(array('action' => ['AddsController@update', $add->id],'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
       <div class="form-group">
           {{Form::label('title','Title')}}
           {{Form::text('title', $add->title , ['class' => 'form-control', 'placeholder' => 'Text'])}}
       </div>

       <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', $add->body , ['class' => 'form-control' , 'placeholder' => 'Body Text'])}}
      </div>

      <div class="form-group">
          {{Form::file('cover_image')}}
        </div>
 
      {{Form::hidden('_method' , 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary' ])}}

    {!! Form::close() !!}
   

@endsection