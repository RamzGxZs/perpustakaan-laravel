<header class="w-full bg-[#273142] text-white flex justify-between items-center px-4 py-3">

  <div class="flex items-center gap-4">
    <button id="open-sidebar" class="lg:hidden p-2 rounded-md hover:bg-[#1B2431] transition-colors duration-200">
      <i class="fa-solid fa-bars text-xl"></i>
    </button>

    <button
      class="hidden md:flex items-center gap-3 px-3 py-2 rounded-md bg-transparent hover:bg-[#1B2431] transition-colors duration-200">
      <i class="fa-solid fa-magnifying-glass"></i>
      <span class="text-sm">Search...</span>
    </button>
  </div>

  <div class="flex items-center gap-4">

    <button aria-label="Notifications" class="p-2 rounded-full hover:bg-[#1B2431] transition-colors duration-200">
      <i class="fa-solid fa-bell text-lg"></i>
    </button>

    <button class="flex items-center gap-3 p-1.5 rounded-md hover:bg-[#1B2431] transition-colors duration-200 text-left">
      <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJLu-x8Qs0vs7c2pBwSx0g7G27MOKgJYp0588ZTEATax9EQ-MJtDNCe7d7FyZcvttKwYlo8MiV0SbeDHNxKS0o9wb8MED8c993Ju9qnA&s=10"
        alt="Indah Jumaiah avatar" class="w-9 h-9 object-cover object-center rounded-full border border-gray-500">
      <div class="flex items-center gap-1">
        <div class="hidden sm:flex flex-col leading-tight">
          <span class="text-sm font-bold truncate max-w-[150px]">{{ auth()->user()->email }}</span>
          <span class="text-xs text-gray-400"> {{ auth()->user()->role }} </span>
        </div>
        {{-- <i class="fa-solid fa-caret-down"></i> --}}
      </div>
    </button>

  </div>
</header>
