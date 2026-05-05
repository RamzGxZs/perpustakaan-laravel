<x-layouts.dashboard.app title="Library | Dashboard">

  <div class="space-y-5">
    <div class="bg-[#273142] p-6 rounded-xl shadow-lg">
      <h1 class="font-black text-2xl mb-2">Dashboard Overview</h1>
      <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam error culpa? Unde,
        reprehenderit cupiditate.</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-[#1B2431] p-4 rounded-lg border border-gray-700 space-y-2">
          <h3 class="text-gray-400 text-sm">Total Books</h3>
          <p class="text-3xl font-bold">{{ $bookCount }}</p>
        </div>
      </div>
    </div>

    <div class="bg-[#273142] p-6 rounded-xl shadow-lg space-y-3">
      <div>
				<h1 class="font-black text-2xl mb-2">Statistic</h1>
      	<p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam error culpa? Unde,reprehenderit cupiditate.</p>
			</div>
			<div class="w-full h-96 flex items-center justify-center bg-violet-500 rounded-lg">
				<h1 class="font-bold text-3xl">Mock charts</h1>
			</div>
    </div>

    <!-- Recent Books Section -->
    <div class="bg-[#273142] p-6 rounded-xl shadow-lg">
      <div class="">
        <h2 class="mb-6 font-bold text-xl text-white">Recent Books</h2>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-[#1B2431] text-gray-400 text-sm border-b border-gray-700">
              <th class="p-4 font-medium first:rounded-l-lg last:rounded-r-lg">Book Title</th>
              <th class="p-4 font-medium">Author</th>
              <th class="p-4 font-medium whitespace-nowrap">Total Pages</th>
              {{-- <th class="p-4 font-medium">Stock</th> --}}
              <th class="p-4 font-medium">Total Reads</th>
              <th class="p-4 font-medium first:rounded-l-lg last:rounded-r-lg">Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-300 text-sm">
            @foreach ($recentBooks as $book)
							<tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
								<td class="p-4 flex items-center gap-3">
									<div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center overflow-hidden shrink-0">
										<img src="{{ $book->book_image }}" alt="The Great Gatsby" class="w-full h-full object-cover">
									</div>
									<span class="whitespace-nowrap">{{$book->title}}</span>
								</td>
								<td class="p-4 whitespace-nowrap">{{$book->author}}</td>
								{{-- <td class="p-4 whitespace-nowrap">Fiction</td> --}}
								<td class="p-4">{{$book->pages}}</td>
								<td class="p-4">{{$book->book_readed}}</td>
								<td class="p-4">
									<span class="bg-[#00B69B] text-white px-3 py-1 rounded-full text-xs font-semibold">Active</span>
								</td>
            	</tr>
						@endforeach

          </tbody>
        </table>

				<div class="mt-2">
					{{ $recentBooks->links() }}
				</div>
      </div>
    </div>
  </div>
</x-layouts.dashboard.app>
