@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/adds/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Adds</h3>

                    @if(count($adds) > 0)
                     <table class="table table-striped">
                         <tr>
                             <th>Title</th>
                             <th></th>
                             <th></th>
                         </tr>
                      
                         @foreach ($adds as $add)
                          <tr>
                          <td>{{$add->title}}</td>
                          <td><a href="/adds/{{$add->id}}/edit" class="btn btn-default">Edit</td>
                          <td>
                                {!! Form::open(array('action' => ['AddsController@destroy', $add->id],'method' => 'POST', 'class' => 'pull-right')) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                          </td>
                          </tr>
                         @endforeach
                    @else
                        <p>You have no posts</p>
                    @endif

                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
