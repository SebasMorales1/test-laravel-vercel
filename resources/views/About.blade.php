@php
use Illuminate\Support\Facades\Vite;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  @production
    <style>
      {!! Vite::content('resources/css/app.css') !!}
    </style>
    @else
      @vite('resources/css/app.css')
  @endproduction
</head>
<body>
  <div class="size-16 bg-sky-600"></div>
  <h1 class="text-red-950">About me pana</h1>
  <a href="/" class="text-blue-700 underline">Home</a>
</body>
</html>