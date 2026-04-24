<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Library | Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    body {
      font-family: "Nunito Sans", sans-serif;
      /* Menggunakan warna background yang sedikit lebih gelap untuk menonjolkan card */
      background-color: #0f172a;
      color: #f8fafc;
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4 sm:p-8">

  <main
    class="w-full max-w-6xl bg-[#1e293b] rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-slate-700/50">

    <div class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
      <div class="max-w-md w-full mx-auto space-y-8">

        <div class="space-y-2">
          <h1 class="text-4xl font-bold text-white tracking-tight">Welcome back</h1>
          <p class="text-slate-400 font-medium">Please enter your details to access the library.</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
          @csrf

          @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
              <strong class="font-bold">Opps! Error</strong>
              <ul class="list-disc mt-2 ml-5">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
              <strong class="font-bold">Aduh!</strong>
              <span class="block sm:inline">{{ session('error') }}</span>
            </div>
          @endif
          <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-slate-300">Email address</label>
            <input type="email" id="email" name="email" required
              class="w-full p-4 rounded-xl bg-slate-800/50 border border-slate-600 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
              placeholder="name@company.com">
          </div>

          <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-medium text-slate-300">Password</label>
            <input type="password" id="password" name="password" required
              class="w-full p-3 rounded-xl bg-slate-800/50 border border-slate-600 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
              placeholder="••••••••">
          </div>

          <button type="submit"
            class="w-full py-3 bg-blue-600 text-white font-semibold text-lg rounded-xl hover:bg-blue-700 focus:ring-4 focus:ring-blue-500/50 transition-all duration-200">
            Sign In
          </button>
        </form>

        <p class="text-center text-slate-400">
          Don't have an account?
          <a href="/auth/register"
            class="text-blue-400 hover:text-blue-300 font-semibold underline underline-offset-4 transition-colors">Register</a>
        </p>

      </div>
    </div>

    <div class="hidden md:block md:w-1/2 relative bg-slate-900">
      <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1000&auto=format&fit=crop"
        alt="Library Interior" class="absolute inset-0 w-full h-full object-cover opacity-80">
      <div class="absolute inset-0 bg-gradient-to-t from-[#1e293b] via-transparent to-transparent"></div>
    </div>

  </main>
</body>

</html>
