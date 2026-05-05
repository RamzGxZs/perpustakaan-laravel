<x-layouts.dashboard.app title="Library | Catalog">
  <div class="space-y-6">
    <div class="grid gridw-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

      @foreach ($books as $book)
				<div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
					<div class="relative h-64 flex items-center justify-center p-6">

						<img src="{{ $book->book_image ?? "" }}" alt="{{ $book->title }}" class="h-full w-full object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">

					</div>

					<div class="p-6 flex-1 flex flex-col">
						<div class="flex justify-between items-start mb-2">
							<div>
								<h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">{{ $book->title }}</h3>
								<p class="text-[#4880FF] text-sm font-medium">{{$book->author}}</p>
							</div>
							<button class="w-8 h-8 rounded-full bg-[#1B2431] flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-red-400 hover:bg-gray-800 transition border border-gray-700/50 ml-3">
								<i class="fa-regular fa-heart"></i>
							</button>
						</div>
					</div>
      	</div>
			@endforeach


    </div>
		<div class="mt-5 flex items-center justify-end w-full">
			{{ $books->links() }}
		</div>
  </div>
</x-layouts.dashboard.app>
