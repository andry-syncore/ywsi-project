@extends('layouts.main')
@section('content')
   <section id="banner-home">
      <div class="bg-video">
         <video loop muted autoplay width="100%">
            <source src="{{ asset('assets/home/videos/banner.mp4') }}" type="video/mp4">
         </video>
         <div class="position-absolute start-0 end-0 top-0 bottom-0">
            <div class="position-relative">
               <img src="{{ asset('assets/home/img/homepage/banner-home.png') }}" alt="" class="img-fluid" style="width: 100%">
               <div class="position-absolute d-none d-md-block text-center" style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                  <h1 class="text-light fw-600 mb-3" style="font-size: 64px">WE RISE BY LIFTING OTHERS</h1>
                  <p class="pa-1 text-light fw-400">Mari tumbuh bersama dan memberikan dampak sosial untuk Indonesia</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="impact">
      <div class="container py-5">
         <div class="row">
            <h1 class="head-1 fw-600 mb-5 text-center">Berikan Dampak Masyarakat Bersama YWSI</h1>
            <div class="col-lg-4 mb-4">
               <div class="card-impact card card-body rounded-4 h-100 p-3 text-center shadow-sm">
                  <img src="{{ asset('assets/home/img/homepage/img-card-dampak-1.png') }}" alt="" class="img-fluid mb-4">
                  <h4 class="head-4 fw-600 text-green-2 mb-2">Pendampingan dalam Pemberdayaan Masyarakat</h4>
                  <p class="body-2 fw-400">Pemberdayaan yang dilakukan Yayasan Wirausaha Sosial Indonesia didapatkan dari lembaga donor baik internasional maupun nasional dan dana CSR
                     dari Perusahaan.</p>

                     <!-- link -->
                  <a href="" class="stretched-link"></a>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
               <div class="card-impact card card-body rounded-4 h-100 p-3 text-center shadow-sm">
                  <img src="{{ asset('assets/home/img/homepage/img-card-dampak-2.png') }}" alt="" class="img-fluid mb-4">
                  <h4 class="head-4 fw-600 text-green-2 mb-2">Melakukan Publikasi & Buku</h4>
                  <p class="body-2 fw-400">Publikasi berupa buku dengan bertemakan beberapa topik Kewirausahaan Sosial yang beragam diterbitkan sebagai pedoman bagi pelaku wirausaha
                     sosial dan akademi yang tertarik untuk mempelajari isu-isu yang berkaitan dengan tema kewirausahaan sosial.</p>

                     <!-- link -->
                  <a href="" class="stretched-link"></a>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
               <div class="card-impact card card-body rounded-4 h-100 p-3 text-center shadow-sm">
                  <img src="{{ asset('assets/home/img/homepage/img-card-dampak-3.png') }}" alt="" class="img-fluid mb-4">
                  <h4 class="head-4 fw-600 text-green-2 mb-2">Pelatihan Kewirausahaan Sosial dan Webinar</h4>
                  <p class="body-2 fw-400">Pelatihan kewirausahaan sosial dilakukan Yayasan Wirausaha Sosial Indonesia bagi masyarakat yaitu pelaku wirausaha, pemerintah maupun
                     lembaga yang tertarik untuk memperoleh ilmu kewirausahaan sosial dan dapat mengaplikasikan pada level praktis.</p>

                     <!-- link -->
                  <a href="" class="stretched-link"></a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="about">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-6 order-lg-0 order-1">
               <h1 class="head-1 text-light fw-600 mb-4">Tentang Yayasan Wirausaha Sosial Indonesia</h1>
               <p class="body-2 fw-400 text-light mb-4">Yayasan Wirausaha Sosial Indonesia (YWSI) adalah lembaga pemberdayaan masyarakat di Indonesia yang bergerak di bidang
                  pengembangan kewirausahaan sosial dan pengurangan kemiskinan serta penanganan permasalahan sosial lainnya dengan mendorong aspek kewirausahaan.</p>

               <p class="body-2 fw-400 text-light mb-4">Yayasan Wirausaha Sosial Indonesia merupakan lembaga non-profit yang bergerak pada isu yang beragam seperti budaya, perubahan
                  iklim, budaya, disabilitas, pemberdayaan perempuan, pertanian, perkebunan serta aspek lain yang berkaitan dengan peningkatan penghidupan masyarakat. Pendekatan yang
                  dilakukan Yayasan Wirausaha Sosial Indonesia dengan menggunakan kewirausahaan sosial serta penguatan kelembagaan dalam menangani berbagai permasalahan sosial yang
                  ada.</p>

               <a href="" class="btn btn-light text-green-2 fw-600 px-3">Baca Selengkapnya</a>
            </div>
            <div class="col-lg-6 mb-lg-0 order-0 order-lg-1 mb-4">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/about/img-section-1.png') }}" alt="Gambar orang di sawah" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="empowerment-homepage">
      <div class="bg-empowerment">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="rounded-3 overflow-hidden">
                     <img src="{{ asset('assets/home/img/about/img-section-2.png') }}" alt="Gambar masyarakat" class="img-fluid">
                  </div>
               </div>
               <div class="col-lg-6">
                  <h2 class="head-2 text-black-1 fw-600 mb-4">Pendekatan Pemberdayaan Masyarakat yang Digunakan</h2>
                  <ul class="list-check">
                     <li class="body-1 fw-400 text-black-2 mb-3">Pendekatan Sistem Pasar</li>
                     <li class="body-1 fw-400 text-black-2 mb-3">Theory of Change</li>
                     <li class="body-1 fw-400 text-black-2 mb-3">Andragogi (Pembelajaran Orang Dewasa)</li>
                     <li class="body-1 fw-400 text-black-2 mb-3">Pembangunan model bisnis dalam pemberdayaan masyarakat desa</li>
                  </ul>

                  <a href="" class="btn btn-green-2 head-6 fw-600 mt-2 rounded-3">Cek Selengkapnya</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="portfolio" class="bg-f7">
      <div class="container py-5">
         <div class="row justify-content-between align-items-center mb-4">
            <h2 class="head-2 fw-600 text-black-1 mb-2">Dampak Kami</h2>

            <div class="col-lg-10">
               <p class="pa-2 text-black-2 fw-400 mb-4">Kami berusaha untuk memberikan manfaat dan melakukan pemberdayaan masryarakat untuk menyelesaiakan permasalahan sosial
                  Indonesia</p>
            </div>
            <div class="col-lg-2 mb-lg-0 mb-2 text-end">
               <a href="" class="text-green-2 head-6 fw-600 text-decoration-none">Lihat Semua <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>

            <div class="col-lg-6 mb-lg-0 mb-4">
               <x-card-portfolio img="{{ asset('assets/home/img/portfolio/project/project-1.png') }}" alt="Assessment Rantai Nilai" title="Assessment Rantai Nilai"
                  body="Assessment Rantai Nilai dalam Pengembangan Upanat untuk mendukung konservasi situs cagar budaya Borobudur dengan melibatkan 20 Desa di sekitar candi dengan pelibatan masyarakat melalui pola pemberdayaan masyarakat"
                  link="{{ route('detail.portfolio.assessment') }}" />
            </div>
            <div class="col-lg-6">
               <x-card-portfolio img="{{ asset('assets/home/img/portfolio/project/project-2.png') }}" alt="Pemberdayaan BUM Desa" title="Pemberdayaan BUM Desa" body=""
                  link="{{ route('detail.portfolio.bumdes') }}" />
            </div>

         </div>
   </section>

   <section id="news">
      <div class="container py-5">
         <div class="row">
            <h2 class="head-2 fw-600 text-black-1 mb-4 text-center">Berita dan Publikasi</h2>
            <div class="col-lg-4 mb-4">
               <div class="card card-body rounded-4 h-100">
                  <div class="overflow-hidden rounded-4 mb-3">
                     <img src="{{ asset('assets/home/img/homepage/img-news-1.png') }}" alt="Gambar berita satu" class="img-fluid w-100">
                  </div>
                  <h5 class="head-5 fw-600 text-black-1 mb-3">Apa Itu Eisenhower Matrix Dan Memahami Kegunaannya</h5>
                  
                  <div class="card-footer bg-transparent p-0 border-0">
                     <p class="body-1 fw-400 text-green-2">24 Oktober 2021</p>
                  </div>

                  <!-- link -->
                  <a href="" class="stretched-link"></a>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
               <div class="card card-body rounded-4 h-100">
                  <div class="overflow-hidden rounded-4 mb-3">
                     <img src="{{ asset('assets/home/img/homepage/img-news-1.png') }}" alt="Gambar berita satu" class="img-fluid w-100">
                  </div>
                  <h5 class="head-5 fw-600 text-black-1 mb-3">Apa Itu Eisenhower Matrix Dan Memahami Kegunaannya</h5>
                  
                  <div class="card-footer bg-transparent p-0 border-0">
                     <p class="body-1 fw-400 text-green-2">24 Oktober 2021</p>
                  </div>

                  <!-- link -->
                  <a href="" class="stretched-link"></a>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
               <div class="card card-body rounded-4 h-100">
                  <div class="overflow-hidden rounded-4 mb-3">
                     <img src="{{ asset('assets/home/img/homepage/img-news-1.png') }}" alt="Gambar berita satu" class="img-fluid w-100">
                  </div>
                  <h5 class="head-5 fw-600 text-black-1 mb-3">Apa Itu Eisenhower Matrix Dan Memahami Kegunaannya</h5>
                  
                  <div class="card-footer bg-transparent p-0 border-0">
                     <p class="body-1 fw-400 text-green-2">24 Oktober 2021</p>
                  </div>

                  <!-- link -->
                  <a href="" class="stretched-link"></a>
               </div>
            </div>
         </div>

         <div class="d-flex justify-content-center mt-3">
            <a href="" class="btn rounded-5 head-6 fw-600 text-green-2 px-3 py-2" style="background-color: rgba(78, 168, 36, 0.2);">Lihat Lebih Banyak</a>
         </div>
      </div>
   </section>

   <x-banner-footer/>
@endsection
