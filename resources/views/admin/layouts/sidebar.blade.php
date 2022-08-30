<ul class="navbar-nav bg-green-1 sidebar sidebar-dark accordion" id="sidebar-ywsi">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-text mx-3"><img src="{{ asset('storage/img/logo-white.svg') }}" alt="" class="img-fluid"></div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('dashboard') }}">
         <i class="fa-solid fa-gauge-high"></i>
         <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
      Portfolio
   </div>

   <!-- Nav Item - Portfolio Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePortfolio" aria-expanded="true" aria-controls="collapsePortfolio">
         <i class="fa-regular fa-newspaper"></i>
         <span>Manage Portfolio</span>
      </a>
      <div id="collapsePortfolio" class="collapse show" aria-labelledby="headingTwo" data-parent="#sidebar-ywsi">
         <div class="collapse-inner rounded bg-white py-2">
            <h6 class="collapse-header">Menu Portfolio : </h6>
            <a class="collapse-item" href="">List Portfolio</a>
            <a class="collapse-item" href="">Kategori Portfolio</a>
            <a class="collapse-item" href="">Image Portfolio</a>
            <a class="collapse-item" href="">Tujuan Penelitian</a>
            <a class="collapse-item" href="">Link Share</a>
         </div>
      </div>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="d-none d-md-inline text-center">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
