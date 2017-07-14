@extends('layouts.app')
@section('content')
    <h1>Upload webM</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('file', 'File')}}
            {{Form::file('file', '', ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Upload', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
