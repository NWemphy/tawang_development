@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">

    {{-- JUDUL --}}
    <h1 class="text-white text-2xl font-semibold mb-6">
        Profil Padukuhan
    </h1>

    {{-- GRID UTAMA --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        {{-- PETA DESA --}}
        <div class="bg-gradient-to-b from-indigo-500 to-indigo-700 rounded-3xl p-5 shadow-xl">
            <img src="{{ asset('assets/images/profil/PETA_DUSUN.PNG') }}"
                 class="w-full h-48 object-contain rounded-xl">
            <p class="text-center text-white mt-4 font-semibold tracking-wide">
                PETA DESA
            </p>
        </div>

        {{-- JUMLAH RT --}}
        <div class="bg-gradient-to-b from-indigo-500 to-indigo-700 rounded-3xl p-5 shadow-xl">
            <img src="{{ asset('assets/images/profil/Jumlah_RT.png') }}"
                 class="w-full h-48 object-contain rounded-xl">
            <p class="text-center text-white mt-4 font-semibold tracking-wide">
                JUMLAH RT
            </p>
        </div>

        {{-- JUMLAH KK --}}
        <div class="bg-gradient-to-b from-indigo-500 to-indigo-700 rounded-3xl p-5 shadow-xl">
            <img src="{{ asset('assets/images/profil/kk.png') }}"
                 class="w-full h-48 object-contain rounded-xl">
            <p class="text-center text-white mt-4 font-semibold tracking-wide">
                JUMLAH KK
            </p>
        </div>

        {{-- JUMLAH PENDUDUK --}}
        <div class="bg-gradient-to-b from-indigo-500 to-indigo-700 rounded-3xl p-5 shadow-xl">
            <img src="{{ asset('assets/images/profil/penduduk.png') }}"
                 class="w-full h-48 object-contain rounded-xl">
            <p class="text-center text-white mt-4 font-semibold tracking-wide">
                JUMLAH PENDUDUK
            </p>
        </div>
    </div>

    {{-- LEMBAGA DESA --}}
    <div class="mt-12 flex justify-center">
        <div class="bg-gradient-to-b from-indigo-500 to-indigo-700 rounded-full p-8 shadow-2xl w-72 h-72 flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/profil/lembaga.png') }}"
                 class="w-40 h-40 object-contain">
            <p class="text-white text-center mt-4 font-semibold text-sm tracking-wide">
                LEMBAGA<br>KEMASYARAKATAN DESA
            </p>
        </div>
    </div>

</div>
@endsection
