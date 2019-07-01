@extends('layout')

@section('content')


    <h1>welcome</h1>
   

     @foreach ($tasks as $task)
        <li>{{$task}}</li>
        @endforeach 


@endsection