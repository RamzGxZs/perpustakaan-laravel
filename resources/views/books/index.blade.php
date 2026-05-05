<x-layouts.main.app title="Ramz Library | All Books">

  <section class="bg-blue-50/30 border-b border-gray-100 py-12 lg:py-16">
    <div class="w-full mx-auto px-6 lg:px-0">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">

        <div class="space-y-3">
          <h1 class="text-3xl md:text-5xl font-bold text-gray-900 tracking-tight">Book catalog</h1>
          <p class="text-gray-500 text-lg">Explore thousands of literature from various categories.</p>
        </div>

        <div class="w-full md:max-w-md">
          <form action="#" method="GET" class="relative group">
            <div
              class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-600 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
            <input type="text" name="search" placeholder="Search for title, author, or publisher..."
              class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl bg-white focus:border-blue-600 focus:ring-0 outline-none transition-all text-gray-700 font-medium placeholder-gray-400">
            <button type="submit" class="hidden">Search</button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <section class="w-full mx-auto px-6 lg:px-0 py-8">
    <div class="flex items-center justify-between mb-4">
      <h3 class="font-semibold text-gray-900">Filter</h3>
    </div>

    <div class="flex overflow-x-auto pb-4 gap-3 hide-scroll-bar">
      <a href="#"
        class="whitespace-nowrap px-5 py-2.5 bg-blue-600 text-white font-medium rounded-full text-sm hover:bg-blue-700 transition-colors">
        All books
      </a>
      <a href="#"
        class="whitespace-nowrap px-5 py-2.5 bg-white border-2 border-gray-100 text-gray-600 font-medium rounded-full text-sm hover:border-blue-500 hover:text-blue-600 transition-colors">
        💻 Technology & IT
      </a>
      <a href="#"
        class="whitespace-nowrap px-5 py-2.5 bg-white border-2 border-gray-100 text-gray-600 font-medium rounded-full text-sm hover:border-blue-500 hover:text-blue-600 transition-colors">
        🔬 Sains
      </a>
      <a href="#"
        class="whitespace-nowrap px-5 py-2.5 bg-white border-2 border-gray-100 text-gray-600 font-medium rounded-full text-sm hover:border-blue-500 hover:text-blue-600 transition-colors">
        📈 Business
      </a>
      <a href="#"
        class="whitespace-nowrap px-5 py-2.5 bg-white border-2 border-gray-100 text-gray-600 font-medium rounded-full text-sm hover:border-blue-500 hover:text-blue-600 transition-colors">
        🎭 Fiction
      </a>
      <a href="#"
        class="whitespace-nowrap px-5 py-2.5 bg-white border-2 border-gray-100 text-gray-600 font-medium rounded-full text-sm hover:border-blue-500 hover:text-blue-600 transition-colors">
        🎨 Design
      </a>
    </div>
  </section>

  <section class="w-full mx-auto px-6 lg:px-0 pb-16 lg:pb-24">

    <div class="mb-8 flex items-center justify-between border-b border-gray-100 pb-4">
      <p class="text-gray-500 font-medium">Show <span
          class="text-gray-900 font-bold">{{ $books->count() }}</span> Result.</p>

      <select class="border-none bg-transparent text-gray-600 font-medium focus:ring-0 cursor-pointer outline-none">
        <option value="terbaru">Latest Added</option>
        <option value="terpopuler">Most Popular</option>
        <option value="az">Titile A - Z</option>
      </select>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8">
      @foreach ($books as $book)
        <x-ui.card title="{{ $book->title }}" author="{{ $book->author }}" book_image="{{ $book->book_image }}"
          descriptions="{{ $book->descriptions }}" />
      @endforeach
    </div>

    @if ($books->isEmpty())
      <div class="text-center py-20 bg-gray-50/50 rounded-2xl border-2 border-dashed border-gray-200 mt-8">
        <div class="text-gray-400 mb-4 flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Book Not Found</h3>
        <p class="text-gray-500">Try using different keywords or choosing a different category.</p>
      </div>
    @endif

    <div class="mt-12">
      {{-- Uncomment kode di bawah ini jika kamu sudah memakai paginate() di Controller --}}
      {{-- {{ $books->book_imag }} --}}
    </div>

  </section>

</x-layouts.main.app>
