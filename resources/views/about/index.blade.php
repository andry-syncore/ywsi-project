@extends('layouts.main')
@section('content')
   <!-- banner -->
   <section id="banner-about" class="py-5">
      <div class="container py-5">
         <div class="row pb-5">
            <div class="col-md-10 col-lg-7">
               <h4 class="head-4 fw-600 text-green-1 mb-3">Tentang Kami</h4>
               <h1 class="head-1 text-light fw-600 mb-2">Perjalanan Yayasan Wirausaha Sosial Indonesia</h1>
               <h3 class="head-3 fw-600 text-light mb-4">memberikan dampak di Indonesia</h3>
               <a href="" target="_blank" class="btn bg-green-2 text-light rounded-4 px-3 py-2"><i class="fa-solid fa-circle-play me-2"></i> Lihat Video</a>
            </div>
         </div>
      </div>
   </section>

   <section id="about">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/about/img-section-1.png') }}" alt="Gambar orang di sawah" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-4">Tentang Yayasan Wirausaha Sosial Indonesia</h1>
               <p class="body-2 fw-400 text-light mb-4">Yayasan Wirausaha Sosial Indonesia (YWSI) adalah lembaga pemberdayaan masyarakat di Indonesia yang bergerak di bidang
                  pengembangan kewirausahaan sosial dan pengurangan kemiskinan serta penanganan permasalahan sosial lainnya dengan mendorong aspek kewirausahaan.</p>

               <p class="body-2 fw-400 text-light">Yayasan Wirausaha Sosial Indonesia merupakan lembaga non-profit yang bergerak pada isu yang beragam seperti budaya, perubahan iklim,
                  budaya, disabilitas, pemberdayaan perempuan, pertanian, perkebunan serta aspek lain yang berkaitan dengan peningkatan penghidupan masyarakat. Pendekatan yang
                  dilakukan Yayasan Wirausaha Sosial Indonesia dengan menggunakan kewirausahaan sosial serta penguatan kelembagaan dalam menangani berbagai permasalahan sosial yang
                  ada. </p>
            </div>
         </div>
      </div>
   </section>

   <section id="journey-about" class="bg-f5 py-4">
      <div class="container py-5">
         <h1 class="head-1 fw-600 text-black-1 mb-5 text-center">Perjalanan Kami</h1>
         <div class="row">
            <div class="col-lg-6 mb-4">
               <div class="card card-body rounded-4 h-100 p-4">
                  <div class="row">
                     <div class="col-2">
                        <img src="{{ asset('assets/home/img/about/icon/info.svg') }}" alt="">
                     </div>
                     <div class="col-10">
                        <h3 class="head-3 text-black-1 fw-600 mb-3">Yayasan Wirausaha Sosial Indonesia didirikan pada tahun 2021</h3>
                        <p class="body-2 fw-400 text-black-2">sebagai salah satu afiliasi dari PT Syncore Indonesia. Yayasan Wirausaha Sosial Indonesia memiliki tujuan untuk
                           meningkatkan
                           kehidupan sosial masyarakat yang produktif, inklusif dan tangguh melalui usaha pemberdayaan di tingkat masyarakat. Pendekatan yang dilakukan bagi setiap isu
                           dilakukan dengan metode sistematis yang terstruktur dan terukur.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 mb-4">
               <div class="card card-body rounded-4 h-100 p-4">
                  <div class="row">
                     <div class="col-2">
                        <img src="{{ asset('assets/home/img/about/icon/pin.svg') }}" alt="">
                     </div>
                     <div class="col-10">
                        <h3 class="head-3 text-black-1 fw-600 mb-3">Mencakup jaringan BUM Desa sebanyak 1300 BUM Desa</h3>
                        <p class="body-2 fw-400 text-black-2">1300 BUM Desa yang tergabung dalam komunitas bumdes.id . Hingga saat ini jaringan Yayasan Wirausaha Sosial Indonesia
                           tengah bertumbuh menjadi jaringan NGO di Indonesia serta mulai memasuki jaringan perusahaan swasta di Indonesia.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 mb-4">
               <div class="card card-body rounded-4 h-100 p-4">
                  <div class="row">
                     <div class="col-2">
                        <img src="{{ asset('assets/home/img/about/icon/users.svg') }}" alt="">
                     </div>
                     <div class="col-10">
                        <h3 class="head-3 text-black-1 fw-600 mb-3">Dengan dukungan tim ahli yang telah dimiliki</h3>
                        <p class="body-2 fw-400 text-black-2">Yayasan Wirausaha Sosial Indonesia mengimplementasikan berbagai program pemberdayaan masyarakat. Pendekatan yang
                           dilakukan meliputi pengembangan ekonomi, peningkatan kewirausahaan, peningkatan mata pencaharian masyarakat, perbaikan rantai nilai, sampai dengan penguatan
                           kelembagaan di tingkat masyarakat, isu mengenai penyediaan akses pasar di level pemberdayaan dan lain sebagainya.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 mb-4">
               <div class="card card-body rounded-4 h-100 p-4">
                  <div class="row">
                     <div class="col-2">
                        <img src="{{ asset('assets/home/img/about/icon/clock-gear.svg') }}" alt="">
                     </div>
                     <div class="col-10">
                        <h3 class="head-3 text-black-1 fw-600 mb-3">Aspek pemberdayaan yang dilakukan dilandaskan pada temuan di lapangan.</h3>
                        <p class="body-2 fw-400 text-black-2">Penyusunan indikator dilakukan untuk tercapainya tujuan pemberdayaan. Pemberdayaan dan pendampingan dilakukan dengan
                           melibatkan berbagai elemen masyarakat yang inklusif termasuk didalamnya memastikan keterlibatan kelompok yang dianggap rentan.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="empowerment-about">
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
            </div>
         </div>
      </div>
   </section>

   <section class="bg-f5 overflow-hidden py-5" id="team-about">
      <div class="row align-items-center justify-content-between mb-5">
         <div class="col-lg-6">
            <div class="position-relative overflow-hidden" style="border-radius: 0 15px 15px 0;">
               <img src="{{ asset('assets/home/img/about/banner-2.svg') }}" alt="" class="img-fluid w-100">
               <h1 class="head-1 text-light fw-600">Siapa tim ahli di balik Yayasan Wirausaha Sosial Indonesia?</h1>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="rounded-3 overflow-hidden">
               <img src="{{ asset('assets/home/img/about/img-section-3.png') }}" alt="" class="img-fluid">
            </div>
         </div>
      </div>
      <div class="container py-4">
         <div class="row align-items-center">
            <div class="col-lg-8 mb-lg-0 mb-4">
               <div class="row text-lg-start text-center">
                  <div class="col-6 mb-5">
                     <div class="row align-items-center">
                        <div class="col-lg-4 mb-lg-0 mb-3">
                           <div class="rounded-3 overflow-hidden">
                              <img src="{{ asset('assets/home/img/about/team/img-rudy.png') }}" alt="Foto Rudy Suryanto, SE, PhD" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <h4 class="head-4 text-black-1 fw-600 mb-2">Rudy Suryanto, SE, PhD</h4>
                           <a href="" class="text-decoration-none head-5 detail-bio" data-user="rudy">Baca Bio</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-6 mb-5">
                     <div class="row align-items-center">
                        <div class="col-lg-4 mb-lg-0 mb-3">
                           <div class="rounded-3 overflow-hidden">
                              <img src="{{ asset('assets/home/img/about/team/img-hendratmo.png') }}" alt="Foto Hendratmo" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <h4 class="head-4 text-black-1 fw-600 mb-2">Hendratmo</h4>
                           <a href="" class="text-decoration-none head-5 detail-bio" data-user="hendratmo">Baca Bio</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="row align-items-center">
                        <div class="col-lg-4 mb-lg-0 mb-3">
                           <div class="rounded-3 overflow-hidden">
                              <img src="{{ asset('assets/home/img/about/team/img-arinto.png') }}" alt="Foto Arinto Nugroho" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <h4 class="head-4 text-black-1 fw-600 mb-2">Arinto Nugroho</h4>
                           <a href="" class="text-decoration-none head-5 detail-bio" data-user="arinto">Baca Bio</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="row align-items-center">
                        <div class="col-lg-4 mb-lg-0 mb-3">
                           <div class="rounded-3 overflow-hidden">
                              <img src="{{ asset('assets/home/img/about/team/img-khatami.png') }}" alt="Foto Khatami Angga Kusumah" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <h4 class="head-4 text-black-1 fw-600 mb-2">Khatami Angga Kusumah</h4>
                           <a href="" class="text-decoration-none head-5 detail-bio" data-user="khatami">Baca Bio</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="bg-banner-3 rounded-4 px-4 py-5">
                  <h4 class="head-4 text-light fw-600 mb-4">Tim expert Yayasan Wirausaha Sosial Indonesia</h4>
                  <p class="body-2 text-light fw-400">Tim expert Yayasan Wirausaha Sosial Indonesia meliputi anggota tim lain yang telah berpengalaman dalam pemberdayaan
                     masyarakat dan terlibat langsung dalam kegiatan yang pernah dilakukan. Yayasan Wirausaha Sosial Indonesia didukung pula oleh tim pendukung untuk administrasi
                     keuangan yang baik, tim media untuk mendukung publikasi kegiatan Yayasan Wirausaha Sosial, tim manajemen sumber daya manusia serta tim pendukung operasional
                     untuk menjamin keberlangsungan aktivitas Yayasan dengan baik.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />


   <!-- modal detail profile -->
   <x-modal-detail />

   <!-- script -->
   @push('js')
      <script type="text/javascript">
         const modal = new bootstrap.Modal('#modal-detail')
         const btnDetail = document.querySelectorAll('.detail-bio')
         const modalBody = document.querySelector('.content-body')
         btnDetail.forEach(detail => detail.addEventListener('click', function(e) {
            e.preventDefault()
            const user = this.dataset.user
            modal.show()
            modalBody.innerHTML = detailBio(user)
         }))

         const detailBio = (user) => {
            if (user == 'rudy') {
               return `<div class="row align-items-center">
                  <div class="col-2">
                     <div class="rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/home/img/about/team/img-rudy.png') }}" alt="Foto Rudy Suryanto, SE, PhD" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-10">
                     <h4 class="head-4 text-black-1 fw-600 mb-2">Rudy Suryanto, SE, PhD</h4>
                     <a href="https://id.linkedin.com/in/rudysyncore" class="body-2 text-grey-2 fw-400 text-decoration-none" target="_blank"><i
                           class="fa-brands fa-linkedin text-primary fa-xl me-1"></i> LinkedIn</a>
                  </div>
                  <div class="col-12">
                     <hr class="dash">
                     <p class="body-3 text-black-2 fw-400 mb-3">Rudy Suryanto merupakan founder dari Yayasan Wirausaha Sosial Indonesia.. Lulusan Fakultas Ekonomi Jurusan Akuntansi
                        tahun 1996 ini memulai karir sebagai Senior Auditor di Ernst&Young dan PWC. Di tahun 2005 Rudy bergabung dengan Universitas Muhammadiyah Yogyakarta sebagai
                        staff pengajar auditing, sistem informasi akuntansi dan manajemen strategis. Rudy Suryanto telah meraih gelar Master di ilmu Akuntansi dari University of
                        Melbourne dan gelar Doktor di Universiti Teknologi MARA di Selangor. Kiprah Rudy Suryanto di bidang pemberdayaan masyarakat terutama masyarakat desa dimulai
                        di tahun 2015 ketika Rudy Suryanto mendirikan Bumdes.id yaitu sebuah Community Based Management dan platform pengembangan BUMDes terbesar di Indonesia.</p>

                     <p class="body-3 text-black-2 fw-400">Sebagai sebuah jaringan BUM Desa, Rudy Suryanto dan tim bumdes.id telah melatih sebanyak 1000+ BUM Desa di seluruh Indonesia
                        dengan pelatihan sebanyak 2635 alumni. Beberapa publikasi telah diterbitkan, satu diantaranya adalah Peta Jalan BUMDES Sukses, yang merupakan satu diantara
                        publikasi lain yang tengah dikembangkan. Rudy Suryanto terus melakukan inovasi dan meningkatkan upaya terhadap berkembangnya BUM Desa dan banyak mewarnai
                        perkembangan BUM Desa di Indonesia. Keinginan kuat untuk meningkatkan kesejahteraan masyarakat membuat Rudy Suryanto untuk membuat platform yang sama bagi
                        Badan Layanan Umum di Indonesia berupa jaringan BLU.id. Sampai dengan saat ini Rudy Suryanto terus berkiprah dengan mengembangkan metode dan pendekatan
                        termasuk isu kewirausahaan sosial di dalamnya.</p>
                  </div>
               </div>`
            }

            if (user == 'hendratmo') {
               return `<div class="row align-items-center">
                  <div class="col-2">
                     <div class="rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/home/img/about/team/img-hendratmo.png') }}" alt="Foto Hendratmo (Mamok)" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-10">
                     <h4 class="head-4 text-black-1 fw-600 mb-2">Hendratmo (Mamok)</h4>
                     <a href="https://id.linkedin.com/in/hendratmo-mamok" class="body-2 text-grey-2 fw-400 text-decoration-none" target="_blank"><i
                           class="fa-brands fa-linkedin text-primary fa-xl me-1"></i> LinkedIn</a>
                  </div>
                  <div class="col-12">
                     <hr class="dash">
                     <p class="body-3 text-black-2 fw-400 mb-3">Hendratmo atau lebih akrab disapa Mamok adalah seorang profesional yang telah bekerja lebih dari 15 tahun di dunia pemberdayaan dan pembangunan ekonomi. Setelah lulus dari Fakultas Ekonomi Jurusan Manajemen UGM pada tahun 1993, karir Hendratmo di bidang pemberdayaan masyarakat di lembaga non profit internasional dimulai dari GIZ, Mercy Corps sebagai Intervention Manager, RedR Indonesia, Cordaid, dan World Agroforestry (ICRAF) sebagai Senior Researcher- Sustainable Commodities and Market Development pada kegiatan riset dan implementasi terhadap isu-isu pertanian dan perkebunan selama 5 tahun terakhir . Pendekatan Hendratmo terhadap pasar dan model bisnis telah di harus utamakan dalam berbagai proyek di Indonesia.</p>

                     <p class="body-3 text-black-2 fw-400">Selama perjalanan karir, Hendratmo memiliki keahlian di bidang pengembangan pasar, analisa dan perbaikan rantai nilai komoditas, kelayakan usaha, pembangunan model bisnis, pemberdayaan masyarakat di level komunitas, kewirausahaan dan project management pada isu isu pemberdayaan yang beragam. Keberlanjutan program merupakan kata kunci berbagai proyek pemberdayaan yang ditangani oleh Hendratmo. Pengalaman bekerja Hendratmo di berbagai lembaga pemberdayaan non profit internasional meliputi lingkup kerja dengan ruang lingkup berbagai wilayah di Indonesia. Saat ini, Hendratmo merupakan Direktur Eksektutif Yayasan Wirausaha Sosial.</p>
                  </div>
               </div>`
            }

            if (user == 'arinto') {
               return `<div class="row align-items-center">
                  <div class="col-2">
                     <div class="rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/home/img/about/team/img-arinto.png') }}" alt="Foto Arinto Nugroho" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-10">
                     <h4 class="head-4 text-black-1 fw-600 mb-2">Arinto Nugroho</h4>
                     <a href="https://id.linkedin.com/in/hendratmo-mamok" class="body-2 text-grey-2 fw-400 text-decoration-none" target="_blank"><i
                           class="fa-brands fa-linkedin text-primary fa-xl me-1"></i> LinkedIn</a>
                  </div>
                  <div class="col-12">
                     <hr class="dash">
                     <p class="body-3 text-black-2 fw-400 mb-3">Arinto memiliki pengalaman bekerja di berbagai NGO Internasional termasuk sebagai staff dua lembaga Perserikatan Bangsa Bangsa, beberapa diantaranya adalah MuslimAid, ASB, WFP, dan IOM. Sebelum bergabung dengan Yayasan, Arinto bekerja untuk International Organization for Migration (IOM) di Propinsi Papua selama 4 tahun sebagai tenaga ahli di bidang Community Engagement. Arinto berpengalaman dalam berbagai kegiatan fasilitasi, pengembangan kapasitas dan pelatihan, seperti halnya mobilisasi dan pemberdayaan masyarakat baik di tingkat nasional maupun sub-nasional. Kegiatan pendukung riset telah biasa dilakukan Arinto selama bekerja di lembaga SurveyMeter.</p>

                     <p class="body-3 text-black-2 fw-400">Arinto juga berpengalaman dalam mempersiapkan rencana kerja sekaligus menyusun strategi dan penerapan dalam kegiatan termasuk penyusunan database. Lulusan Fakultas Hukum Universitas Gadjah Mada Angkatan 1994 ini memiliki pengalaman bekerja di berbagai wilayah di Indonesia di berbagai lembaga yang pernah diikuti. Saat ini, Arinto duduk sebagai Koordinator Fasilitator di Yayasan Wirausaha Sosial Indonesia.</p>
                  </div>
               </div>`
            }

            if (user == 'khatami') {
               return `<div class="row align-items-center">
                  <div class="col-2">
                     <div class="rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/home/img/about/team/img-khatami.png') }}" alt="Foto Khatami Angga Kusumah" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-10">
                     <h4 class="head-4 text-black-1 fw-600 mb-2">Khatami Angga Kusumah</h4>
                     <a href="https://www.linkedin.com/in/khatami-angga-kusumah-6a99b7212/" class="body-2 text-grey-2 fw-400 text-decoration-none" target="_blank"><i
                           class="fa-brands fa-linkedin text-primary fa-xl me-1"></i> LinkedIn</a>
                  </div>
                  <div class="col-12">
                     <hr class="dash">
                     <p class="body-3 text-black-2 fw-400 mb-3">Khatami adalah konsultan pengembangan UMKM dan BUM Desa di Bumdes.id. Khatami memiliki keahlian dalam memberikan pelatihan, pendampingan dan kemitraan dalam pengembangan BUM Desa melalui program Bumdes.id. Keahlian penyandang gelar sarjana ekonomi di bidang akuntansi ini meliputi pembuatan pembukuan sederhana, optimalisasi Social Media, Sustainability Report dan Company Profile, penyusunan Perdes dan AD/ART BUM Desa, penyusunan Standar Operasional Prosedur, manajemen BUM Desa, pemetaan bentang potensi ekonomi wilayah dan  trainer dan Pendamping BUM Desa dan UMKM.</p>
                  </div>
               </div>`
            }
         }
      </script>
   @endpush
@endsection
