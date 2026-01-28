@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto text-white animate-fade-in">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl md:text-3xl font-bold tracking-wide">
            📰 Berita Padukuhan
        </h1>

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-2 text-sm opacity-80 hover:opacity-100 transition">
            ← Kembali
        </a>
    </div>

    <!-- CONTENT -->
    <div class="grid md:grid-cols-2 gap-6">

        {{-- Card berita --}}
        <div class="bg-white/10 backdrop-blur rounded-2xl p-5 hover:bg-white/15 transition">
            <h3 class="font-semibold text-lg mb-2">
                Kerja Bakti Warga
            </h3>
            <p class="text-sm opacity-80 leading-relaxed">
                Warga Padukuhan Tawang melaksanakan kerja bakti
                membersihkan lingkungan sebagai bentuk gotong royong.
            </p>
        </div>

        <div class="bg-white/10 backdrop-blur rounded-2xl p-5 hover:bg-white/15 transition">
            <h3 class="font-semibold text-lg mb-2">
                Sosialisasi Digital
            </h3>
            <p class="text-sm opacity-80 leading-relaxed">
                Kegiatan sosialisasi penggunaan teknologi digital
                bagi remaja dan warga.
            </p>
        </div>

    </div>

</div>

@endsection
