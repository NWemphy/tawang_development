@extends('layouts.app')

@section('content')

<style>
.hero {
    background:
        linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
        url('{{ asset('images/tawang.jpg') }}');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 20px;
    border-radius: 20px;
}
</style>

<section class="hero text-center mb-5">
    <h1 class="fw-bold">Padukuhan Tawang</h1>
    <p class="lead">Guyub, Asri, dan Berbudaya</p>
</section>

@endsection
