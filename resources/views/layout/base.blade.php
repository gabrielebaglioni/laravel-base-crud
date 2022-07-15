<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('page-title')</title>
   <link rel="stylesheet" href="{{asset('css/app.css ')}}">
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   @yield('page-content')
</body> 
</html>