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
   <section id="banner-assessment" class="py-5">
      <div class="container py-5">
         <div class="row py-5">
            <div class="col-md-10 col-lg-7">
               <h4 class="head-4 fw-600 text-green-1 mb-3">Overview Project</h4>
               <h3 class="head-3 fw-600 text-light mb-4">Assessment Rantai Nilai dalam Pengembangan Upanat untuk mendukung konservasi situs cagar budaya Borobudur dengan melibatkan 20
                  Desa di sekitar candi dengan pelibatan masyarakat melalui pola pemberdayaan masyarakat</h3>
            </div>
         </div>
      </div>
   </section>

   <section id="info">
      <div class="container py-4">
         <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-3">
               <h6 class="head-6 fw-600 text-green-2 mb-3">Donor</h6>
               <p class="pa-2 fw-400 text-black-2">Kemendikbudristek</p>
            </div>
            <div class="col-lg-6 px-lg-5 mb-lg-0 mb-3">
               <h6 class="head-6 fw-600 text-green-2 mb-3">Lokasi</h6>
               <p class="pa-2 fw-400 text-black-2">Jl. Daranindra No.1, Borobudur, Magelang, Jawa Tengah 56553, Indonesia.</p>
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
                           <img src="{{ asset('assets/home/img/portfolio/project/slider-assessment.png') }}" alt="Gambar sandal" class="img-fluid">
                        </div>
                     </div>
                     <div class="swiper-slide rounded-3 overflow-hidden">
                        <div class="rounded-3 overflow-hidden">
                           <img src="{{ asset('assets/home/img/portfolio/project/slider-assessment.png') }}" alt="Gambar sandal" class="img-fluid">
                        </div>
                     </div>
                     <div class="swiper-slide rounded-3 overflow-hidden">
                        <div class="rounded-3 overflow-hidden">
                           <img src="{{ asset('assets/home/img/portfolio/project/slider-assessment.png') }}" alt="Gambar sandal" class="img-fluid">
                        </div>
                     </div>
                  </div>

                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"><i class="fa-regular fa-circle-left fa-2x"></i></div>
                  <div class="swiper-button-next"><i class="fa-regular fa-circle-right fa-2x"></i></div>
               </div>

               <article class="mt-4">
                  <p class="pa-3 fw-400 text-black-2 mb-3">Upanat adalah sandal yang dipakai oleh masyarakat di Jawa pada masa ketika Candi Borobudur didirikan. Upanat merupakan
                     desain sandal yang khusus yang sedang dikembangkan untuk menjadi sandal yang harus dipakai oleh pengunjung Candi Borobudur. Penggunaan upanat ini didorong sebagai
                     satu upaya untuk melindungi batu tangga Candi Borobudur dari keausan. Hal ini dilakukan karena keausan dapat disebabkan oleh kunjungan wisatawan yang setiap hari
                     menaiki struktur Candi Borobudur tersebut. Pemilihan kata “upanat” yang memiliki arti “alas kaki” adalah aktualisasi dari Relief Karmawibhangga Panel nomor 150
                     dari Candi Borobudur. Sandal Upanat ini dibuat dari bahan alami yaitu anyaman daun pandan atau eceng gondok yang didesain sederhana sesuai dengan penampilan
                     sandal kuno di jaman dahulu.</p>

                  <p class="pa-3 fw-400 text-black-2 mb-3">Balai Konservasi Borobudur sebagai Unit Pelaksana Teknis di bawah Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi
                     (Kemendikbudristek) sudah melakukan beberapa kajian khusus dan uji coba terhadap penggunaan Upanat di Candi Borobudur. Salah satu penelitian yang dilakukan oleh
                     Balai Konservasi Borobudur adalah kajian dalam rangka mendapatkan prototipe sandal khusus yang memenuhi kriteria durability (daya tahan), ergonomi (kenyamanan)
                     dan Keselerasan Visual (DEKS). Pengembangan upanat dimana diharapkan bisa meningkatkan partisipasi masyarakat lokal di seputar Candi Borobudur dengan pelibatan
                     masyarakat. Kajian tersebut termasuk menelaah lebih lanjut berdasarkan referensi dari cerita dalam relief Karmawibhangga Panel 150 di Candi Borobudur. Dalam panel
                     tersebut dimana digambarkan bahwa di jaman dahulu dalam sebuah upacara keagamaan ada persembahan berupa alas kaki kepada pemimpin upacara keagamaan yang diberikan
                     oleh rakyat dan dalam studi lebih lanjut mengenai bentuk dan model alas kaki yang banyak dipakai di abad tersebut. Dalam kajian yang telah dilakukan Balai
                     Konservasi Borobudur, bentuk alas kaki yang terilustrasikan dalam relief tersebut terkonfirmasi sebagai model yang lazim digunakan. Terkait hal tersebut maka
                     model sandal Upanat dikembangkan berdasarkan model dalam relief tersebut.</p>

                  <p class="pa-3 fw-400 text-black-2 mb-3">Salah satu yang mendasari pentingnya penggunaan Upanat untuk pelestarian Cagar Budaya Warisan Dunia Borobudur adalah adanya
                     Kajian World Heritage Capacity Borobudur yang sudah diselenggarakan sebelumnya. Kajian tersebut yang menyebutkan bahwa kapasitas maksimal Borobudur dalam menerima
                     wisatawan adalah 1.259 orang per hari. Dalam setahun diperkirakan bahwa struktur Candi Borobudur hanya mampu menerima kunjungan sejumlah 453.240 wisatawan untuk
                     menjaga struktur batu candi dari kemungkinan risiko keausan batu yang diakibatkan oleh gesekan antara alas kaki wisatawan dengan batu struktur tangga Candi
                     Borobudur. Dengan demikian apabila jika Upanat akan diwajibkan untuk digunakan oleh wisatawan dalam memasuki struktur Candi Borobudur, maka diperlukan kajian yang
                     bisa menunjukkan (1) sebesar apakah kapasitas masyarakat lokal dan pelaku pasar lokal dalam memberikan dukungan pasokan material mentah serta (2) sebesar apa
                     kapasitas volume produksi sandal Upanat per bulannya yang dapat disediakan oleh UMKM lokal khususnya di 20 desa yang ada di Kecamatan Borobudur serta lebih
                     umumnya di desa-desa atau daerah lain di Kawasan Candi Borobudur utamanya desa yang masuk dalam kategori tertinggal, serta (3) strategi yang diperlukan dalam
                     produksi upanat dengan pelibatan masyarakat lokal. Oleh sebab itu, penelitian ilmiah untuk memastikan bahwa Sandal Upanat ini bisa diproduksi secara lokal dan
                     digunakan oleh Balai Konservasi Borobudur dan Pengelola Taman Wisata Candi Borobudur ke depan menjadi sebuah kebutuhan penting yang perlu didapatkan pada saat
                     ini.</p>
               </article>

               <div id="purpose" class="mt-5">
                  <div class="bg-purpose">
                     <h2 class="head-2 fw-600 text-green-1 mb-3">Tujuan Penelitian</h2>
                     <ul class="list-check">
                        <li class="body-1 fw-400 text-light mb-3">Mengetahui kapasitas riil produksi Sandal Upanat oleh UMKM Lokal maupun BumDes di 20 Desa di Kecamatan Borobudur
                           untuk menuju target produksi sandal Upanat sebanyak 453.240-unit sandal per tahunnya</li>
                        <li class="body-1 fw-400 text-light mb-3">Mendapatkan pemetaan rantai nilai dari hulu sampai dengan hilir mengenai produsen dan pelaku pasar pemasok bahan
                           mentah yang akan digunakan dalam produksi Sandal Upanat dalam jumlah besar, serta pelaku produksi sandal upanat, dan pelaku-pelaku pariwisata yang bisa
                           menjadi sasaran/target pemasaran Upanat selain dari Taman Wisata Candi. </li>
                        <li class="body-1 fw-400 text-light mb-3">Memberikan rekomendasi konkrit kepada Balai Konservasi Borobudur mengenai upaya dan strategi yang bisa dilakukan
                           dalam rangka mendorong produksi Sandal Upanat di 20 desa di Kecamatan Borobudur</li>
                     </ul>
                  </div>
               </div>

            </div>
            <div class="col-lg-4 order-0 order-lg-1 mb-lg-0 mb-4">
               <div class="position-sticky" style="top: 85px">
                  <div class="card card-body rounded-4 p-4 shadow">
                     <a href="#project" class="text-decoration-none fw-500 text-black-1 mb-3" style="font-size: 18px">Project Background</a>
                     <a href="#purpose" class="text-decoration-none fw-500 text-black-1 mb-3" style="font-size: 18px">Tujuan Penelitian</a>
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
