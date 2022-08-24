@extends('layouts.main')
@section('content')
   <!-- banner -->
   <section id="banner-entrepreneurship" class="py-5">
      <div class="container py-5">
         <div class="row py-5">
            <div class="col-md-10 col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-2">Pelatihan Kewirausahaan Sosial dan Webinar</h1>
            </div>
         </div>
      </div>
   </section>

   <section id="about">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/pelatihan/img-section-entrepreneurship-1.png') }}" alt="" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-4">Pelatihan kewirausahaan sosial</h1>
               <p class="body-1 fw-400 text-light mb-4">Pelatihan kewirausahaan sosial dilakukan Yayasan Wirausaha Sosial Indonesia bagi masyarakat yaitu pelaku wirausaha, pemerintah
                  maupun lembaga yang tertarik untuk memperoleh ilmu kewirausahaan sosial dan dapat mengaplikasikan pada level praktis. Kesiapan kurikulum direncanakan untuk diambil
                  dari metode yang tengah dikembangkan dari proyek/program yang dilakukan.</p>
            </div>
         </div>
      </div>
   </section>

   <section id="webinar">
      <div class="bg-empowerment">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-lg-6 order-lg-0 order-1">
                  <h1 class="head-1 text-black-1 fw-600 mb-4">Webinar</h1>
                  <p class="body-1 fw-400 text-black-2 mb-4">Webinar maupun aktivitas media sosial yang menyangkut isu kewirausahaan sosial direncanakan untuk dilakukan seiring dengan
                     proyek atau program pemberdayaan yang tengah berjalan sebagai saluran komunikasi pada masyarakat serta sumber ilmu pengetahuan, utamanya yang berkaitan dengan
                     topik kewirausahaan sosial dan aspek pemberdayaan.</p>
               </div>
               <div class="col-lg-6 mb-lg-0 order-0 order-lg-1 mb-4">
                  <div class="rounded-3 overflow-hidden">
                     <img src="{{ asset('assets/home/img/pelatihan/img-section-entrepreneurship-2.png') }}" alt="Gambar masyarakat" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />
@endsection
