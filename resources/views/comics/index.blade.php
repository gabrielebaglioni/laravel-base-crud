 @extends('layout.base')
 @section('page-title')
     tutti i fumetti
 @endsection
 
 @section('page-content')
 <div class="flex w-full justify-between">
   <h1 class="text-center text-bold text-5xl">COMICS</h1>
   <h1  class="text-center text-bold text-5xl mr-12 "> <a href="{{route('comics.create')}}">CREA FUMETTO</a></h1>
 </div>
     
     
      <div class="flex flex-wrap">
         @foreach ($comics as $comic)
         <div class=" p-2  flex">
            <ul class="py-2 flex-wrap"> 
               <li class="w-42"><img src="{{$comic->thumb}}" alt=""></li>
            </ul> 
            <a class="btn btn-secondary items-center text-dark" href="{{route('comics.show', $comic->id)}}">Visualizza</a> 
            <a class="btn btn-dark items-center" href="{{route('comics.edit', $comic->id)}}">Modifica</a> 
         </div> 
         <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger ">Cancella</button>
         </form>   
             
         @endforeach
      </div>
   
 @endsection