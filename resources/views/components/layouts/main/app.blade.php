<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <script src="https://kit.fontawesome.com/9f19fe83e1.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      font-family: "Nunito Sans", sans-serif;
      /* background-color; */
      /* color: #f8fafc; */
    }
  </style>
</head>

<body class="w-full bg-gray-50 ">

  <div class="bg-white w-full sticky top-0 z-50">
    <x-layouts.main.navbar />
  </div>
  <div class="w-full lg:max-w-screen-xl md:max-w-w-screen-lg xl:max-w-screen-2xl lg:px-0 px-4 sm:max-w-screen-md mx-auto py-16">
    <main class="">
      {{ $slot }}
    </main>
  </div>


  <x-layouts.main.footer />
</body>

</html>
