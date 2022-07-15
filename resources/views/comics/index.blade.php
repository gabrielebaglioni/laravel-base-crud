 @extends('layout.base')
 @section('page-title')
     tutti i fumetti
 @endsection
 
 @section('page-content')
     <h1 class="text-center text-bold text-5xl">COMICS</h1>
     
      <div class="flex">
         @foreach ($comics as $comic)
         <div class=" p-2">
            <ul class="py-2 "> 
               <li class=""><img src="{{$comic->thumb}}" alt=""></li>
            </ul> 
            <a class="btn btn-primary " href="{{route('comics.show', $comic->id)}}">visualizza</a>  
         </div>  
             
         @endforeach
      </div>
   
 @endsection