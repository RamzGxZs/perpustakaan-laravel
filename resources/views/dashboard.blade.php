<x-layouts.dashboard.app title="Library | Dashboard">

  <div class="space-y-5">
    <div class="bg-[#273142] p-6 rounded-xl shadow-lg">
      <h1 class="font-black text-2xl mb-2">Dashboard Overview</h1>
      <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam error culpa? Unde,
        reprehenderit cupiditate.</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-[#1B2431] p-4 rounded-lg border border-gray-700 space-y-2">
          <h3 class="text-gray-400 text-sm">Total Books</h3>
          <p class="text-3xl font-bold">120</p>
        </div>

        <div class="bg-[#1B2431] p-4 rounded-lg border border-gray-700 space-y-2">
          <h3 class="text-gray-400 text-sm">New Member</h3>
          <p class="text-3xl font-bold">5</p>
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
      <div class="flex justify-between items-center mb-6">
        <h2 class="font-bold text-xl text-white">Recent Books</h2>
        <button class="flex items-center gap-2 bg-[#1B2431] border border-gray-700 text-sm text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700 transition">
          October
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-[#1B2431] text-gray-400 text-sm border-b border-gray-700">
              <th class="p-4 font-medium first:rounded-l-lg last:rounded-r-lg">Book Title</th>
              <th class="p-4 font-medium">Author</th>
              <th class="p-4 font-medium whitespace-nowrap">Category</th>
              <th class="p-4 font-medium">Stock</th>
              <th class="p-4 font-medium">Shelf Location</th>
              <th class="p-4 font-medium first:rounded-l-lg last:rounded-r-lg">Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-300 text-sm">
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-4 flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=TG&background=random&color=fff" alt="The Great Gatsby" class="w-full h-full object-cover">
                </div>
                <span class="whitespace-nowrap">The Great Gatsby</span>
              </td>
              <td class="p-4 whitespace-nowrap">F. Scott Fitzgerald</td>
              <td class="p-4 whitespace-nowrap">Fiction</td>
              <td class="p-4">12</td>
              <td class="p-4">A1-04</td>
              <td class="p-4">
                <span class="bg-[#00B69B] text-white px-3 py-1 rounded-full text-xs font-semibold">Available</span>
              </td>
            </tr>
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-4 flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=19&background=random&color=fff" alt="1984" class="w-full h-full object-cover">
                </div>
                <span class="whitespace-nowrap">1984</span>
              </td>
              <td class="p-4 whitespace-nowrap">George Orwell</td>
              <td class="p-4 whitespace-nowrap">Science Fiction</td>
              <td class="p-4">0</td>
              <td class="p-4">B2-11</td>
              <td class="p-4">
                <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Borrowed</span>
              </td>
            </tr>
            <tr class="hover:bg-[#1B2431]/50 transition">
              <td class="p-4 flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=TK&background=random&color=fff" alt="To Kill a Mockingbird" class="w-full h-full object-cover">
                </div>
                <span class="whitespace-nowrap">To Kill a Mockingbird</span>
              </td>
              <td class="p-4 whitespace-nowrap">Harper Lee</td>
              <td class="p-4 whitespace-nowrap">Classic</td>
              <td class="p-4">5</td>
              <td class="p-4">C3-02</td>
              <td class="p-4">
                <span class="bg-[#00B69B] text-white px-3 py-1 rounded-full text-xs font-semibold">Available</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-layouts.dashboard.app>
