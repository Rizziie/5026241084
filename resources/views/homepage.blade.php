<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bootstrap 4 Navs</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

    <div class="container mt-4">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile">
                    About Me
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact">
                    Contact
                </a>
            </li>

        </ul>


        <div class="tab-content mt-3">

            <div class="tab-pane fade show active" id="home">
                <h4>Home</h4>
                <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNtI-qx0GLoDnHwdxCGO9AWrax221yi6QehA&s" alt="Ini saya hehe">
                    <br>Selamat datang di tugas 3 saya, dimana saya mendapatkan tugas untuk membuat bs4 Navs <br>
                namun saya rasa navs saja kurang jika tanpa adanya tab, jadi saya masukkan tab juga </p>
            </div>

            <div class="tab-pane fade" id="profile">
                <h4>About Me</h4>
                <p>Halo, Saya Muhammad Rizqy Aulia. Saya merupakan mahasiswa Semester 4 S1 Sistem Informasi
                    <br>Saat ini saya sedang menjalani mata kuliah pemrograman web
                    <br>saya cukup tertarik mempelajari ini tetapi saya bingung harus berlatih dimana.
                </p>
            </div>

            <div class="tab-pane fade" id="contact">
                <h4>Contact</h4>
                <p>Contact saya di : <br>
                    <a href="https://instagram.com/iamrizqy" target="_blank">Instagram</a> <br>
                <a href="https://www.linkedin.com/in/rizqyaulia" target="_blank">LinkedIn</a></p>
            </div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
