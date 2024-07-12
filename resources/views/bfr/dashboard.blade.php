<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Disnaker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/price_rangs.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/slick.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
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
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="login.html">Cari lowongan kerja</a></li>
                                            <li><a href="#">Tentang</a></li>
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
                                {{-- <div class="header-btn d-none f-right d-lg-block">
                                    <a href="#" class="btn head-btn1">Daftar</a>
                                    <a href="#" class="btn head-btn2">Masuk</a>
                                </div> --}}
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
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('storage') }}/assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Temukan pekerjaan menarik</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Jenis pekrjaan">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Karawang</option>
                                                <option value="">Cikarang</option>
                                                <option value="">Purwakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <a href="#">Cari Lowongan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>LOWONGAN PEKERJAAN UNGGULAN</span>
                            <h2>Jelajahi Kategori Teratas</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Desain dan Kreatif</a></h5>
                                <span>(653)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Desain & Development</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Sales & Marketing</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Mobile Application</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Konstruksi</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Teknologi Informasi</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Properti</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Penulis Konten</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.html" class="border-btn2">Cari Semua Sektor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
        <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="{{ asset('storage') }}/assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            {{-- <p class="pera1">FEATURED TOURS Packages</p> --}}
                            <p class="pera2">Buatlah Perbedaan dengan Resume Online Anda!</p>
                            <a href="#" class="border-btn2 border-btn4">Unggah CV Anda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>PEKERJAAN TERKINI</span>
                            <h2>Lowongan Kerja Unggulan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="{{ asset('storage') }}/assets/img/icon/job-list1.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Cikarang, Jawa Barat</li>
                                        <li>Rp.4.700.000 - Rp.5.100.000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="{{ asset('storage') }}/assets/img/icon/job-list2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Karawang, Jawa Barat</li>
                                        <li>Rp.4.500.000 - Rp.5.000.000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="{{ asset('storage') }}/assets/img/icon/job-list3.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Purwkarta,Jawa Barat</li>
                                        <li>Rp.4.100.000 - Rp.4.800.000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="{{ asset('storage') }}/assets/img/icon/job-list4.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Bogor, Jawa Barat</li>
                                        <li>Rp.4.500.000 - Rp.5.000.000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{ asset('storage') }}/assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <h4><span>PROSES PENERAPAN</span></h4>
                            <h2>Bagaimana Itu bekerja?</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Cari Pekerjaan</h5>
                               <p>Temukan Lowongan Pekerjaan yang relevan dan sesuai dengan minat dan keahlian anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Lamar pekerjaan</h5>
                               <p>klik lamar sekarang untuk daiarahkan ke proses yang lebih lanjut dari pihak perusahaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Dapatkan pekerjaan</h5>
                               <p>lanjutkan prosesmu bersama pihak perusahaan terkait untuk proses penerimaan.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="{{ asset('storage') }}/assets/img/testmonial/kepin.png" alt="">
                                            <span>Leonard Putra</span>
                                            <p>HRD Bangkit</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“Programnya cukup bagus, fleksibel dan juga bisa terjangkau oleh banyak orang, menurut saya program seperti ini bisa menjadi penolong bagi banyak orang”</p>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Testimonial -->
                             <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="{{ asset('storage') }}/assets/img/testmonial/mail.png" alt="">
                                            <span>Ismail Hasan</span>
                                            <p>Web Developer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“Menurut saya program ini memiliki banyak manfaat. Selain memudahkan kita untuk mencari lowongan kerja. Perusahaan juga lebih mudah menjangkau calon karyawan yang potensial. Dengan fitur pencarian yang sesuai dengan keahlian dan minat mereka dengan lebih cepat dan efisien.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="{{ asset('storage') }}/assets/img/testmonial/bayong.png" alt="">
                                            <span>Iksan Maulana Rayanza</span>
                                            <p>CEO Petamina</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“memudahkan akses informasi lowongan kerja dan memperluas kesempatan bagi para pencari kerja untuk mendapatkan pekerjaan sesuai dengan kualifikasi dan minat mereka”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="{{ asset('storage') }}/assets/img/testmonial/nasywa.png" alt="">
                                            <span>Nasywa Ardelia</span>
                                            <p>Ketua Kominfo</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“program pencarian kerja via website sangat membantu mempermudah pencari kerja menemukan peluang yang sesuai tanpa batasan geografis tradisional”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
         <!-- Support Company Start-->
        <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2" style="padding-right: 1.5em">
                                <span>Apa Yang kami lakukan?</span>
                                <h2 style="font-size: 2.7rem"><strong>20 ribu orang berbakat telah mendapatkan pekerjaan</strong></h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Dengan ribuan lowongan pekerjaan dari perusahaan terkemuka, fitur pencarian canggih, dan kemudahan melamar, kami membantu Anda meraih sukses profesional. Mulailah perjalanan karier Anda bersama Disnaker sekarang!</p>
                                <p>Temukan karier impian Anda dengan Disnaker! Dengan akses ke ribuan lowongan pekerjaan dari perusahaan terkemuka di berbagai industri. Kami memastikan Anda mendapatkan peluang terbaik yang sesuai dengan keahlian dan minat Anda. Dapatkan kemudahan dalam melamar pekerjaan, update terkini mengenai lowongan terbaru, dan saran karier yang berguna untuk membantu Anda mencapai sukses profesional.</p>
                                <a href="about.html" class="btn post-btn">Posting Lowongan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="{{ asset('storage') }}/assets/img/service/support-img.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Sejak</p>
                                <span>1947</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        <div class="home-blog-area blog-h-padding" style="padding-bottom: 3rem">
            <div class="container">
                <!-- Section Tittle -->
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our latest blog</span>
                            <h2>Our recent news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('storage') }}/assets/img/blog/home-blog1.jpg" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   Properties</p>
                                    <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('storage') }}/assets/img/blog/home-blog2.jpg" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   Properties</p>
                                    <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Blog Area End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>Tentang Kami</h4>
                                 <div class="footer-pera">
                                     <p>Disnaker berkomitmen meningkatkan kualitas dan kesejahteraan tenaga kerja. Kami berupaya menciptakan lapangan kerja yang lebih baik dan memperkuat daya saing tenaga kerja lokal.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    {{-- <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p> --}}
                                    </li>
                                    <li><a href="#">Telp : 021-5255733</a></li>
                                    <li><a href="#">Call Center : 1500630</a></li>
                                    <li><a href="#">Email : persuratan@kemnaker.go.id</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#">View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Komentar</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Kirimkan omentar kepada kami.</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="mailto:laeonardputra17@gmail.com"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="text" name="email" id="newsletter-form-email" placeholder="Komentar"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="{{ asset('storage') }}/assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="{{ asset('storage') }}/assets/img/logo/logob.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>2500+</span>
                        <p>Mendapatkan pekerjaan</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>700+</span>
                            <p>Lowongan Tersedia</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>200+</span>
                            <p>Pekerjaan Remote</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        {{-- <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div> --}}
        <!-- Footer End-->
    </footer>

  <!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('storage') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('storage') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('storage') }}/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('storage') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/slick.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/price_rangs.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('storage') }}/assets/js/wow.min.js"></script>
		<script src="{{ asset('storage') }}/assets/js/animated.headline.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('storage') }}/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.nice-select.min.js"></script>
		<script src="{{ asset('storage') }}/assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="{{ asset('storage') }}/assets/js/contact.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.form.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.validate.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/mail-script.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('storage') }}/assets/js/plugins.js"></script>
        <script src="{{ asset('storage') }}/assets/js/main.js"></script>

    </body>
</html>
