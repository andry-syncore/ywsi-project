<nav class="navbar navbar-expand-lg sticky-top {{ Route::is('home') ? 'bg-transparent navbar-dark' : 'bg-white' }}" id="navbar">
   <div class="container">
      <a class="navbar-brand" href="#">
         <img src="{{ asset('storage/img/logo.svg') }}" alt="Logo YWSI">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ywsi" aria-controls="navbar-ywsi" aria-expanded="false"
         aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-ywsi">
         <div class="navbar-nav ms-auto">
            <a class="nav-link {{ Route::is('home') ? 'active' : '' }} mx-2" href="{{ route('home') }}">Beranda</a>
            <div class="nav-item dropdown">
               <a class="nav-link dropdown-toggle mx-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Program
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Pendampingan dalam Pemberdayaan Masyarakat</a>
                  <a class="dropdown-item" href="#">Pelatihan Kewirausahaan Sosial dan Webinar</a>
                  <a class="dropdown-item" href="#">Publikasi/Buku</a>
               </div>
            </div>
            <a class="nav-link mx-2" href="#">Dampak</a>
            <a class="nav-link {{ Route::is('about') ? 'active' : '' }} mx-2" href="{{ route('about') }}">Tentang Kami</a>
            <a class="nav-link mx-2" href="#">Berita & Publikasi</a>
            <a class="nav-link mx-2" href="#">Kontak Kami</a>

            <!-- Fungsi pencarian ajaib -->
            <form action="{{ route('logout') }}" method="post" class="mb-lg-0 mx-2 mb-3">
               @csrf
               <div class="input-group">
                  <span class="input-group-text bg-grey-3" style="border-radius: 20px 0 0 20px"><i class="fa-solid fa-magnifying-glass text-grey-2"></i></span>
                  <input type="text" class="form-control bg-grey-3" name="search" placeholder="Pencarian" value="{{ request()->search }}"
                     style="border-radius: 0 20px 20px 0; border-width: 1px 1px 1px 0">
               </div>
            </form>
         </div>
      </div>
   </div>
</nav>
