<aside id="sidebar"
  class="fixed inset-y-0 left-0 z-50 w-64 bg-[#273142] text-white flex flex-col transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">

  <div class="h-[68px] flex items-center justify-between px-6">
    <div class="flex items-center">
      <i class="fa-solid fa-book-open text-[#4880FF] text-2xl mr-3"></i>
      <h1 class="text-xl font-bold tracking-wide">Ramz<span class="text-[#4880FF]">Library</span></h1>
    </div>
    <button id="close-sidebar" class="lg:hidden text-gray-400 hover:text-white">
      <i class="fa-solid fa-xmark text-2xl"></i>
    </button>
  </div>

  <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1">

    <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Main Menu</p>

    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 bg-[#1B2431] text-white rounded-lg group transition-colors duration-200">
      <i class="fa-solid fa-house text-[#4880FF] w-5 text-center"></i>
      <span class="font-medium">Dashboard</span>
    </a>

    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-[#1B2431] hover:text-white rounded-lg transition-colors duration-200 group">
      <i class="fa-solid fa-book w-5 text-center group-hover:text-[#4880FF] transition-colors"></i>
      <span class="font-medium">Catalog</span>
    </a>

    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-[#1B2431] hover:text-white rounded-lg transition-colors duration-200 group">
      <i class="fa-solid fa-layer-group w-5 text-center group-hover:text-[#4880FF] transition-colors"></i>
      <span class="font-medium">Inventories</span>
    </a>

    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-[#1B2431] hover:text-white rounded-lg transition-colors duration-200 group">
      <i class="fa-solid fa-users w-5 text-center group-hover:text-[#4880FF] transition-colors"></i>
      <span class="font-medium">Users Management</span>
    </a>

    <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6 mb-2">Transactions</p>

    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-[#1B2431] hover:text-white rounded-lg transition-colors duration-200 group">
      <i class="fa-solid fa-book-open-reader w-5 text-center group-hover:text-[#4880FF] transition-colors"></i>
      <span class="font-medium">Borrowing</span>
    </a>

    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-[#1B2431] hover:text-white rounded-lg transition-colors duration-200 group">
      <i class="fa-solid fa-rotate-left w-5 text-center group-hover:text-[#4880FF] transition-colors"></i>
      <span class="font-medium">Returns</span>
    </a>

  </nav>

  <div class="p-4 border-t border-[#1B2431] space-y-1">
    <a href="#"
      class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-[#1B2431] hover:text-white rounded-lg transition-colors duration-200 group">
      <i class="fa-solid fa-gear w-5 text-center group-hover:text-white transition-colors"></i>
      <span class="font-medium">Pengaturan</span>
    </a>

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"
        class="flex items-center gap-3 px-3 py-2.5 text-red-400 hover:bg-red-500/10 hover:text-red-500 rounded-lg transition-colors duration-200 group">
        <i class="fa-solid fa-right-from-bracket w-5 text-center"></i>
        <span class="font-medium">Keluar</span>
      </button>
    </form>
  </div>

</aside>
