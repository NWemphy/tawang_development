@extends('layouts.app')

@section('content')
<!-- WELCOME ANIMATION -->
<div id="welcomeOverlay"
     class="fixed inset-0 z-50 flex items-center justify-center
            bg-[#1c1b4b]/90 backdrop-blur-md">

    <div class="text-center text-white animate-welcome">

        <h1 class="text-3xl md:text-5xl font-extrabold tracking-wide mb-4">
            Selamat Datang
        </h1>

        <p class="text-lg md:text-xl opacity-80 mb-2">
            di Website Resmi
        </p>

        <p class="text-xl md:text-2xl font-semibold text-indigo-300 tracking-wide">
            Padukuhan Tawang
        </p>

    </div>
</div>

<div class="max-w-4xl mx-auto relative">

    {{-- Garis Tengah --}}
    <div class="absolute inset-y-0 left-1/2 -translate-x-1/2
                w-px bg-white/20 hidden md:block"></div>

    <div class="space-y-14">

        @php
        $cards = [
            [
                'title' => 'BERITA PADUKUHAN',
                'image' => 'berita-removebg-preview.png',
                'route' => route('berita')
            ],
            [
                'title' => 'INFO KEGIATAN',
                'image' => 'kegiatan.png',
                'route' => route('kegiatan')
            ],
            [
                'title' => 'VISI & MISI',
                'image' => 'visi-misi.png',
                'route' => route('visi-misi')
            ],
            [
                'title' => 'LAYANAN KONTAK',
                'image' => 'kontak.png',
                'route' => route('kontak')
            ],
        ];
        @endphp
        

        @foreach ($cards as $card)
        <div class="flex justify-center">

            <a href="{{ $card['route'] }}" 
            class="group w-72">


                <div class="rounded-3xl overflow-hidden
                            bg-gradient-to-b from-indigo-500/40 to-purple-600/40
                            shadow-xl backdrop-blur
                            transition-all duration-300
                            group-hover:scale-[1.03]
                            group-hover:shadow-indigo-500/40">

                    {{-- Gambar --}}
                    <img
                        src="{{ asset('assets/images/beranda/'.$card['image']) }}"
                        alt="{{ $card['title'] }}"
                        class="w-full h-64 object-cover"
                    >

                    {{-- Label --}}
                    <div class="py-4 text-center">
                        <span class="text-white font-semibold tracking-wide text-sm">
                            {{ $card['title'] }}
                        </span>
                    </div>

                </div>

            </a>

        </div>
        @endforeach

    </div>
</div>
@endsection
