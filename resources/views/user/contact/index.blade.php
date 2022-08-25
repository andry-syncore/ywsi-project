@extends('user.layouts.main')
@section('content')
   <!-- banner -->
   <section id="banner-contact" class="py-5">
      <div class="container py-5">
         <div class="row pt-5">
            <div class="col-md-10 col-lg-6">
               <h1 class="head-1 text-light fw-600 mb-2">Kontak kami</h1>
               <p class="body-1 text-light fw-400">Hubungi kami untuk segala pertanyaan anda</p>
            </div>
         </div>
      </div>
   </section>

   <section id="contact-info">
      <div class="bg-f7">
         <div class="p-lg-5 container">
            <h3 class="head-3 fw-600 my-3 text-center">Kamu bisa kontak langsung kami melalui :</h3>
            <div class="row px-lg-5 mt-5">
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-4 card-contact" style="min-height: 250px; max-height: fit-content">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              <img src="{{ asset('storage/img/icon/phone.svg') }}" alt="" class="img-fluid" style="height: 50px">
                           </div>
                           <div class="col-10">
                              <h3 class="head-3 text-black-1 fw-600 mb-3">Telepon</h3>
                              <p class="pa-3 text-black-2 fw-400 mb-3">Bicara langsung dengan customer service di nomor berikut ini :</p>
                              <a href="tel:(0274)488599" class="d-block text-decoration-none text-black-2 fw-500 pa-3">
                                 <i class="fa-solid fa-phone me-1 text-green-1"></i> <span>(0274) 488-599 (Telepon)</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-4 card-contact" style="min-height: 250px; max-height: fit-content">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              <img src="{{ asset('storage/img/icon/mail.svg') }}" alt="" class="img-fluid" style="height: 50px">
                           </div>
                           <div class="col-10">
                              <h3 class="head-3 text-black-1 fw-600 mb-3">Email</h3>
                              <p class="pa-3 text-black-2 fw-400 mb-3">Kirim email ke :</p>
                              <a href="mailto:syncore.hendratmo@gmail.com" target="_blank"
                                 class="d-block text-decoration-none text-black-2 fw-500 pa-3">syncore.hendratmo@gmail.com</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-4 card-contact" style="min-height: 250px; max-height: fit-content">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              <img src="{{ asset('storage/img/icon/clock.svg') }}" alt="" class="img-fluid" style="height: 50px">
                           </div>
                           <div class="col-10">
                              <h3 class="head-3 text-black-1 fw-600 mb-3">Jam Operasional</h3>
                              <p class="pa-3 text-black-2 fw-500">Pada hari Senin - Jumat,</p>
                              <p class="pa-3 text-black-2 fw-500 mb-3">Pukul 09.00 - 17.00 WIB</p>
                              <p class="pa-3 text-black-2 fw-500">Pada hari Sabtu,</p>
                              <p class="pa-3 text-black-2 fw-500">Pukul 09.00 - 14.00 WIB</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="map">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-5 mb-3">
               <h3 class="head-3 fw-600 text-black-1 mb-3">Kantor Kami</h3>
               <div class="row">
                  <div class="col-2">
                     <img src="{{ asset('storage/img/icon/location-dot.svg') }}" alt="" class="img-fluid" style="height: 50px">
                  </div>
                  <div class="col-10">
                     <p class="pa-2 fw-400 text-black-2">Jl. Nogotirto No. 15B, Gamping, Sleman, Daerah Istimewa Yogyakarta 55282</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 mb-3">
               <div class="rounded-4 overflow-hidden">
                  <div id="location-map"></div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <x-banner-footer />

   @push('js')
      <script>
         var map = L.map('location-map').setView([-7.77595512138261, 110.33639518875079], 15);
         L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 20,
            attribution: '© OpenStreetMap'
         }).addTo(map);
         var marker = L.marker([-7.77595512138261, 110.33639518875079]).addTo(map);
      </script>
   @endpush
@endsection
