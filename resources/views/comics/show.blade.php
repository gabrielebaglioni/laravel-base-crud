@extends('layout.base')
@section('page-title')
    {{$comic->title}}
@endsection
@section('page-content')
    <h1>{{$comic->title}}</h1>
    <img class="w-42" src="{{$comic->thumb}}" alt="">
    <h3>{{$comic->price}}$</h3>
    <p>{{$comic->description}}</p> 
    <a href="{{route('comics.index')}}">torna alla lista</a>
    
@endsection