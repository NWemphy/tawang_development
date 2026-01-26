<aside
    id="sidebar"
    class="fixed md:static inset-y-0 left-0 z-40
           w-72 md:w-72 bg-[#1c1b4b] text-white
           transform -translate-x-full md:translate-x-0
           transition-all duration-300 overflow-hidden">

    <!-- HEADER SIDEBAR -->
<div class="px-6 pt-6 pb-5 border-b border-white/10 sidebar-text">

    <div class="flex items-start gap-4">

        <!-- LOGO -->
        <img
            src="{{ asset('images/logo-tawang.png') }}"
            alt="Logo Padukuhan Tawang"
            class="w-11 h-11 object-contain shrink-0"
        >

        <!-- TEKS -->
        <div class="leading-[1.15]">
            <h1 class="text-[17px] font-extrabold tracking-wide uppercase">
                Padukuhan<br>
                Tawang
            </h1>

            <p class="mt-2 text-[11px] font-light opacity-70 leading-snug">
                Dukuh Tawang, Desa Banyuroto,<br>
                Kec. Nanggulan, Kab. Kulon Progo,<br>
                Prov. DIY
            </p>
        </div>

    </div>
</div>

    <!-- Menu -->
    <nav class="p-6 space-y-5">
        @php
            $menu = [
                ['label'=>'Beranda','icon'=>'🏠','route'=>'/'],
                ['label'=>'Profil','icon'=>'👤','route'=>'/profil'],
                ['label'=>'Pengaturan','icon'=>'⚙️','route'=>'/pengaturan'],
                ['label'=>'Galeri','icon'=>'🖼️','route'=>'/galeri'],
            ];
        @endphp

        @foreach($menu as $item)
        <a href="{{ $item['route'] }}"
           class="flex items-center gap-3 px-3 py-2 rounded-lg
           {{ request()->is(ltrim($item['route'],'/')) ? 'bg-white/15' : 'hover:bg-white/10' }}">
            <span class="text-lg">{{ $item['icon'] }}</span>
            <span class="sidebar-text">{{ $item['label'] }}</span>
        </a>
        @endforeach
    </nav>

    <!-- Bottom -->
    <div class="absolute bottom-6 left-6 text-sm opacity-70 sidebar-text">
        ⏻ Logout
    </div>
</aside>
