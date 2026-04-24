<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? 'Library' }}</title>
  <script src="https://kit.fontawesome.com/9f19fe83e1.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    body {
      font-family: "Nunito Sans", sans-serif;
      background-color: #1B2431;
      color: #f8fafc;
    }
  </style>
</head>

<body class="w-full h-screen flex items-center justify-between">
  <div class="w-[15%] h-full bg-[#273142]">
    <x-layouts.dashboard.sidebar />
  </div>
  <main class="w-[85%] h-full">
    <x-layouts.dashboard.appbar />
    <div class="p-3">
      {{ $slot }}
    </div>
  </main>

</body>

</html>
