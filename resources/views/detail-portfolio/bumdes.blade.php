@extends('layouts.main')
@section('content')
   <!-- custom css -->
   @push('css')
      <style>
         .swiper-button-prev,
         .swiper-button-next {
            position: absolute;
            color: white;
         }

         .swiper-button-prev::after,
         .swiper-button-next::after {
            display: none;
         }

         .swiper-button-prev {
            top: 90%;
            left: 83%;
         }

         .swiper-button-next {
            top: 90%;
            left: 90%;
         }

         .swiper-pagination.swiper-pagination-bullets.swiper-pagination-vertical .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: #4EA824;
         }

         .swiper-pagination.swiper-pagination-bullets.swiper-pagination-vertical .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #FFF;
         }
      </style>
   @endpush

   <!-- banner -->
   <section id="banner-bumdes" class="py-5">
      <div class="container py-5">
         <div class="row py-5">
            <div class="col-md-10 col-lg-7">
               <h4 class="head-4 fw-600 text-green-1 mb-3">Overview Project</h4>
               <h3 class="head-3 fw-600 text-light mb-4">Pemberdayaan BUM Desa </h3>
            </div>
         </div>
      </div>
   </section>

   <section id="info">
      <div class="container py-4">
         <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-3">
               <h6 class="head-6 fw-600 text-green-2 mb-3">Donor</h6>
               <p class="pa-2 fw-400 text-black-2">-</p>
            </div>
            <div class="col-lg-6 px-lg-5 mb-lg-0 mb-3">
               <h6 class="head-6 fw-600 text-green-2 mb-3">Lokasi</h6>
               <p class="pa-2 fw-400 text-black-2">Seluruh Indonesia</p>
            </div>
            <div class="col-lg-2 px-lg-5 mb-lg-0 mb-3">
               <h6 class="head-6 fw-600 text-green-2 mb-3">Tahun</h6>
               <p class="pa-2 fw-400 text-black-2">2022</p>
            </div>
         </div>
         <div class="mt-3" style="border: 2px solid #4EA824; border-radius: 20px"></div>
      </div>
   </section>

   <section id="project">
      <div class="container py-3">
         <div class="row">
            <h2 class="head-2 text-green-2 fw-600 mb-4">Project Background</h2>
            <div class="col-lg-8 order-lg-0 order-1">

               <div class="swiper">
                  <div class="swiper-wrapper">

                     <div class="swiper-slide rounded-3 overflow-hidden">
                        <div class="rounded-3 overflow-hidden">
                           <img src="{{ asset('assets/home/img/portfolio/project/slider-bumdes.png') }}" alt="Gambar masyarakat" class="img-fluid">
                        </div>
                     </div>
                     <div class="swiper-slide rounded-3 overflow-hidden">
                        <div class="rounded-3 overflow-hidden">
                           <img src="{{ asset('assets/home/img/portfolio/project/slider-bumdes.png') }}" alt="Gambar masyarakat" class="img-fluid">
                        </div>
                     </div>
                     <div class="swiper-slide rounded-3 overflow-hidden">
                        <div class="rounded-3 overflow-hidden">
                           <img src="{{ asset('assets/home/img/portfolio/project/slider-bumdes.png') }}" alt="Gambar masyarakat" class="img-fluid">
                        </div>
                     </div>
                  </div>

                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"><i class="fa-regular fa-circle-left fa-2x"></i></div>
                  <div class="swiper-button-next"><i class="fa-regular fa-circle-right fa-2x"></i></div>
               </div>

               <article class="mt-4">
                  <p class="pa-3 fw-400 text-black-2 mb-3">Yayasan Wirausaha Sosial Indonesia merupakan bagian dari PT Syncore Indonesia yang telah berpengalaman dalam pemberdayaan
                     BUM Desa di Indonesia. PT Syncore Indonesia telah memiliki jaringan yang kuat yang tergabung dalam jaringan bumdes.id dengan jumlah penerima manfaat sebanyak
                     1000+ BUM Desa yang tersebar di seluruh Indonesia.</p>

                  <p class="pa-3 fw-400 text-black-2 mb-3 mt-4">Penguatan kelembagaan BUM Desa merupakan pengalaman yang telah terbukti baik dilakukan oleh PT Syncore melalui jaringan
                     bumdes.id yang dibentuk. Yayasan Wirausaha Sosial Indonesia memperluas scoupe/cakupan yang telah dilakukan dalam usaha pemberdayaan masyarakat desa dengan
                     jangkauan kewirausahaan sosial yang lebih luas, seperti perorangan, pelaku swasta dan bentuk usaha yang lain.</p>
               </article>

               <div id="impact" class="mt-5">
                  <h2 class="head-2 fw-600 text-green-1 mb-3">Impact</h2>
                  <div class="bg-impact">
                     <h2 class="head-2 fw-600 text-green-1 mb-5">Jaringan bumdes.id telah meliputi</h2>
                     <div class="row">
                        <div class="col-md-4 mb-5">
                           <h1 class="head-1 fw-600 text-green-1 mb-2">1000+</h1>
                           <p class="pa-2 text-light fw-400">BUM Desa Mitra</p>
                        </div>
                        <div class="col-md-4 mb-5">
                           <h1 class="head-1 fw-600 text-green-1 mb-2">6959</h1>
                           <p class="pa-2 text-light fw-400">Member Komunitas</p>
                        </div>
                        <div class="col-md-4 mb-5">
                           <h1 class="head-1 fw-600 text-green-1 mb-2">84 Mou</h1>
                           <p class="pa-2 text-light fw-400">Mentoring & kerjasama</p>
                        </div>
                        <div class="col-md-4 mb-5">
                           <h1 class="head-1 fw-600 text-green-1 mb-2">2765</h1>
                           <p class="pa-2 text-light fw-400">Training alumni</p>
                        </div>
                        <div class="col-md-4 mb-5">
                           <h1 class="head-1 fw-600 text-green-1 mb-2">1375</h1>
                           <p class="pa-2 text-light fw-400">Assesment BUM Desa</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 order-0 order-lg-1 mb-lg-0 mb-4">
               <div class="position-sticky" style="top: 85px">
                  <div class="card card-body rounded-4 p-4 shadow">
                     <a href="#project" class="text-decoration-none fw-500 text-black-1 mb-3" style="font-size: 18px">Project Background</a>
                     <a href="#impact" class="text-decoration-none fw-500 text-black-1 mb-3" style="font-size: 18px">Impact</a>
                     <a href="" class="btn-green-2 btn rounded-2 fw-600 head-5 mt-3 py-2">Download</a>
                  </div>

                  <div class="d-flex align-items-center mt-3">
                     <p class="pa-3 fw-400 text-black-2 me-3"><i class="fa-solid fa-share-nodes me-1"></i> Bagikan</p>
                     <a href="" class="me-3"><img src="{{ asset('assets/home/img/icon/share-ig.svg') }}" alt=""></a>
                     <a href="" class="me-3"><img src="{{ asset('assets/home/img/icon/share-fb.svg') }}" alt=""></a>
                     <a href="" class="me-3"><img src="{{ asset('assets/home/img/icon/share-wa.svg') }}" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />

   <!-- custom js -->
   @push('js')
      <script>
         const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
               el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
               nextEl: '.swiper-button-next',
               prevEl: '.swiper-button-prev',
            },
         });
      </script>
   @endpush
@endsection
