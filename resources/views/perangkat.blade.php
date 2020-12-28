@extends('layouts.master')
@section('title', 'Perangkat')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pankat</h2>
          <ol>
            <li><a href="/home">Home</a></li>
            <li>Pangkat</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Desa <strong>Panglipuran</strong></h2>
            <p>
                Penglipuran adalah salah satu desa adat dari Kabupaten Bangli, Provinsi Bali, Indonesia. Desa ini terkenal sebagai salah satu destinasi wisata di Bali karena masyarakatnya yang masih menjalankan dan melestarikan budaya tradisional Bali di kehidupan mereka sehari-hari. Arsitektur bangunan dan pengolahan lahan masih mengikuti konsep Tri Hita Karana, filosofi masyarakat Bali mengenai keseimbangan hubungan antara Tuhan, manusia ,dan lingkungannya. Mereka berhasil membangun pariwisata yang menguntungkan seluruh masyarakatnya tanpa menghilangkan budaya dan tradisi mereka. Pada tahun 1995, Desa Penglipuran juga mendapatkan penghargaan Kalpataru dari Pemerintah Indonesia atas usahanya melindungi Hutan Bambu di ekosistem lokal mereka
            </p>
        </div>
        @foreach ($pangkats->chunk(3) as $articleChunk)
        <div class="row ca">
            @foreach ($articleChunk as $pangkat)
            
          {{-- <div class="col-lg-3 md-1 ml-1 mr-1 mb-1 mt-1 d-flex align-items-stretch card"> --}}
            <div class="col-lg-3 card md-5 ml-5 mr-1 mb-1 mt-1 ">

            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{voyager::image("$pangkat->image")}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$pangkat->name}}</h4>
                <span>{{$pangkat->level}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
          @endforeach
          <div class="blog-pagination">
            <ul class="justify-content-center">
              {{$pangkats->links()}}
            </ul>
          </div>
      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->
    
@endsection