@extends('layouts.app')

@section('content')
<h1>Create Album</h1>

 {{-- {!! Form::open(['action' => 'AlbumController@store','method'=>'POST','enctype'=> 'multipart/form-data']) !!} --}}
  {!! Form::open(['action' => 'AlbumController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 {{Form::text('name','')}}
 {{Form::textarea('description','')}}
 {{Form::file('cover_image')}}
 {{Form::submit('submit')}}

 {!! Form::close() !!}

@endsection
