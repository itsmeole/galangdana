@extends('bfr.index')
@push('css')

@endpush
@section('content')
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('storage') }}/assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>UI/UX Designer</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{ asset('storage') }}/assets/img/icon/job-list1.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>Digital Marketer</h4>
                                </a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Cikarang, Jawa Barat</li>
                                    <li>Rp.4.700.000 - Rp.5.100.000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Deskripsi Pekerjaan</h4>
                            </div>
                            <p>Digital Marketer bertanggung jawab untuk mengembangkan, mengimplementasikan, melacak, dan mengoptimalkan kampanye pemasaran digital di berbagai saluran online. Kandidat ideal harus memiliki pemahaman yang kuat tentang strategi pemasaran digital, keterampilan analitis, dan kemampuan untuk bekerja dalam tim.</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Tanggung Jawab</h4>
                            </div>
                           <ul>
                               <li>Merancang, membangun, dan memelihara kehadiran media sosial dan situs web.</li>
                               <li>Mengembangkan strategi konten untuk menarik dan melibatkan audiens target.</li>
                               <li>engelola kampanye iklan online melalui Google Ads, Facebook Ads, dan platform lainnya.</li>
                               <li>Mengoptimalkan konten dan struktur situs web untuk SEO.</li>
                               <li>Berkolaborasi dengan tim kreatif untuk membuat materi pemasaran digital.</li>
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Kualifikasi</h4>
                            </div>
                           <ul>
                               <li>Gelar Sarjana di bidang Pemasaran, Komunikasi, atau jurusan terkait.</li>
                               <li>Pengalaman minimal 2 tahun di bidang pemasaran digital.</li>
                               <li>Keterampilan analitis dan kemampuan untuk menafsirkan data kinerja.</li>
                               <li>Kemampuan komunikasi yang baik dan keterampilan interpersonal.</li>
                               <li>Kreatif dan inovatif dalam pendekatan pemasaran.</li>
                           </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Gambaran umum perusahaan</h4>
                       </div>
                      <ul>
                          <li>Lokasi : <span>Cikarang, Jawa Barat</span></li>
                          <li>Dibutuhkan : <span>3 Pria</span></li>
                          <li>Waktu Kerja : <span>Full time</span></li>
                          <li>Pendapatan :  <span>Rp.58.000.000/thn</span></li>
                          <li>Pendaftaran : <span>12-25 Sep 2024</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="login" : active="request()->routeIs('bfr.login')" class="btn">Apply Now</a>
                     </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Informasi Perusahaan</h4>
                       </div>
                          <span>Ziggo</span>
                          <p>Ziggo adalah penyedia layanan komunikasi dan hiburan terkemuka di Belanda, menawarkan televisi kabel, internet, dan telepon kepada pelanggan ritel dan bisnis. Dikenal karena jaringan kabel yang luas dan layanan berkualitas tinggi, Ziggo terus berinovasi untuk memenuhi kebutuhan pelanggan di era digital.</p>
                        <ul>
                            <li>Name: <span>Ziggo</span></li>
                            <li>Web : <span> Ziggo.com</span></li>
                            <li>Email: <span>Ziggo.creative@gmail.com</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>
@endsection
@push('js')

@endpush
