@extends('layout/main');

@section('title','NUSA PUTRA')

@section('container')


<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom: 100px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="{{ asset('nusaputra/asset/1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Aktifitas Mahasiswa</h5>
          <p class="text-dark">Mahasiswa di tuntut Untuk selalu berusaha</p>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="{{ asset('nusaputra/asset/perpus.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ruang Kelas Nyaman</h5>
          <p>Kegiatan Belajar Mengajar Lebih efisien</p>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="{{ asset('nusaputra/asset/perpus (2).jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Perpustakaan </h5>
          <p>Mahasswa Aktif mencari referensi Belajar</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
    <div>
        <section id="2 mb-5" style="margin-bottom: 100px;">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                      <a href="#" class="btn" bg-white>
                        <p class="text-dark text-left" bg-white><b>INFO</b></p>
                      </a>
                        <a href="#" class="btn" bg-white>
                          <p class="text-dark text-left" bg-white >More Lern</p>
                        </a>
                        <img src="{{ asset('nusaputra/asset/info1.jpg') }}" class="card-img-top" alt="...">
                        <div class="text1"  style="margin-bottom: 50px;">
                          <a href="" style="color: black;">Info dan berita tentang nusa putra</a>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                      <a href="#" class="btn" bg-white>
                        <p class="text-dark text-left" bg-white ><b>International Program</b>
                        </p>
                      </a>
                        <a href="#" class="btn" bg-white>
                          <p class="text-dark text-left" bg-white>More Lern</p>
                        </a>
                        <img src="{{ asset('nusaputra/asset/info2.jpg') }}" class="card-img-top" alt="...">
                        <div class="text" style="margin-bottom: 50px;" >
                          <a href="" style="color:black; text-align: justify;">Program Internasional Universitas Nusa putra</a>
                        </div>
                      </div>

                  </div>
                  <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                      <a href="#" class="btn" bg-white>
                        <p class="text-dark text-left" bg-white ><b>Kegiatan Akademik</b>
                        </p>
                      </a>
                        <a href="#" class="btn" bg-white>
                          <p class="text-dark text-left" bg-white>More Lern</p>
                        </a>
                        <img src="{{ asset('nusaputra/asset/info3.jpg') }}" class="card-img-top" alt="...">
                        <div class="text"  style="margin-bottom: 50px;">
                          <a href="" style="color: black;">Akademik Unversita Nusa putra</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

        </section>
    </div>

    <section id="3 mt-5 mb-5" style="margin-bottom: 100px;">
        <section class="container-lg">
          <div class="container">
            <div class="row">
              <div class="col-sm -1 bg-light">
                <h3>Little Step <i>for</i> </h3>
                <h1>Wide Vision</h1>
              </div>
              <div class="col-sm bg-light">
                <a class="gambar11">
                  <img src="{{ asset('nusaputra/asset/10.PNG') }}">
                </a>
                  <p><b> Nusa Putra University</b></p>
                  <p>Kecintaan pada agama sebagai cahaya Illahi petunjuk kebenaran generasi Nusa Putra.
                  Kecintaan kepada orangtua, para nabi, para rashul, para wali, leluhur,
                  orang-orang shaleh dan guru-guru kita sebagai kekuatan pengikat moral
                  yang kuat menuju cahaya kebenaran Illahiyah Kecintaan kepada sesama manusia
                  sebagai ketundukan manusia atas kehendak Illahiyah. Kecintaan pada Illahiyah,
                  meneladani orang tua dan mengasihi sesama sebagai pedoman kesempurnaan ahlak.
                  </p>
              </div>
            </div>
          </div>
        </section>
    </section>


<section id="4 mb-5" style="margin-bottom: 100px;">
        <section class="container-lg">

          <div class="container">
            <div class="row">
              <div class="col-xl">
                <h3>Penerimaan Siswa</h3>
                <h1><i>Baru</i></h1>
              </div>
              <div class="col-xl">
                <img src="{{ asset('nusaputra/asset/brosur1.jpg') }}" >
                <button type="button" class="btn btn-outline-secondary"><b>Download Browsure</b>>></button>
              </div>
              <div class="col-sm">
                <img src="{{ asset('nusaputra/asset/brosur2.jpg') }}">
                <button type="button" class="btn btn-outline-secondary"><b>DAFTAR ONLINE</b> >></button>
              </div>
            </div>
          </div>
        </section>
    </section>

    <section id="5" style="margin-bottom: 100px;">
        <section class="container5">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <h3>Berita Terbaru</h3>
                <a href="" style="color: black;"><i>Lebih Banyak</i></a>
              </div>
              <div class="col-sm">
                <img src="{{ asset('nusaputra/asset/berita1.PNG') }}">
                <p>Calon Penerimaa Program Beasiswa 1000 anak negri ikuti seleksi</p>
                <p>Nusaputra.ac.id - Program Beasiswa 1.000 Anak Negeri Universitas Nusa Putra
                  (NPU) Sukabumi Tahun Akademik (TA) 2021-2022 ....</p>
              </div>
              <div class="col-sm">
                <img src="{{ asset('nusaputra/asset/berita2.PNG') }}">
                <p>aulia rahma pemenang pilmapres2020</p>
                <p>Nusaputra.ac.id - Badan Eksekutif Mahasiswa
                  (BEM) Universitas Nusa Putra (NPU) Sukabumi,
                  adakan Pemilihan Mahasiswa Berprestasi ....</p>
              </div>
              <div class="col-sm">
                <img src="{{ asset('nusaputra/asset/berita3.PNG')}}">
                <p>dosen dan mahasiswa asing jadi sumber praktek wawancara SMK al-azhar 21 sukabumi</p>
                <p>Nusaputra.ac.id - Sebanyak delapan orang siswa-siswi SMA AL-Azhar 21 Kota Sukabumi,
                  kunjungi Universitas Nusa Putra.....</p>
              </div>
            </div>
          </div>
        </section>
    </section>

    <section id="6" style="margin-bottom: 100px;">
        <section class="container6">

          <div class="container">
            <div class="row">
              <div class="col-sm">
                <img src="{{ asset('nusaputra/asset/Rektor.jpg') }}">
              </div>
              <div class="col-sm">
                <img src="{{ asset('nusaputra/asset/trilogi.PNG') }}">
              </div>
            </div>
          </div>
        </section>
    </section>

  <div class="container" style="margin-bottom: 100px;">
    <div class="event">
      <div class="collom">
        <h1>Event</h1>
        <h2><i>Terbaru</i></h2>
        <a href="" style="color: black;">Lebih Banyak >></a>
      </div>
    </div>
  </div>

  <div class="container" style="margin-bottom: 100px;">
    <div class="collom">
        <h1 >Global Partner</h1>
    </div>
    <div class="conten" style="display: flex;">
      <div class="collom">
        <img src="{{ asset('nusaputra/asset/seamolec.png')  }} "alt="" style="width: 100px; margin-left: 70px;">
        <img src="{{ asset('nusaputra/asset/kbtu2.png')  }} "alt="" style="width: 150px; margin-left: 70px;">
        <img src="{{ asset('nusaputra/asset/sunmoon.png')  }} "alt="" style="width: 100px; margin-left: 70px;">

        <img src="{{ asset('nusaputra/asset/ukm2.png')  }} "alt="" style="width: 150px; margin-left: 70px;">

        <img src="{{ asset('nusaputra/asset/iium2.png')  }} "alt="" style="width: 200px; margin-left: 70px;">


      </div>
    </div>
  </div>

  @endsection
