@props(['title', 'author', 'book_image', 'descriptions'])

<a href="#"
  class="group block border-2 border-gray-100 rounded-xl p-4 hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">

  <div class="relative w-full aspect-[3/4] rounded-xl overflow-hidden">

    <img
      class="w-full h-full group-hover:scale-110 transition-transform duration-500 object-cover"
      src="{{ $book_image }}"
      alt="{{ $title }} - {{ $author }}"/>

    <div class="absolute inset-0 bg-gray-900/80 p-5 flex flex-col justify-start opacity-0 group-hover:opacity-100 transition-opacity duration-300 backdrop-blur-sm">
      <h4 class="text-white font-bold mb-2">Descriptions :</h4>
      <p class="text-gray-200 text-sm leading-relaxed line-clamp-6">
        {{ $descriptions ?? 'A description is not yet available for this book.' }}
      </p>
    </div>

  </div>

  <div class="mt-2">
    <h3 class="font-bold text-gray-900 text-lg truncate">{{ $title }}</h3>
    <div class="space-y-1">
      <p class="text-gray-500 text-sm">{{ $author }}</p>
      <p class="text-gray-500 text-sm">Uploaded by: {{ $author }}</p>
    </div>
  </div>
</a>
