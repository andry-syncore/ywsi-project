@extends('user.layouts.main')
@section('content')
   <section id="banner-portfolio" class="py-5">
      <div class="container py-5">
         <div class="row py-5">
            <div class="col-md-10 col-lg-7">
               <h1 class="head-1 fw-600 text-light mb-3">Dampak yang Kami Ciptakan</h1>
               <p class="body-1 fw-400 text-light">Kami bantu masyarakat untuk menyelesaiakan permasalahan sosial, Hal ini yang mendorong kami untuk melakukan pemberdayaan masyarakat
                  untuk terus bekerja dan berinovasi demi memperluas manfaat masyarakat di Indonesia</p>
            </div>
         </div>
      </div>
   </section>

   <section id="portfolio">
      <div class="container py-5">
         <div class="row justify-content-between mb-4">
            <h2 class="head-2 fw-600 text-black-1 mb-2">Dampak Kami</h2>
            <p class="pa-2 text-black-2 fw-400 mb-4">UNESCO telah mengidentifikasi tantangan utama untuk pencapaian Tujuan Pembangunan Berkelanjutan dan peningkatan kondisi manusia.
            </p>

            <div class="col-lg-10">
               <a href="{{ request()->fullUrlWithQuery(['q' => 'semua']) }}"
                  class="btn {{ !request()->q || request()->q == 'semua' ? 'btn-green-2' : 'bg-grey-1 text-grey-2' }} rounded-4 fw-500 me-3 px-3">Semua</a>
               <a href="{{ request()->fullUrlWithQuery(['q' => 'pemberdayaan']) }}"
                  class="btn {{ request()->q == 'pemberdayaan' ? 'btn-green-2' : 'bg-grey-1 text-grey-2' }} me-3 rounded-4 fw-500 px-3">Pemberdayaan</a>
               <a href="{{ request()->fullUrlWithQuery(['q' => 'warisan-budaya']) }}"
                  class="btn {{ request()->q == 'warisan-budaya' ? 'btn-green-2' : 'bg-grey-1 text-grey-2' }} me-3 rounded-4 fw-500 px-3">Warisan Budaya</a>
               <a href="{{ request()->fullUrlWithQuery(['q' => 'agrikultur']) }}"
                  class="btn {{ request()->q == 'agrikultur' ? 'btn-green-2' : 'bg-grey-1 text-grey-2' }} me-3 rounded-4 fw-500 px-3">Agrikultur</a>
            </div>

            <div class="col-lg-2 text-end">
               <div class="dropdown">
                  <a href="#" class="btn dropdown-toggle rounded-4 fw-500 {{ request()->f ? 'btn-green-2' : 'bg-grey-1 text-grey-2' }} px-3" role="button"
                     data-bs-toggle="dropdown"><i class="fa-solid fa-arrow-down-wide-short me-2"></i> Filter</a>
                  <ul class="dropdown-menu border-dark small rounded-4">
                     <li><a class="dropdown-item {{ request()->f == 'satu' ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['f' => 'satu']) }}">Filter Satu</a></li>
                     <li><a class="dropdown-item {{ request()->f == 'dua' ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['f' => 'dua']) }}">Filter Dua</a></li>
                     <li><a class="dropdown-item {{ request()->f == 'tiga' ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['f' => 'tiga']) }}">Filter Tiga</a></li>

                     <!-- clear filter -->
                     <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item text-danger" href="{{ request()->fullUrlWithQuery(['f' => '']) }}">Hapus filter</a></li>
                  </ul>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6 mb-md-0 mb-4">
               <x-card-portfolio img="{{ asset('storage/img/portfolio/project/project-1.png') }}" alt="Assessment Rantai Nilai" title="Assessment Rantai Nilai"
                  body="Assessment Rantai Nilai dalam Pengembangan Upanat untuk mendukung konservasi situs cagar budaya Borobudur dengan melibatkan 20 Desa di sekitar candi dengan pelibatan masyarakat melalui pola pemberdayaan masyarakat"
                  link="{{ route('detail.portfolio.assessment') }}" />
            </div>
            <div class="col-md-6">
               <x-card-portfolio img="{{ asset('storage/img/portfolio/project/project-2.png') }}" alt="Pemberdayaan BUM Desa" title="Pemberdayaan BUM Desa" body=""
                  link="{{ route('detail.portfolio.bumdes') }}" />
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5">
               <!-- INI PAGINATION -->
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />
@endsection
