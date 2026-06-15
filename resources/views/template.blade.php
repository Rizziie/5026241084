<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026241084 Muhammad Rizqy Aulia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h3>5026241084 Muhammad Rizqy Aulia</h3>
            <h6>@yield('title')</h6>
        </div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/snack">snack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjangbelanja">PR 2 (Latihan EAS Cowo)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nilaikuliah">PR 3 (Latihan EAS Cewe)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/siswa">Pertemuan 14 (Siswa)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tagihan_air">EAS</a>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('konten')
        </div>
    </div>

</body>

</html>
