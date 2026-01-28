<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Padukuhan Tawang</title>

    <!-- Bootstrap (konten) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind (layout & sidebar) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Dark mode custom -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeIn .7s ease-out forwards;
        }
        @keyframes welcomeFade {
    0% {
        opacity: 0;
        transform: translateY(20px) scale(.95);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.animate-welcome {
    animation: welcomeFade 1s ease-out forwards;
}
        </style>
        
</head>

<body id="app" class="bg-[#1c1b4b] overflow-x-hidden transition-colors">

    {{-- NAVBAR (mobile) --}}
    @include('layouts.navbar')

    {{-- OVERLAY (MOBILE ONLY) --}}
    <div id="overlay"
         onclick="toggleSidebar()"
         class="fixed inset-0 bg-black/50 backdrop-blur-sm z-30 hidden md:hidden">
    </div>

    <div class="flex min-h-screen relative">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')

        {{-- CONTENT --}}
        <main class="flex-1 p-6 transition-all">
            @yield('content')
        </main>
    </div>

    {{-- SCRIPT --}}
    <script>
        const sidebar = document.getElementById('sidebar')
        const overlay = document.getElementById('overlay')
        const app = document.getElementById('app')

        /* TOGGLE SIDEBAR (mobile) */
        function toggleSidebar() {
            if (!sidebar || !overlay) return

            sidebar.classList.toggle('-translate-x-full')
            overlay.classList.toggle('hidden')
        }

        /* COLLAPSE SIDEBAR (desktop) */
        function collapseSidebar() {
            if (!sidebar) return

            sidebar.classList.toggle('w-72')
            sidebar.classList.toggle('w-20')

            document.querySelectorAll('.sidebar-text')
                .forEach(el => el.classList.toggle('hidden'))
        }

        /* DARK MODE */
        function toggleDarkMode() {
            app.classList.toggle('dark')
            localStorage.theme = app.classList.contains('dark') ? 'dark' : 'light'
        }

        if (localStorage.theme === 'dark') {
            app.classList.add('dark')
        }

        /* SWIPE MOBILE */
        let startX = 0

        document.addEventListener('touchstart', e => {
            startX = e.touches[0].clientX
        })

        document.addEventListener('touchend', e => {
            const endX = e.changedTouches[0].clientX

            if (startX < 50 && endX > 150) toggleSidebar()
            if (startX > 150 && endX < 50) toggleSidebar()
        })
        document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.getElementById('welcomeOverlay')

    if (!sessionStorage.getItem('welcomeShown')) {
    sessionStorage.setItem('welcomeShown', 'true')
} else {
    document.getElementById('welcomeOverlay')?.remove()
}

    setTimeout(() => {
        overlay.classList.add('opacity-0')
        overlay.style.transition = 'opacity .6s ease'
        
        setTimeout(() => {
            overlay.remove()
        }, 600)

    }, 2500)
})
    </script>

</body>
</html>
