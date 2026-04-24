<x-layouts.main.app title="Ramz Library">

  <section class="py-12 lg:py-20">
    <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-12 lg:gap-8">

      <div class="space-y-6 w-full lg:w-1/2">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
          Access Thousands of Books Without Space and Time Limits.
        </h1>
        <p class="text-gray-500 text-lg md:text-xl max-w-lg">
          Explore a free collection of e-books, journals, and educational materials. Read anytime, right from your
          favorite device with a clean interface.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-4">
          <button class="px-6 py-3 text-lg font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
            Start Reading
          </button>
          <button class="px-6 py-3 text-lg font-semibold text-blue-600 border-2 border-blue-600 rounded-lg hover:bg-blue-50 transition-colors">
            Register Now
          </button>
        </div>
      </div>

      <div class="w-full lg:w-1/2 flex items-center justify-center lg:justify-end">
        <div class="w-full max-w-sm lg:max-w-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-full h-auto">
            <style>
              .page-flip {
                transform-origin: 50% 100%;
                animation: flip 2s ease-in-out infinite alternate;
              }
              @keyframes flip {
                0% { transform: skewY(0deg) scaleX(1); fill: #eff6ff; }
                50% { transform: skewY(-10deg) scaleX(0.1); fill: #dbeafe; }
                100% { transform: skewY(0deg) scaleX(-1); fill: #eff6ff; }
              }
            </style>
            <path d="M50 85 V15 C35 15 15 20 10 25 V90 C15 85 35 80 50 85 Z" fill="#2563eb" />
            <path d="M50 85 V15 C65 15 85 20 90 25 V90 C85 85 65 80 50 85 Z" fill="#3b82f6" />
            <path class="page-flip" d="M50 82 V17 C65 17 80 21 85 25 V85 C80 81 65 77 50 82 Z" stroke="#2563eb" stroke-width="1" />
          </svg>
        </div>
      </div>

    </div>
  </section>

  <section class="py-16">

    <div class="space-y-3 mb-10 text-left">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Trending Books</h2>
      <p class="text-gray-500 text-lg">The most popular books read this week.</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8">


			@for ($i =0; $i < 10; $i++)
			<a href="#" class="group block border-2 border-gray-100 rounded-xl p-4 hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
        <div class="w-full aspect-[3/4] bg-blue-100 rounded-lg flex items-center justify-center mb-4 text-blue-500 group-hover:scale-[1.02] transition-transform">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg truncate"></h3>
          <p class="text-gray-500 text-sm">Robert C. Martin</p>
        </div>
      </a>
			@endfor


      </div>
  </section>

	<section class="w-full py-16 lg:py-24 mt-12">
    <div class="w-full mx-auto px-6 lg:px-8">

      <div class="text-center w-full mx-auto mb-16 space-y-4">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Start Reading in 3 Steps</h2>
        <p class="text-gray-500 text-lg">No hassle. Access our thousands of literature collections quickly and easily.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 relative">

        <div class="hidden md:block absolute top-12 left-[15%] right-[15%] h-0.5 bg-blue-200 z-0"></div>

        <div class="relative z-10 flex flex-col items-center text-center space-y-4 group">
          <div class="w-24 h-24 bg-white border-4 border-blue-100 rounded-full flex items-center justify-center text-blue-600 group-hover:border-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900">1. Create an Account</h3>
          <p class="text-gray-500 px-4">Sign up for free using your email or Google account in seconds.</p>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center space-y-4 group">
          <div class="w-24 h-24 bg-white border-4 border-blue-100 rounded-full flex items-center justify-center text-blue-600 group-hover:border-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900">2. Search for Books</h3>
          <p class="text-gray-500 px-4">Use the search feature to find the books, journals, or literature you need.</p>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center space-y-4 group">
          <div class="w-24 h-24 bg-white border-4 border-blue-100 rounded-full flex items-center justify-center text-blue-600 group-hover:border-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900">3. Start Reading</h3>
          <p class="text-gray-500 px-4">Add it to your virtual shelf and read anytime with an eye-friendly interface.</p>
        </div>

      </div>
    </div>
  </section>

	<section class="w-full mx-auto py-16 lg:py-24 mt-12">

    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
      <div class="space-y-3">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Browse Categories</h2>
        <p class="text-gray-500 text-lg max-w-2xl">Find specific references from thousands of curated literature collections tailored to your field of study.</p>
      </div>
      <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 hover:underline flex items-center gap-1 transition-all">
        View All Categories
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">

      <a href="#" class="group flex flex-col items-center justify-center p-8 border-2 border-gray-100 rounded-2xl hover:border-blue-500 hover:bg-blue-50 transition-colors">
        <div class="w-16 h-16 mb-4 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
          </svg>
        </div>
        <h3 class="font-bold text-gray-900 text-lg">Technology & Code</h3>
        <p class="text-sm text-gray-500 mt-1">1.240 Books</p>
      </a>

      <a href="#" class="group flex flex-col items-center justify-center p-8 border-2 border-gray-100 rounded-2xl hover:border-green-500 hover:bg-green-50 transition-colors">
        <div class="w-16 h-16 mb-4 bg-green-100 text-green-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
          </svg>
        </div>
        <h3 class="font-bold text-gray-900 text-lg">Sains & Biology</h3>
        <p class="text-sm text-gray-500 mt-1">850 Literature</p>
      </a>

      <a href="#" class="group flex flex-col items-center justify-center p-8 border-2 border-gray-100 rounded-2xl hover:border-purple-500 hover:bg-purple-50 transition-colors">
        <div class="w-16 h-16 mb-4 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <h3 class="font-bold text-gray-900 text-lg">Business & Economy</h3>
        <p class="text-sm text-gray-500 mt-1">2.100 Books</p>
      </a>

      <a href="#" class="group flex flex-col items-center justify-center p-8 border-2 border-gray-100 rounded-2xl hover:border-orange-500 hover:bg-orange-50 transition-colors">
        <div class="w-16 h-16 mb-4 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h3 class="font-bold text-gray-900 text-lg">Literature and Fiction</h3>
        <p class="text-sm text-gray-500 mt-1">3.450 Books</p>
      </a>

    </div>
  </section>

</x-layouts.main.app>
