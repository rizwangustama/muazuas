<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="">
    <link rel="Stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <section id="1">
    <section class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a class="gambar">
                <img src="{{ asset('nusaputra/asset/logo.png') }}">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                  <li class="nav-item mr-4 ">
                    <a class="nav-link" aria-current="page" href="#">Conference</a>
                  </li>
                  <li class="nav-item mr-4">
                    <a class="nav-link" href="#">International</a>
                  </li>
                  <li class="nav-item mr-4">
                    <a class="nav-link" href="#">Contack</a>
                    </li>
                </ul>
              </div>
              <a class="gambar1 mr-4">

                  <img src="{{ asset('nusaputra/asset/indonesia.png') }}">
                  <img src="{{ asset('nusaputra/asset/amerika.png') }}">

              </a>
              <div class="button"  class="btn btn-danger" style="background-color: rgb(206, 63, 141); border-radius: 15px;
                        padding: 10px">
                  <a href="{{ route('login') }}"style="color:black">Login</a>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tentang
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="">Sejarah</a></li>
                      <li><a href="">Gagasan Pendidikan</a></li>
                      <li><a href="">Sambutan Rektor</a></li>
                      <li><a href="">Visi Misi</a></li>
                      <li><a href="">Sambutan Guru Besar</a></li>
                      <li><a href="">Organisasi</a></li>
                      <li><a href="">Kontak</a></li>
                    </ul>
                  </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li><span class="dropdown-item-text">Fakultas Konputer Teknik dan Desain</span></li>
                            <li><a class="dropdown-item" href="#">Sistem Informasi</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Informatika</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Sipil</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Elektro</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Mesin</a></li>
                            <li><a class="dropdown-item" href="#">Desain Komunikasi Visual</a></li>
                            <li><a class="dropdown-item" href="#">Magister Ilmu Komputer</a></li>
                        </ul>
                        <ul class="dropdown-menu">
                            <li><span class="dropdown-item-text">Fakultas Bisnis dan Humaniora</span></li>
                            <li><a class="dropdown-item" href="#">Ilmu Hukum</a></li>
                            <li><a class="dropdown-item" href="#">Akuntansi </a></li>
                            <li><a class="dropdown-item" href="#">Managemen</a></li>
                            <li><a class="dropdown-item" href="#">PGSD</a></li>
                        </ul>
                        <ul class="dropdown-menu">
                            <li><span class="dropdown-item-text">Sekolah Vokasi</span></li>
                            <li><a class="dropdown-item" href="#">Teknik Elektro </a></li>
                            <li><a class="dropdown-item" href="#"> Teknik Mesin</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/kemahasiswaan">Kemahasiswaan</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/berita">Berita</a>
                     </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/event">Event</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Registrasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Penerimaan Mahasiswa Baru</a></li>
                            <li><a class="dropdown-item" href="#">Beasiswa 1000 anak negri</a></li>
                            <li><a class="dropdown-item" href="#">kuliah double degree di taiwan</a></li>
                            <li><a class="dropdown-item" href="#">beasisw bupati sukabumi</a></li>
                            <li><a class="dropdown-item" href="#">pendaftaran pasca sarjana</a></li>
                            <li><a class="dropdown-item" href="#">brousure dan biaya</a></li>
                            <li><a class="dropdown-item" href="#">registrasi wisuda</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
          </nav>
    </section>
    </section>

    @yield('container');



   <footer>
     <div class="" style="background-color: rgb(53, 52, 52); color: blanchedalmond;">
       <div class="konten" style="display:flex; justify-content: space-between; margin-bottom: 100px; " >
         <div class="collom1" style="margin-left: 100px;" >
           <p style="font-size: 25px; margin-top: 50px;">Universitas Nusaputra</p>
           <a href="" style="font-size: 13px; color: blanchedalmond;">Join our campus</a>
          </div>
          <div class="collom2">
            <button type="button" class="btn btn-outline-danger">Daftar Online</button>
          </div>
       </div>
       <div class="konten1" style="display: flex;;">
         <div class="collom">
           <img src="{{ asset('nusaputra/asset/universitas.png') }}" style="width: 100px; margin-left: 200px;">
         </div>
         <div class="collom1" style="margin-left: 200px; font-size: 13px;">
           <p style="font-size: 24px;"><b>Hubungi Kami</b></p>
           <p>Nusa Putra University</p>
           <p>Jl. Raya Cibolang No. 21 Sukabumi,West Java, Indonesia 43152</p>
           <a href="">Map</a>
           <p>+62 266 210594</p>
           <p>info@nusaputra.ac.id</p>
           <a href="">Copyright © 2018 Ikatan Alumni Sistem Informasi Universitas Nusa Putra</a>
         </div>
      </div>
     </div>

   </footer>

<script src="./js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
