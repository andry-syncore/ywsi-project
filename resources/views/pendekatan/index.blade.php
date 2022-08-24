@extends('layouts.main')
@section('content')
   <!-- banner -->
   <section id="banner-approach" class="py-5">
      <div class="container py-5">
         <div class="row py-5">
            <div class="col-md-10 col-lg-7">
               <h4 class="head-4 fw-600 text-green-1 mb-3">HOW TO HELP</h4>
               <h2 class="head-2 fw-600 text-light mb-3">Pendekatan Pemberdayaan Masyarakat yang Digunakan</h2>
               <p class="pa-3 fw-400 text-light">Pendekatan baru dan inovasi selalu dilakukan oleh Yayasan Wirausaha Sosial Indonesia. Beberapa diantara pendekatan yang telah
                  dikembangkan Yayasan Wirausaha Sosial Indonesia dan PT Syncore Indonesia</p>
            </div>
         </div>
      </div>
   </section>

   <section id="approach-content">
      <div class="position-relative container py-5">
         <div class="row align-items-center">
            <div class="col-lg-5 order-lg-0 order-1">
               <div class="left-card-detail rounded-3 overflow-hidden">
                  <div class="rounded-3 overflow-hidden">
                     <img src="{{ asset('assets/home/img/pendekatan/bg-card.png') }}" alt="" class="img-fluid w-100">
                  </div>
                  <div class="position-absolute start-0 top-0 p-5">
                     <h3 class="head-3 text-green-1 fw-600 mb-4">1. Pendekatan Sistem Pasar</h3>
                     <p class="pa-3 fw-400 text-light mb-4">Pendekatan sistem pasar merupakan pendekatan yang diadopsi dari pendekatan M4P (Making Market for the Poor). Pendekatan ini
                        diinisiasi pada tahun 2008 oleh Swiss Agency for Development and Cooperation (SDC) dan Departemen Pembangunan Internasional Inggris (DFID). Beberapa referensi
                        diambil dari pendekatan tersebut sebagai referensi dasar untuk pengembangan sistem pasar. Pendekatan terhadap sistem pasar diharapkan akan mampu memberikan
                        keuntungan ekonomi yang optimal terhadap petani.</p>
                     <a href="" class="head-6 text-light text-decoration-none fw-600 btn-read-more" data-index="1">Baca selengkapnya <i
                           class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 order-0 mb-lg-0 order-lg-0 mb-3">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/pendekatan/img-section-1.png') }}" alt="Gambar section satu" class="img-fluid">
               </div>
            </div>
         </div>
      </div>

      <div class="bg-f7">
         <div class="position-relative container py-5">
            <div class="row align-items-center">
               <div class="col-lg-7 mb-lg-0 mb-3">
                  <div class="rounded-3 overflow-hidden">
                     <img src="{{ asset('assets/home/img/pendekatan/img-section-2.png') }}" alt="Gambar section dua" class="img-fluid">
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="right-card-detail rounded-3 overflow-hidden">
                     <div class="rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/home/img/pendekatan/bg-card-1.png') }}" alt="" class="img-fluid w-100">
                     </div>
                     <div class="position-absolute start-0 top-0 p-5">
                        <h3 class="head-3 text-light fw-600 mb-4">2. Theory of Change</h3>
                        <p class="pa-3 fw-400 text-light mb-2">Teori perubahan (Teory of Change) dilakukan untuk:
                        <ul class="text-light mb-5">
                           <li>Sebagai kerangka kerja untuk mengukur pencapaian dan sesuai target yang ditetapkan</li>
                           <li>Sebagai dokumentasi lesson learnt yang didapat tentang apa yang terjadi secara aktual</li>
                           <li>Proses implementasi dan evaluasi yang transparan, sehingga semua pihak yang terlibat tahu apa yang terjadi dan penyebabnya</li>
                        </ul>
                        </p>
                        <a href="" class="head-6 text-light text-decoration-none fw-600 btn-read-more" data-index="2">Baca selengkapnya <i
                              class="fa-solid fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="position-relative container py-5">
         <div class="row align-items-center">
            <div class="col-lg-5 order-lg-0 order-1">
               <div class="left-card-detail rounded-3 overflow-hidden">
                  <div class="rounded-3 overflow-hidden">
                     <img src="{{ asset('assets/home/img/pendekatan/bg-card.png') }}" alt="" class="img-fluid w-100">
                  </div>
                  <div class="position-absolute start-0 top-0 p-5">
                     <h3 class="head-3 text-green-1 fw-600 mb-4">3. Andragogi (Pembelajaran Orang Dewasa)</h3>
                     <p class="pa-3 fw-400 text-light mb-4">Konsep Pembelajaran Orang Dewasa (Andragogi) merupakan metode pembelajaran bagi orang dewasa yang dikembangkan oleh
                        dikembangkan oleh Malcolm Knowles. Pendekatan humanistic yang dipengaruhi oleh Carl Rogers dalam tehnik fasilitasi dikembangkan lebih lanjut oleh ToT Sphere
                        dan diadopsi oleh Yayasan Wirausaha Sosial Indonesia.</p>
                     <a href="" class="head-6 text-light text-decoration-none fw-600 btn-read-more" data-index="3">Baca selengkapnya <i
                           class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 order-0 mb-lg-0 order-lg-0 mb-3">
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/pendekatan/img-section-3.png') }}" alt="Gambar section tiga" class="img-fluid">
               </div>
            </div>
         </div>
      </div>

      <div class="bg-f7">
         <div class="position-relative container py-5">
            <div class="row align-items-center">
               <div class="col-lg-7 mb-lg-0 mb-3">
                  <div class="rounded-3 overflow-hidden">
                     <img src="{{ asset('assets/home/img/pendekatan/img-section-4.png') }}" alt="Gambar section empat" class="img-fluid">
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="right-card-detail rounded-3 overflow-hidden">
                     <div class="rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/home/img/pendekatan/bg-card-1.png') }}" alt="" class="img-fluid w-100">
                     </div>
                     <div class="position-absolute start-0 top-0 p-5">
                        <h3 class="head-3 text-light fw-600 mb-4">4. Pembangunan model bisnis dalam pemberdayaan masyarakat desa</h3>
                        <p class="pa-3 fw-400 text-light mb-4">Model usaha dalam usaha pemberdayaan masyarakat dilakukan dengan menerapkan bentuk usaha yang telah menjadi kesepakatan
                           masyarakat desa. BUM Desa merupakan salah satu bentuk usaha dimana modal penyertaan dan kepemilikan dimiliki oleh masyarakat desa. BUM Desa merupakan Badan
                           Hukum yang didirikan oleh desa dan/atau bersama desa-desa guna mengelola usaha memanfaatkan asset, mengembangkan investasi dan produktivitas, menyediakan
                           jasa pelayanan, dan/atau jenis usaha lainnya untuk sebesar-besarnya kesejahteraan masyarakat Desa.</p>
                        <a href="" class="head-6 text-light text-decoration-none fw-600 btn-read-more" data-index="4">Baca selengkapnya <i
                              class="fa-solid fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />

   <x-modal-detail class="modal-dialog-scrollable" />

   <!-- custom js -->
   @push('js')
      <script>
         const modal = new bootstrap.Modal('#modal-detail')
         const btnDetail = document.querySelectorAll('.detail-bio')
         const modalBody = document.querySelector('.content-body')
         const btnReadMore = document.querySelectorAll('.btn-read-more')

         btnReadMore.forEach(btn => btn.addEventListener('click', function(e) {
            e.preventDefault()
            const i = this.dataset.index
            modal.show()
            modalBody.innerHTML = detailPendekatan(i)
         }))

         const detailPendekatan = (i) => {
            if (i == 1) {
               return `
               <div class="p-3">
                  <h2 class="head-2 fw-600 text-green-2 mb-4">1. Pendekatan Sistem Pasar</h2>
                  <p class="body-3 fw-400 mb-3">Pendekatan sistem pasar merupakan pendekatan yang diadopsi dari pendekatan M4P (Making Market for the Poor). Pendekatan ini diinisiasi pada tahun 2008 oleh
                  Swiss Agency for Development and Cooperation (SDC) dan Departemen Pembangunan Internasional Inggris (DFID). Beberapa referensi diambil dari pendekatan tersebut sebagai referensi
                  dasar untuk pengembangan sistem pasar. Pendekatan terhadap sistem pasar diharapkan akan mampu memberikan keuntungan ekonomi yang optimal terhadap petani.</p>

                  <p class="body-3 fw-400 mb-3">Pendekatan sistem pasar mempengaruhi secara sistemik terhadap pasar. Dengan pendekatan terhadap sistem pasar, masyarakat sebagai penerima manfaat akan lebih mampu dan berdaya
                  secara ekonomi. Dalam pendekatan sistem pasar, peningkatan pendapatan menjadi tolok ukur untuk mengukur peningkatan penghidupan masyarakat. Adanya peningkatan penghidupan atau
                  keuntungan secara ekonomi, keuntungan pada aspek lain dapat pula tercapai (semisal ekologi, kebutuhan masyarakat lainnya). Pendekatan pasar dilakukan dimulai dengan tahap
                  penelitian awal dan perencanaan untuk mengetahui permasalahan dan aspek pemberdayaan yang dilakukan.</p>

                  <p class="body-3 fw-400 mb-3">Aspek pemberdayaan dilakukan oleh Yayasan Wirausaha Sosial Indonesia dengan cara melibatkan masyarakat secara penuh dan inklusif dalam membangun model bisnis di tingkat
                  masyarakat. Pendampingan dan pembangunan model usaha dilakukan selain untuk menyediakan akses pemenuhan kebutuhan masyarakat dan sebagai upaya peningkatan kesejahteraan juga
                  merupakan pendekatan bagi tujuan tercapainya tahap keberlanjutan pada setiap proyek pemberdayaan masyarakat yang dilakukan.</p>

                  <p class="body-3 fw-400 mb-3">Pemberdayaan masyarakat yang dilakukan Yayasan Wirausaha Sosial Indonesia selalu memastikan masyarakat sebagai penerima manfaat akhir memperoleh akses pada jasa yang dibutuhkan,
                  semisal ilmu pengetahuan, dan kebutuhan yang diperlukan masyarakat sehingga bisa direplikasi dengan mudah untuk meningkatkan skala dampak program/proyek.</p>

                  <p class="body-3 fw-400 mb-3">Aspek keberlanjutan merupakan aspek penting dalam pendekatan yang dilakukan Yayasan Wirausaha Sosial Indonesia. Pengembangan sistem pasar dan penguatan kelembagaan melalui
                  pembangunan model usaha dilakukan dalam mencapai dampak yang berkelanjutan tersebut. Hal ini dilakukan Yayasan Wirausaha Sosial Indonesia untuk menjamin manfaat dapat diterima
                  oleh masyarakat secara berkelanjutan walaupun proyek pemberdayaan telah selesai secara rentang waktu dan ketersediaan dana.</p>

                  <p class="body-3 fw-400 mb-3">Pendampingan masyarakat dan pembangunan model bisnis dilakukan untuk mencapai usaha pemberdayaan masyarakat yang terbukti dalam metode, doable dalam implementasi dan sustainable
                  dalam aspek keberlanjutan. PT Syncore Indonesia telah memiliki riwayat. kesejarahan melakukan pendampingan model usaha yang telah teruji dan terbukti baik dalam metode penguatan
                  kelembagaan dalam pengembangan model bisnis BUM Desa dan BLUD. Pengalaman tersebut kemudian ditingkatkan oleh Yayasan Wirausaha Sosial Indonesia dalam perluasan cakupan isu
                  pemberdayaan yang dilakukan.
                  Pendekatan multistakeholder partnership dilakukan Yayasan Wirausaha Sosial Indonesia untuk mempertemukan berbagai aktor yang relevan dalam melakukan perubahan. Kemitraan
                  strategis dengan sektor swasta, pemerintah, masyarakat dan lembaga penelitian (Public Private People Partnership) dalam program Yayasan Wirausaha Sosial Indonesia dilakukan
                  dengan bekerja sama dengan masyarakat sebagai penerima manfaat untuk menjawab tantangan yang dihadapi serta memperoleh solusi yang tepat.</p>

                  <p class="body-3 fw-400 mb-3">Indikator kinerja program atau proyek dibangun untuk memastikan tercapainya output dan outcome sebagai tujuan pemberdayaan yang telah disepakati. Pendampingan yang intensif
                  dilakukan dalam pemenuhan indikator indikator tersebut. Dalam aplikasi usaha pemberdayaan, Yayasan Wirausaha Sosial Indonesia selalu mendorong diterapkannya model-model inovatif
                  dan penggunaan teknologi baru dalam aspek pemberdayaan bagi pembangunan sebagai bagian dari usaha pengurangan kemiskinan dan penanganan isu sosial lainnya.</p>
               </div>`
            }

            if (i == 2) {
               return `
               <div class="p-3">
                  <h2 class="head-2 fw-600 text-green-2 mb-4">2. Theory of Change</h2>
                  <p class="body-3 fw-400">Teori perubahan (Teory of Change) dilakukan untuk:</p>
                  <ul class="mb-3 body-3">
                     <li>Sebagai kerangka kerja untuk mengukur pencapaian dan sesuai target yang ditetapkan</li>
                     <li>Sebagai dokumentasi lesson learnt yang didapat tentang apa yang terjadi secara aktual</li>
                     <li>Proses implementasi dan evaluasi yang transparan, sehingga semua pihak yang terlibat tahu apa yang terjadi dan penyebabnya</li>
                  </ul>

                  <p class="body-3 fw-400 mb-3">Sebagai dasar untuk laporan kepada penyandang dana, pembuat kebijakan, dewan berusaha menemukan mengapa cara kerja tertentu dalam pemberdayaan akan efektif, serta menunjukkan bagaimana perubahan bisa terjadi dalam jangka pendek, menengah dan panjang untuk mencapai dampak yang diinginkan. Sebuah teori perubahan dapat dikembangkan di awal suatu program pemberdayaan dalam membantu perencanaan strategis, menggambarkan pekerjaan yang sudah ada agar dapat dievaluasi dengan mudah. Theory of change dibangun dengan pelibatan pemberi dana dan dilakukan secara inklusif dengan masyarakat. Pembangunan Theory of Change dilakukan dengan melibatkan tenaga ahli Yayasan, wali amanat, penerima manfaat, mitra, dan penyandang dana dalam mencapai tujuan pemberdayaan.</p>

                  <p class="body-3 fw-400">Theory of Change melakukan pemetaan melalui beberapa tahap yaitu:</p>
                  <ul class="mb-3 body-3 fw-400">
                     <li>Mengidentifikasi tujuan jangka panjang</li>
                     <li>Memetakan ke belakang dan menghubungkan prakondisi atau persyaratan yang diperlukan untuk mencapai tujuan tersebut dan menjelaskan mengapa prakondisi tersebut perlu dan cukup</li>
                     <li>Mengidentifikasi asumsi dasar mengenai konteksnya</li>
                     <li>Mengidentifikasi intervensi yang akan dilakukan untuk menciptakan perubahan yang diinginkan</li>
                     <li>Mengembangkan indikator untuk mengukur hasil pemberdayaan dalam menilai kinerja</li>
                  </ul>

                  <p class="body-3 fw-400 mb-3">Selama proses menciptakan jalur perubahan, peserta diminta untuk mengartikulasikan sebanyak mungkin asumsi yang berkaitan dengan proses perubahan. Asumsi tersebut kemudian diuji untuk menentukan apakah terdapat asumsi kunci yang sulit untuk didukung berdasarkan tiga jenis asumsi penting untuk dipertimbangkan yaitu pernyataan hubungan antara hasil jangka panjang, menengah dan awal dalam diagram, pembuktian untuk klaim bahwa semua prasyarat penting telah diidentifikasi; dan justifikasi yang mendukung hubungan antara kegiatan program dan hasil yang diharapkan akan dihasilkan. Asumsi keempat yang menguraikan faktor kontekstual atau lingkungan yang mendukung atau menghambat kemajuan menuju realisasi hasil dalam perubahan seringkali merupakan faktor penting tambahan dalam menggambarkan teori perubahan.</p>

                  <p class="body-3 fw-400 mb-3">Theory of Change menggambarkan dengan detail tentang sifat perubahan yang diinginkan, termasuk secara spesifik pada hal yang berkaitan dengan populasi target, jumlah perubahan yang perlu dilakukan bagi keberhasilan, dan jangka waktu di mana perubahan tersebut diharapkan terjadi. Detail yang ditemukan sangat membantu penyandang dana dan lembaga implementor dapat menilai kembali kelayakan dalam mencapai tujuan yang mungkin awalnya telah didefinisikan secara kurang jelas. Theory of Change berfokus pada mendorong pengembangan target hasil jangka panjang yang masuk akal yang dapat diterima oleh semua pihak.</p>
               </div>`
            }

            if (i == 3) {
               return `
               <div class="p-3">
                  <h2 class="head-2 fw-600 text-green-2 mb-4">3. Andragogi (Pembelajaran Orang Dewasa)</h2>
                  <p class="body-3 fw-400 mb-3">Konsep Pembelajaran Orang Dewasa (Andragogi) merupakan metode pembelajaran bagi orang dewasa yang dikembangkan oleh dikembangkan oleh Malcolm Knowles. Pendekatan humanistic yang dipengaruhi oleh Carl Rogers dalam tehnik fasilitasi dikembangkan lebih lanjut oleh ToT Sphere dan diadopsi oleh Yayasan Wirausaha Sosial Indonesia.</p>

                  <p class="body-3 fw-400 mb-3">Pendekatan Sphere menekankan sebuah proses untuk meningkatkan kualitas dan akuntabilitas aksi kemanusiaan serta proses dan komitmen untuk menegakkan prinsip-prinsip dan      nilai-nilai yang tercantum dalam Piagam Kemanusiaan dan Kode Etik dalam dunia humanitarian.</p>

                  <p class="body-3 fw-400 mb-3">Andragogi mengutamakan perhatian dengan pemberdayaan, pembelajaran informal dan penekanan pada tanggung jawab, serta pengarahan, menjadikannya kerangka kerja yang tepat untuk pembelajaran dalam dunia humanitarian yang dilakukan oleh Sphere. Pendekatan Andragogy yang dikembangkan mengutamakan pembelajaran perlunya orang dewasa untuk alasan belajar dan bagaimana mereka dapat belajar berdasarkan pengalaman, serta menemukan solusi pemecahan masalah.</p>
               </div>`
            }

            if (i == 4) {
               return `
               <div class="p-3">
                  <h2 class="head-2 fw-600 text-green-2 mb-4">4. Pembangunan model bisnis dalam pemberdayaan masyarakat desa</h2>
                  <p class="body-3 fw-400 mb-3">Model usaha dalam usaha pemberdayaan masyarakat dilakukan dengan menerapkan bentuk usaha yang telah menjadi kesepakatan masyarakat desa. BUM Desa merupakan salah satu bentuk usaha dimana modal penyertaan dan kepemilikan dimiliki oleh masyarakat desa. BUM Desa merupakan Badan Hukum yang didirikan oleh desa dan/atau bersama desa-desa guna mengelola usaha memanfaatkan asset, mengembangkan investasi dan produktivitas, menyediakan jasa pelayanan,	dan/atau jenis usaha lainnya untuk sebesar-besarnya kesejahteraan masyarakat Desa.</p>

                  <p class="body-3 fw-400">Pengalaman bumdes.id dalam pengembangan BUM Desa. Bumdes.id adalah program yang dijalankan oleh Syncore Indonesia untuk membantu menumbuhkan, menguatkan dan mengembangkan Bumdes di seluruh Indonesia. Misi bumdes.id meliputi:</p>
                  <ol class="mb-3 body-3 fw-400">
                     <li>Menumbuhkan jiwa wirausaha sosial</li>
                     <li>Menguatkan tata kelola dan manajemen</li>
                     <li>Mengembangkan usaha bumdes yang berkelanjutan</li>
                  </ol>

                  <p class="body-3 fw-400 mb-3">Pola Pemberdayaan model usaha BUM Desa di tingkat desa telah didokumentasikan secara lengkap dan distrukturkan sebagai pedoman dalam publikasi yang telah diterbitkan dengan judul Peta Jalan BUMDes. Publikasi dapat diakses dalam tautan berikut: <a href="https://bumdes.id" target="_blank">www.bumdes.id</a> Jaringan network bumdes.id pada saat ini telah memiliki anggota sebesar 1000+ BUM Desa yang telah bergabung.</p>

                  <p class="body-3 fw-400 mb-3">Metode yang digunakan tidak berhenti dengan beberapa metode yang telah dipaparkan, namun terus berkembang seiring dengan bertambahnya pemberdayaan yang dilakukan dan teknologi yang terus berkembang. Inovasi baru terus dilakukan Yayasan melalui pengembangan metode baru dan pendekatan untuk mencapai dampak sosial yang lebih besar kepada masyarakat.</p>
               </div>`
            }
         }
      </script>
   @endpush
@endsection
