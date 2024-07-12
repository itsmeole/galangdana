<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('storage') }}/assets/img/logo/disnaker.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                         <div class="logo" style="display:flex; align-items: center;">
                            <a href="index.html"><img style="width: 3rem; margin:0 0.5rem 0.2rem 0;" src="{{ asset('storage') }}/assets/img/logo/disnaker.png" alt=""></a>
                            <h2><strong>Disnaker</strong></h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="/" : active="request()->routeIs('laman.utama')">Dashboard</a></li>
                                        <li><a href="login" : active="request()->routeIs('laman.login')">Cari lowongan kerja</a></li>
                                        <li><a href="tentang" : active="request()->routeIs('laman.tentang')">Tentang</a></li>
                                        <li><a href="#">Hubungi</a>
                                            <ul class="submenu">
                                                <li> Telp : 021-5255733</li>
                                                <li>Call center : 1500630</li>
                                            </ul>
                                        </li>
                                        {{-- <li><a href="mailto:laeonardputra17@gmail.com">Call Center</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="daftar" : active="request()->routeIs('bfr.daftar')" class="btn head-btn1">Daftar</a>
                                <a href="login" : active="request()->routeIs('bfr.login')" class="btn head-btn2">Masuk</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>

