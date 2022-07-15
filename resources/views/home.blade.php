<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Document</title>
</head>
<body>
   <div>
      <ul>
         @foreach ($comics as $comic)
             <li class="list-none">{{$comic->id}}</li>
             <li class="list-none"><img src="{{$comic->thumb}}" alt=""></li>
             <li class="list-none">{{$comic->price}}</li>
             <li class="list-none">{{$comic->description}}</li>
         @endforeach
         <li></li>
      </ul>
   </div>
</body>
</html>