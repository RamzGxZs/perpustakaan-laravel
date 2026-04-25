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

<body class="w-full h-screen flex overflow-hidden">
  <!-- Overlay for mobile sidebar -->
  <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>

  <x-layouts.dashboard.sidebar />
  
  <main class="flex-1 h-full flex flex-col min-w-0">
    <x-layouts.dashboard.appbar />
    <div class="p-3 flex-1 overflow-y-auto">
      {{ $slot }}
    </div>
  </main>

  <script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const openBtn = document.getElementById('open-sidebar');
    const closeBtn = document.getElementById('close-sidebar');

    function toggleSidebar() {
      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');
    }

    openBtn.addEventListener('click', toggleSidebar);
    closeBtn.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', toggleSidebar);
  </script>
</body>

</html>
