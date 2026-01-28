@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">

    {{-- Judul Halaman --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-white tracking-wide">
            Galeri Padukuhan
        </h1>
        <p class="text-white/60 text-sm mt-1">
            Dokumentasi kegiatan dan kehidupan masyarakat Padukuhan Tawang
        </p>
    </div>

    {{-- Grid Galeri --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @php
        $galeri = [
            ['judul' => 'Kegiatan Gotong Royong', 'file' => 'kegiatan-1.jpg'],
            ['judul' => 'Rapat Warga', 'file' => 'kegiatan-2.jpg'],
            ['judul' => 'Fasilitas Umum', 'file' => 'fasilitas-1.jpg'],
            ['judul' => 'Kegiatan Budaya', 'file' => 'budaya-1.jpg'],
        ];
        @endphp

        @foreach ($galeri as $item)
        <div class="group relative rounded-2xl overflow-hidden
                    bg-gradient-to-b from-indigo-500/30 to-purple-600/30
                    backdrop-blur shadow-lg">

            {{-- Gambar --}}
            <img
                src="{{ asset('assets/images/galeri/'.$item['file']) }}"
                alt="{{ $item['judul'] }}"
                class="w-full h-56 object-cover
                       transition-transform duration-300
                       group-hover:scale-105"
            >

            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 opacity-0
                        group-hover:opacity-100 transition"></div>

            {{-- Caption --}}
            <div class="absolute bottom-0 left-0 right-0 p-4
                        translate-y-4 opacity-0
                        group-hover:translate-y-0 group-hover:opacity-100
                        transition-all duration-300">

                <h3 class="text-white font-semibold text-sm">
                    {{ $item['judul'] }}
                </h3>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
