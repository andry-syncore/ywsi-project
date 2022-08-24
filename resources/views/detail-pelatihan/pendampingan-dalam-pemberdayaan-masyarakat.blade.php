@extends('layouts.main')
@section('content')
   <!-- banner -->
   <section id="banner-accompaniment" class="py-5">
      <div class="container py-5">
         <div class="row pt-5">
            <div class="col-md-10 col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-2">Pendampingan dalam Pemberdayaan Masyarakat</h1>
               <p class="body-1 text-light fw-400">Yayasan Wirausaha Sosial Indonesia melakukan pendampingan intensif bagi usaha pemberdayaan di tingkat masyarakat, dengan melibatkan
                  sektor publik maupun sektor swasta. Pemberdayaan yang dilakukan Yayasan Wirausaha Sosial Indonesia didapatkan dari lembaga donor baik internasional maupun nasional
                  dan dana CSR dari Perusahaan.</p>
            </div>
         </div>
      </div>
   </section>

   <section id="about">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/pelatihan/img-section-accompaniment-1.png') }}" alt="" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-4">Pemberdayaan masyarakat meliputi pendampingan di level komunitas masyarakat baik di kawasan urban maupun pedesaan.</h1>
               <p class="body-1 fw-400 text-light mb-4">Pemberdayaan masyarakat umumnya dibagi dalam beberapa fase yaitu dimulai dengan fase assessment awal, piloting dan implementasi
                  proyek pemberdayaan dan diakhiri dengan monitoring dan evaluation dalam pengukuran dampak pemberdayaan terhadap penghidupan masyarakat. Gambar Siklus Proyek (Project
                  Life Cycle) yang diadaptasi oleh Yayasan dalam Pendampingan Pemberdayaan.</p>
            </div>
         </div>
      </div>
   </section>

   <section id="project-cycle">
      <div class="container py-5">
         <div class="row">
            <div class="col-12">
               <img src="{{ asset('assets/home/img/pelatihan/img-section-accompaniment-2.png') }}" alt="" class="img-fluid w-100">
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />
@endsection
