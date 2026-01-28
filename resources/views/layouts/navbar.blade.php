<header class="md:hidden flex items-center gap-4 p-4 bg-[#1c1b4b] text-white">
    <button onclick="toggleSidebar()" class="text-2xl">☰</button>

    <input
        type="text"
        placeholder="Cari..."
        class="flex-1 px-4 py-2 rounded-full
               bg-white/10 text-sm outline-none">
               <button onclick="toggleSidebar()"
               class="p-2 rounded-lg hover:bg-white/10 transition text-white">
           <svg xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
               <circle cx="5" cy="12" r="1.5"/>
               <circle cx="12" cy="12" r="1.5"/>
               <circle cx="19" cy="12" r="1.5"/>
           </svg>
       </button>
       

    <button onclick="toggleDarkMode()">🌙</button>
</header>
