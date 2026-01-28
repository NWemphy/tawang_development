<nav class="space-y-2 px-3">

    @php
    $menus = [
        ['label' => 'Beranda',     'route' => 'dashboard',  'icon' => 'fi fi-rr-home'],
        ['label' => 'Profil',      'route' => 'profil',     'icon' => 'fi fi-rr-user'],
        ['label' => 'Pengaturan',  'route' => 'pengaturan', 'icon' => 'fi fi-rr-settings'],
        ['label' => 'Galeri',      'route' => 'galeri',     'icon' => 'fi fi-rr-picture'],
    ];
    @endphp

<aside
id="sidebar"
class="fixed inset-y-0 left-0 z-40
       w-72 bg-[#1c1b4b] text-white
       transform -translate-x-full
       transition-all duration-300 ease-in-out
       pointer-events-auto">
    
    @foreach ($menus as $menu)
    <a href="{{ route($menu['route']) }}"
    onclick="if (window.innerWidth < 768) toggleSidebar()"
       class="relative flex items-center gap-3 px-4 py-3 rounded-xl
              transition-all duration-200 ease-in-out
       {{ request()->routeIs($menu['route'].'*')
            ? 'bg-gradient-to-r from-indigo-500 to-purple-500 text-white shadow-lg
               before:absolute before:left-0 before:top-2
               before:h-[calc(100%-16px)] before:w-1
               before:rounded-r-full before:bg-white'
            : 'text-white/70 hover:bg-white/10' }}">
    
        <i class="{{ $menu['icon'] }} text-lg shrink-0"></i>
        <span class="sidebar-text font-medium">{{ $menu['label'] }}</span>
    </a>
    @endforeach
    
    </nav>
    