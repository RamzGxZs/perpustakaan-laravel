<x-layouts.dashboard.app title="Library | Catalog">
  <div class="space-y-6">
    <h1 class="font-bold text-3xl text-white mb-8">Catalog</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">


      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="relative h-64 flex items-center justify-center p-6">

          <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=300&auto=format&fit=crop" alt="The Great Gatsby" class="h-full w-full object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">

        </div>

        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">The Great Gatsby</h3>
              <p class="text-[#4880FF] text-sm font-medium">F. Scott Fitzgerald</p>
            </div>
            <button class="w-8 h-8 rounded-full bg-[#1B2431] flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-red-400 hover:bg-gray-800 transition border border-gray-700/50 ml-3">
              <i class="fa-regular fa-heart"></i>
            </button>
          </div>

          <div class="flex items-center gap-2 mb-6">
            <div class="flex text-orange-400 text-[10px]">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <span class="text-gray-400 text-xs font-medium">(131)</span>
          </div>

          <div class="mt-auto">
            <button class="px-4 py-2.5 bg-[#1B2431] hover:bg-gray-700 border border-gray-600 text-gray-200 text-xs font-semibold rounded-lg transition-colors">
              Edit Book
            </button>
          </div>
        </div>
      </div>



    </div>
  </div>
</x-layouts.dashboard.app>
