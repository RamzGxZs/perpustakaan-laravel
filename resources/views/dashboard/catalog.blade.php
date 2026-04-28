<x-layouts.dashboard.app title="Library | Catalog">
  <div class="space-y-6">
    <h1 class="font-bold text-3xl text-white mb-8">Catalog</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Card 1 -->
      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="bg-white relative h-64 flex items-center justify-center p-6">
          <button class="absolute left-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=300&auto=format&fit=crop" alt="The Great Gatsby" class="h-full w-auto object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">
          <button class="absolute right-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
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

      <!-- Card 2 -->
      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="bg-white relative h-64 flex items-center justify-center p-6">
          <button class="absolute left-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=300&auto=format&fit=crop" alt="1984" class="h-full w-auto object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">
          <button class="absolute right-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>
        
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">1984</h3>
              <p class="text-[#4880FF] text-sm font-medium">George Orwell</p>
            </div>
            <button class="w-8 h-8 rounded-full bg-[#1B2431] flex-shrink-0 flex items-center justify-center text-red-500 hover:bg-gray-800 transition border border-gray-700/50 ml-3">
              <i class="fa-solid fa-heart"></i>
            </button>
          </div>
          
          <div class="flex items-center gap-2 mb-6">
            <div class="flex text-orange-400 text-[10px]">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star text-gray-600"></i>
            </div>
            <span class="text-gray-400 text-xs font-medium">(84)</span>
          </div>
          
          <div class="mt-auto">
            <button class="px-4 py-2.5 bg-[#1B2431] hover:bg-gray-700 border border-gray-600 text-gray-200 text-xs font-semibold rounded-lg transition-colors">
              Edit Book
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="bg-white relative h-64 flex items-center justify-center p-6">
          <button class="absolute left-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=300&auto=format&fit=crop" alt="To Kill a Mockingbird" class="h-full w-auto object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">
          <button class="absolute right-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>
        
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">To Kill a Mockingbird</h3>
              <p class="text-[#4880FF] text-sm font-medium">Harper Lee</p>
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
              <i class="fa-solid fa-star"></i>
            </div>
            <span class="text-gray-400 text-xs font-medium">(256)</span>
          </div>
          
          <div class="mt-auto">
            <button class="px-4 py-2.5 bg-[#1B2431] hover:bg-gray-700 border border-gray-600 text-gray-200 text-xs font-semibold rounded-lg transition-colors">
              Edit Book
            </button>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="bg-white relative h-64 flex items-center justify-center p-6">
          <button class="absolute left-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=300&auto=format&fit=crop" alt="Pride and Prejudice" class="h-full w-auto object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">
          <button class="absolute right-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>
        
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">Pride and Prejudice</h3>
              <p class="text-[#4880FF] text-sm font-medium">Jane Austen</p>
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
            <span class="text-gray-400 text-xs font-medium">(198)</span>
          </div>
          
          <div class="mt-auto">
            <button class="px-4 py-2.5 bg-[#1B2431] hover:bg-gray-700 border border-gray-600 text-gray-200 text-xs font-semibold rounded-lg transition-colors">
              Edit Book
            </button>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="bg-white relative h-64 flex items-center justify-center p-6">
          <button class="absolute left-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=300&auto=format&fit=crop" alt="The Hobbit" class="h-full w-auto object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">
          <button class="absolute right-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>
        
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">The Hobbit</h3>
              <p class="text-[#4880FF] text-sm font-medium">J.R.R. Tolkien</p>
            </div>
            <button class="w-8 h-8 rounded-full bg-[#1B2431] flex-shrink-0 flex items-center justify-center text-red-500 hover:bg-gray-800 transition border border-gray-700/50 ml-3">
              <i class="fa-solid fa-heart"></i>
            </button>
          </div>
          
          <div class="flex items-center gap-2 mb-6">
            <div class="flex text-orange-400 text-[10px]">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <span class="text-gray-400 text-xs font-medium">(412)</span>
          </div>
          
          <div class="mt-auto">
            <button class="px-4 py-2.5 bg-[#1B2431] hover:bg-gray-700 border border-gray-600 text-gray-200 text-xs font-semibold rounded-lg transition-colors">
              Edit Book
            </button>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-[#273142] rounded-xl overflow-hidden shadow-lg flex flex-col border border-gray-700/50 group">
        <div class="bg-white relative h-64 flex items-center justify-center p-6">
          <button class="absolute left-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=300&auto=format&fit=crop" alt="Fahrenheit 451" class="h-full w-auto object-cover rounded-md shadow-md group-hover:scale-105 transition-transform duration-300">
          <button class="absolute right-4 w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition shadow-sm">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>
        
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-white font-semibold text-lg mb-1 line-clamp-1">Fahrenheit 451</h3>
              <p class="text-[#4880FF] text-sm font-medium">Ray Bradbury</p>
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
              <i class="fa-regular fa-star text-gray-600"></i>
            </div>
            <span class="text-gray-400 text-xs font-medium">(89)</span>
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