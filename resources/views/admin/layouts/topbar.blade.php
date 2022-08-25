<nav class="navbar navbar-expand navbar-light topbar static-top mb-4 bg-white shadow">

   <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
   </button>

   <h5 class="head-5 fw-500 text-gray-700">{{ $title }}</h5>

   <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-none d-lg-inline small mr-2 text-gray-600">{{ Auth::user()->name }}</span>
            <img class="img-profile rounded-circle" src="{{ asset('storage/img/user/avatar.svg') }}">
         </a>
         <div class="dropdown-menu dropdown-menu-right animated--grow-in shadow" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
               <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
               Profile
            </a>
            <a class="dropdown-item" href="#">
               <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
               Settings
            </a>
            <a class="dropdown-item" href="#">
               <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
               Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <form action="{{ route('logout') }}" method="post">
               @csrf
               <button type="submit" class="dropdown-item">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
               </button>
            </form>
         </div>
      </li>

   </ul>

</nav>
