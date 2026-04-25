@props(['title', 'author', 'book_image'])

<a href="#"
  class="group block border-2 border-gray-100 rounded-xl p-4 hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">

  <img
    class="w-full aspect-[3/4] object-cover group-hover:scale-[1.02] transition-transform rounded-xl"
    src="{{ $book_image }}"
    alt="{{ $title }} - {{ $author }}"/>

  <div class="mt-4">
    <h3 class="font-bold text-gray-900 text-lg truncate">{{ $title }}</h3>
    <p class="text-gray-500 text-sm">{{ $author }}</p>
  </div>
</a>
