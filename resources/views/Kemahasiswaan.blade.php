@extends('layout/main');

@section('title','Kemahasiswaan')

@section('container')


<section>
    <div class="" style="background-color: rgb(182, 59, 151); margin-bottom: 20px; margin-top: 20px; ">

        <p style="font-size: 50px; margin-left: 50px; color :  rgb(255, 255, 255); padding: 20px">Kemahasiswaan</p>
    </div>
</section>

<section id="5" style="margin-bottom: 100px;">
    <section class="container5">
      <div class="container" style="display: flex">

          <div class="col-sm">
            <img src="{{ asset('nusaputra/asset/berita1.PNG') }}">
            <p style="padding-top: 50px"><b>Maret 20, 2020</b></p>
            <p style="padding-top: 50px">Nusaputra.ac.id – Program Beasiswa 1.000 Anak Negeri Universitas Nusa Putra (NPU) Sukabumi
            Tahun Akademik (TA) 2020-2021 memasuki tahapan seleksi. Sebanyak …</p>
        <button type="button" class="btn btn-secondary"><a href="{{('/berita1')}}"> Read more</a></button>
          </div>
          <div class="col-sm">
            <img src="{{ asset('nusaputra/asset/berita2.PNG') }}">
            <p style="padding-top: 50px"><b>Maret 04, 2020</b></p>
            <p style="padding-top: 50px" >Nusaputra.ac.id – Badan Eksekutif Mahasiswa (BEM) Universitas Nusa Putra (NPU) Sukabumi,
                adakan Pemilihan Mahasiswa Berprestasi (Pilmapres) tahun 2020, Senin (24/2/2020) …</p>
              <button type="button" class="btn btn-secondary"><a href="/"> Read more</a></button>
          </div>
          <div class="col-sm">
            <img src="{{ asset('nusaputra/asset/berita3.PNG')}}">
            <p style="padding-top: 50px"><b>Februari 22, 2020</b></p>
            <p style="padding-top: 50px">Nusaputra.ac.id – Tidak sia-sia Slimani Laila (22 tahun) mulai belajar Bahasa Indonesia
                 sejak datang ke Universitas Nusa Putra (NPU) Sukabumi …</p>
              <button type="button" class="btn btn-secondary"><a href="/"> Read more</a></button>
          </div>


        </div>
      </div>
    </section>
</section>
<section id="5" style="margin-bottom: 100px;">
    <section class="container5">
      <div class="container" style="display: flex">

          <div class="col-sm">
            <img src="{{ asset('nusaputra/asset/kemahasiswaan.jpg') }}" style="width: 300px" >
            <p style="padding-top: 50px"><b>Februari 17, 2020</b></p>
            <p style="padding-top: 50px">Nusaputra.ac.id – Universitas Nusa Putra adakan prosesi penyambutan anggota baru atau Remaja
                Resimen Mahasiswa (Menwa) Mahawarman Satuan Universitas Nusaputra (NPU) …</p>
              <button type="button" class="btn btn-secondary"><a href="/"> Read more</a></button>
          </div>
          <div class="col-sm">
            <img src="{{ asset('nusaputra/asset/kemahasiswaan1.jpg') }}"style="width: 300px">
            <p style="padding-top: 50px"><b>Februari 14, 2020</b></p>
            <p style="padding-top: 50px">Nusaputra.ac.id – Bermula dari kesenangan dan hobi menari, serta keinginan dua
                orang mahasiswa Universitas Nusa Putra (NPU) Sukabumi untuk melestarikan …</p>
              <button type="button" class="btn btn-secondary"><a href="/"> Read more</a></button>
          </div>
          <div class="col-sm">
            <img src="{{ asset('nusaputra/asset/kemahasiswaan2.jpg')}}"style="width: 300px">
            <p style="padding-top: 50px"><b>November 16, 2019</b></p>
            <p style="padding-top: 50px">Jajaran Satuan Lalu Lintas (Satlantas) Kepolisian Resort (Polres) Sukabumi Kota
                datangi Kampus Universitas Nusa Putra (NPU) Sukabumi, Senin (25/11/2019). Program … </p>
              <button type="button" class="btn btn-secondary"><a href="/"> Read more</a></button>
          </div>

        </div>
      </div>
    </section>
</section>


@endsection
