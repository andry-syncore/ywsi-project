@extends('auth.layouts.main')
@section('auth')
   <div class="container py-5">

      <div class="row justify-content-center py-5">

         <div class="col-md-8 col-lg-6">

            <div class="card o-hidden bg-f7 my-5 overflow-hidden border-0" style="border-radius: 20px">
               <div class="card-body p-0">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                     <path fill="#4EA824" fill-opacity="1"
                        d="M0,32L26.7,32C53.3,32,107,32,160,64C213.3,96,267,160,320,192C373.3,224,427,224,480,197.3C533.3,171,587,117,640,96C693.3,75,747,85,800,74.7C853.3,64,907,32,960,37.3C1013.3,43,1067,85,1120,106.7C1173.3,128,1227,128,1280,122.7C1333.3,117,1387,107,1413,101.3L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
                     </path>
                  </svg>

                  <div class="row">
                     <div class="col">
                        <div class="p-5">
                           <div class="text-center">
                              <img src="{{ asset('storage/img/logo.svg') }}" alt="" class="img-fluid">
                              <h2 class="head-2 text-green-1 fw-600 mb-4 mt-2">LOGIN</h2>

                              <!-- pesan error login -->
                              @if (session('error'))
                                 <x-alert type="danger">{{ session('error') }}</x-alert>
                              @endif

                           </div>
                           <form class="user" action="{{ route('login') }}" method="post">
                              @csrf
                              <div class="form-group">
                                 <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
                                    placeholder="Masukan email..." autofocus required>
                                 @error('email')
                                    <div class="px-2 invalid-feedback">{{ $message }}</div>
                                 @enderror
                              </div>
                              <div class="form-group mb-4">
                                 <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password"
                                    placeholder="Masukan password..." required>
                                 @error('password')
                                    <div class="px-2 invalid-feedback">{{ $message }}</div>
                                 @enderror
                              </div>
                              <div class="row justify-content-center">
                                 <div class="col-md-8 col-lg-6">
                                    <button type="submit" class="btn bg-green-2 fw-500 text-light btn-block rounded-pill shadow-sm" style="padding: 12px"><i
                                          class="fa-solid fa-arrow-right-to-bracket mr-1"></i> Masuk</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                     <path fill="#4EA824" fill-opacity="1"
                        d="M0,288L80,293.3C160,299,320,309,480,309.3C640,309,800,299,960,282.7C1120,267,1280,245,1360,234.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                     </path>
                  </svg>
               </div>
            </div>

         </div>

      </div>

   </div>
@endsection
