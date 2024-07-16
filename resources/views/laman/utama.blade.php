@extends('bfr.index')
@push('css')

@endpush
@section('content')
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
                                    <a href="dashboard" : active="request()->routeIs('aftr.list_job')">Cari Lowongan</a>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Desain dan Kreatif</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Desain & Development</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Sales & Marketing</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Mobile Application</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Konstruksi</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Teknologi Informasi</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Properti</a></h5>
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
                           <h5><a href="dashboard" : active="request()->routeIs('aftr.list_job')">Penulis Konten</a></h5>
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
                        <a href="dashboard" : active="request()->routeIs('aftr.list_job')" class="border-btn2">Cari Semua Sektor</a>
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
                        {{-- <a href="login" : active="request()->routeIs('bfr.login')" class="border-btn2 border-btn4">Unggah CV Anda</a> --}}
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
                        {{-- @auth
                            <li style="size: 2rem">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn head-btn2" type="submit">Logout</button>
                                </form>
                            </li>
                        @endauth --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    {{-- <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job" active="request()->routeIs('laman.detail1')"><img src="{{ asset('storage') }}/assets/img/icon/job-list1.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job" active="request()->routeIs('laman.detail1')"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Cikarang, Jawa Barat</li>
                                    <li>Rp.4.700.000 - Rp.5.100.000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job" active="request()->routeIs('laman.detail1')">Full Time</a>
                        </div>
                    </div>
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job" : active="request()->routeIs('bfr.login')"><img src="{{ asset('storage') }}/assets/img/icon/job-list2.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job" : active="request()->routeIs('bfr.login')"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Karawang, Jawa Barat</li>
                                    <li>Rp.4.500.000 - Rp.5.000.000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job" : active="request()->routeIs('bfr.login')">Full Time</a>
                        </div>
                    </div>
                     <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job" : active="request()->routeIs('bfr.login')"><img src="{{ asset('storage') }}/assets/img/icon/job-list3.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job" : active="request()->routeIs('bfr.login')"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Purwkarta,Jawa Barat</li>
                                    <li>Rp.4.100.000 - Rp.4.800.000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job" : active="request()->routeIs('bfr.login')">Full Time</a>
                        </div>
                    </div>
                     <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job" : active="request()->routeIs('bfr.login')"><img src="{{ asset('storage') }}/assets/img/icon/job-list4.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job" : active="request()->routeIs('bfr.login')"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Bogor, Jawa Barat</li>
                                    <li>Rp.4.500.000 - Rp.5.000.000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job" : active="request()->routeIs('bfr.login')">Full Time</a>
                        </div>
                    </div> --}}
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
@endsection
