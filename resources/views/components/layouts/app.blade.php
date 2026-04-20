<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? 'Ramz Libary' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-sidebar />
  <main class="">
    {{ $slot }}
  </main>

</body>

</html>
