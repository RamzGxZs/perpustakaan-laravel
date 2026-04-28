<x-layouts.dashboard.app title="Library | User Management">
  <div class="space-y-6">
    <!-- <h1 class="font-bold text-3xl text-white">User Management</h1> -->

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
        <span>Role</span>
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
              <th class="p-6 font-semibold">User</th>
              <th class="p-6 font-semibold">Email</th>
              <th class="p-6 font-semibold">Role</th>
              <th class="p-6 font-semibold">Joined Date</th>
              <th class="p-6 font-semibold">Status</th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-300">
            <!-- Row 1 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-001</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=Alice+Smith&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">Alice Smith</span>
              </td>
              <td class="p-6 text-gray-400">alice@example.com</td>
              <td class="p-6">Admin</td>
              <td class="p-6">01 Jan 2026</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Active</span></td>
            </tr>
            <!-- Row 2 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-002</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=Bob+Jones&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">Bob Jones</span>
              </td>
              <td class="p-6 text-gray-400">bob.j@example.com</td>
              <td class="p-6">Member</td>
              <td class="p-6">15 Feb 2026</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Active</span></td>
            </tr>
            <!-- Row 3 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-003</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=Charlie+Brown&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">Charlie Brown</span>
              </td>
              <td class="p-6 text-gray-400">charlie.b@example.com</td>
              <td class="p-6">Member</td>
              <td class="p-6">20 Mar 2026</td>
              <td class="p-6"><span class="bg-[#FFA756] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Inactive</span></td>
            </tr>
            <!-- Row 4 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-004</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=Diana+Prince&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">Diana Prince</span>
              </td>
              <td class="p-6 text-gray-400">diana@example.com</td>
              <td class="p-6">Librarian</td>
              <td class="p-6">10 Apr 2026</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Active</span></td>
            </tr>
            <!-- Row 5 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-005</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=Edward+Cullen&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">Edward Cullen</span>
              </td>
              <td class="p-6 text-gray-400">edward@example.com</td>
              <td class="p-6">Member</td>
              <td class="p-6">05 May 2026</td>
              <td class="p-6"><span class="bg-[#EF3826] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Banned</span></td>
            </tr>
            <!-- Row 6 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-006</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=Fiona+Gallagher&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">Fiona Gallagher</span>
              </td>
              <td class="p-6 text-gray-400">fiona@example.com</td>
              <td class="p-6">Member</td>
              <td class="p-6">21 Jun 2026</td>
              <td class="p-6"><span class="bg-[#00B69B] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Active</span></td>
            </tr>
            <!-- Row 7 -->
            <tr class="border-b border-gray-700/50 hover:bg-[#1B2431]/50 transition">
              <td class="p-6">U-007</td>
              <td class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                  <img src="https://ui-avatars.com/api/?name=George+Lucas&background=random&color=fff" class="w-full h-full object-cover">
                </div>
                <span class="text-gray-100 font-medium whitespace-nowrap">George Lucas</span>
              </td>
              <td class="p-6 text-gray-400">george.l@example.com</td>
              <td class="p-6">Member</td>
              <td class="p-6">04 Jul 2026</td>
              <td class="p-6"><span class="bg-[#FFA756] text-white px-4 py-1.5 rounded-md text-xs font-semibold">Inactive</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <!-- Pagination -->
      <div class="p-6 flex items-center justify-between border-t border-gray-700 text-sm text-gray-400">
        <div>Showing 1-07 of 24</div>
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