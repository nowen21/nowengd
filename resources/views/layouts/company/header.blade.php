 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

         <h1 class="logo me-auto">
             <a href="{{ url('/') }}">
                 {{ config('app.name', 'NowenSoft DMS') }}
             </a>
         </h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 @guest
                 @if (Route::has('login'))
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 @endif

                 @if (Route::has('register'))
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
                 @endif
                 @else


                 <li class="nav-item"><a href="index.html" class="active">Home</a></li>
                 <li class="nav-item"><a href="index.html">Ayuda</a></li>
                 <li class="nav-item"><a href="index.html">Infromaci&oacute;n</a></li>
                 <li class="nav-item"><a href="index.html">Cr&eacute;ditos</a></li>
                 <li class="nav-item"><a href="index.html">Reportes</a></li>

                 <li class="dropdown "><a href="#"><span>Carpetas</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="about.html">About Us</a></li>
                         <li><a href="team.html">Team</a></li>
                         <li><a href="testimonials.html">Testimonials</a></li>
                         
                     </ul>
                 </li>

                 <li class="dropdown "><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li>
                             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>

                         </li>


                     </ul>
                 </li>

                 @endguest
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->


         <div class="header-social-links d-flex">
             <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
             <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
             <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
         </div>

     </div>
 </header><!-- End Header -->