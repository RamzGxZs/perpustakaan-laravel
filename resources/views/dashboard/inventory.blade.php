<x-layouts.dashboard.app title="Library | Inventory">
  <div class="space-y-6">
    <!-- <h1 class="font-bold text-3xl text-white">Book Lists</h1> -->

    <!-- Filter Bar -->
    <div class="bg-[#273142] rounded-xl flex items-center p-2 text-sm text-gray-300 max-w-4xl border border-gray-700/50">
      <div class="px-4 border-r border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
        </svg>
      </div>
      <div class="px-4 font-semibold text-white">Filter By</div>

      <!-- Dropdowns -->
      <div class="px-4 border-r border-gray-700 flex-1 flex items-center justify-between cursor-pointer hover:bg-[#1B2431] rounded p-2 transition">
        <span>Date</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
      </div>

      <div class="px-4 border-r border-gray-700 flex-1 flex items-center justify-between cursor-pointer hover:bg-[#1B2431] rounded p-2 transition">
        <span>Category</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
      </div>

      <div class="px-4 border-r border-gray-700 flex-1 flex items-center justify-between cursor-pointer hover:bg-[#1B2431] rounded p-2 transition">
        <span>Status</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
      </div>

      <div class="px-4 flex items-center text-[#EF3826] cursor-pointer hover:text-red-400 transition gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
        <span>Reset Filter</span>
      </div>
    </div>

    <!-- Table -->
    <div class="bg-[#273142] rounded-xl shadow-lg overflow-hidden border border-gray-700/50">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="text-gray-400 text-xs uppercase tracking-wider border-b border-gray-700">
              <th class="p-6 font-semibold">ID</th>
              <th class="p-6 font-semibold">Title</th>
              <th class="p-6 font-semibold">Author</th>
              <th class="p-6 font-semibold">Category</th>
              <th class="p-6 font-semibold">Type</th>
              <th class="p-6 font-semibold">Status</th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-300">
            @foreach ($books as $book)
							<tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
								<td class="p-6">{{ ($books->currentPage() - 1) * $books->perPage() + $loop->iteration }}</td>
								<td class="p-6 text-gray-100">{{$book->title}}</td>
								<td class="p-6">{{$book->author}}</td>
								<td class="p-6">Fiction</td>
								<td class="p-6">Hardcover</td>
								<td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Available</span></td>
            	</tr>
						@endforeach

          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="p-6 flex items-center justify-end border-t border-gray-700 text-sm text-gray-400">
        {{ $books->links() }}
      </div>
    </div>
  </div>
</x-layouts.dashboard.app>
