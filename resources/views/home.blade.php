{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Padukuhan Tawang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .hero {
            background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('{{ asset('images/tawang.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 100px 20px;
        }
        @media (max-width: 576px) {
            .hero {
                padding: 70px 20px;
            }
            .hero h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<!-- HERO -->
<section class="hero text-center">
    <h1 class="fw-bold">Padukuhan Tawang</h1>
    <p class="lead">Guyub, Asri, dan Berbudaya</p>
</section>

<!-- TENTANG -->
<section class="container py-5">
    <h3 class="mb-3">Tentang Padukuhan</h3>
    <p>
        Padukuhan Tawang terletak di Desa Banyuroto, Kecamatan Nanggulan, Kabupaten Kulon Progo.
        Warga hidup rukun dengan semangat gotong royong dan kepedulian sosial.
    </p>
</section>

<!-- POTENSI -->
<section class="container pb-5">
    <h3 class="mb-4">Potensi Padukuhan</h3>
    <div class="row g-3">
        @foreach ($potensi as $item)
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['judul'] }}</h5>
                        <p class="card-text">{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- KONTAK -->
<section class="bg-light py-5">
    <div class="container">
        <h3 class="mb-3">Kontak</h3>
        <p class="mb-1">Padukuhan Tawang, Desa Banyuroto</p>
        <p class="mb-1">Email: padukuhantawang@email.com</p>
        <p>Telepon: 08xxxxxxxxxx</p>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <small>&copy; {{ date('Y') }} Padukuhan Tawang</small>
</footer>

</body>
</html>