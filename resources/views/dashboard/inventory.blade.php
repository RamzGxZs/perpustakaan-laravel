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
            <!-- Row 1 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00001</td>
              <td class="p-6 text-gray-100">The Great Gatsby</td>
              <td class="p-6">F. Scott Fitzgerald</td>
              <td class="p-6">Fiction</td>
              <td class="p-6">Hardcover</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Available</span></td>
            </tr>
            <!-- Row 2 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00002</td>
              <td class="p-6 text-gray-100">1984</td>
              <td class="p-6">George Orwell</td>
              <td class="p-6">Science Fiction</td>
              <td class="p-6">Paperback</td>
              <td class="p-6"><span class="bg-violet-600 text-white px-4 py-1.5 rounded-md text-xs font-semibold">Borrowed</span></td>
            </tr>
            <!-- Row 3 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00003</td>
              <td class="p-6 text-gray-100">To Kill a Mockingbird</td>
              <td class="p-6">Harper Lee</td>
              <td class="p-6">Classic</td>
              <td class="p-6">Hardcover</td>
              <td class="p-6"><span class="bg-[#EF3826] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Damaged</span></td>
            </tr>
            <!-- Row 4 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00004</td>
              <td class="p-6 text-gray-100">Pride and Prejudice</td>
              <td class="p-6">Jane Austen</td>
              <td class="p-6">Romance</td>
              <td class="p-6">Paperback</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Available</span></td>
            </tr>
            <!-- Row 5 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00005</td>
              <td class="p-6 text-gray-100">The Hobbit</td>
              <td class="p-6">J.R.R. Tolkien</td>
              <td class="p-6">Fantasy</td>
              <td class="p-6">Hardcover</td>
              <td class="p-6"><span class="bg-violet-600 text-white px-4 py-1.5 rounded-md text-xs font-semibold">Borrowed</span></td>
            </tr>
            <!-- Row 6 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00006</td>
              <td class="p-6 text-gray-100">Fahrenheit 451</td>
              <td class="p-6">Ray Bradbury</td>
              <td class="p-6">Dystopian</td>
              <td class="p-6">Paperback</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Available</span></td>
            </tr>
            <!-- Row 7 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00007</td>
              <td class="p-6 text-gray-100">Moby Dick</td>
              <td class="p-6">Herman Melville</td>
              <td class="p-6">Adventure</td>
              <td class="p-6">Hardcover</td>
              <td class="p-6"><span class="bg-violet-600 text-white px-4 py-1.5 rounded-md text-xs font-semibold">Borrowed</span></td>
            </tr>
            <!-- Row 8 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00008</td>
              <td class="p-6 text-gray-100">War and Peace</td>
              <td class="p-6">Leo Tolstoy</td>
              <td class="p-6">Historical</td>
              <td class="p-6">Hardcover</td>
              <td class="p-6"><span class="bg-[#FFA756] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Reserved</span></td>
            </tr>
            <!-- Row 9 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">00009</td>
              <td class="p-6 text-gray-100">The Odyssey</td>
              <td class="p-6">Homer</td>
              <td class="p-6">Epic</td>
              <td class="p-6">Paperback</td>
              <td class="p-6"><span class="bg-[#E134EF] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Lost</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <!-- Pagination -->
      <div class="p-6 flex items-center justify-between border-t border-gray-700 text-sm text-gray-400">
        <div>Showing 1-09 of 78</div>
        <div class="flex gap-2">
          <button class="w-8 h-8 flex items-center justify-center rounded bg-[#1B2431] hover:bg-gray-700 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
          </button>
          <button class="w-8 h-8 flex items-center justify-center rounded bg-[#1B2431] hover:bg-gray-700 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</x-layouts.dashboard.app>