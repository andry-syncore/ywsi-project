@extends('user.layouts.main')
@section('content')
   <!-- banner -->
   <section id="banner-publication" class="py-5">
      <div class="container py-5">
         <div class="row pt-5">
            <div class="col-md-10 col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-2">Publikasi/Buku</h1>
               <p class="body-1 text-light fw-400">Publikasi berupa buku dengan bertemakan beberapa topik Kewirausahaan Sosial yang beragam diterbitkan sebagai pedoman bagi pelaku wirausaha sosial dan akademi yang tertarik untuk mempelajari isu-isu yang berkaitan dengan tema kewirausahaan sosial.</p>
            </div>
         </div>
      </div>
   </section>

   <section id="about">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('storage/img/pelatihan/img-section-publication-1.png') }}" alt="" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-4">Topik kewirausahaan sosial</h1>
               <p class="body-1 fw-400 text-light mb-4">disusun berdasarkan metode yang telah dipelajari dan didapatkan dari best practice usaha pemberdayaan yang pernah dilakukan oleh Yayasan dan PT Syncore Indonesia. Melalui pembelajaran dari proyek yang dilakukan tersebut, diharapkan metode yang ditemukan dapat direplikasi ataupun ditingkatkan dengan mudah dalam unit analisis yang lebih besar. Metode yang dikembangkan Yayasan merupakan metode yang telah terbukti baik di lapangan dan terus berkembang seiring dengan pembelajaran yang didapatkan oleh Yayasan. Metode serta best practices yang dikembangkan diharapkan dapat bermanfaat bagi masyarakat secara luas.</p>
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />
@endsection
