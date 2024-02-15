<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel deploy Vercel</title>
  @vite('resources/css/app.css')
</head>
<body>
  <h1>Vercel God 😎</h1>
  <p class="bg-purple-500 text-white text-3xl w-fit px-4">
    Secrect: <span class="font-bold">{{ env('SECRET') }}</span>
  </p>
</body>
</html>