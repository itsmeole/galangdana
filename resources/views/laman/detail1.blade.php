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
                        <h2>{{$lowongan->posisi}}</h2>
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
                            {{-- <div class="company-img company-img-details">
                                <a href="#"><img src="{{ asset('storage') }}/assets/img/icon/job-list1.png" alt=""></a>
                            </div> --}}
                            @foreach ($lowongans as $lowongan)
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$lowongan->nama_perusahaan}}</h4>
                                </a>
                                <ul>
                                    <li>{{$lowongan->posisi}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$lowongan->lokasi}}</li>
                                    <li>{{$lowongan->gaji}}</li>
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
                            <p>{{$lowongan->job_deskripsi}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Tanggung Jawab</h4>
                            </div>
                           <ul>
                               <li>{{$lowongan->tanggung_jawab}}</li>
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Kualifikasi</h4>
                            </div>
                           <ul>
                               <li>{{$lowongan->kualifikasi}}</li>
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
                          <li>Lokasi : <span>{{$lowongan->lokasi}}</span></li>
                          <li>Dibutuhkan : <span>{{$lowongan->dibutuhkan}}</span></li>
                          <li>Waktu Kerja : <span>waktu_kerja</span></li>
                          <li>Pendapatan :  <span>Rp.{{$lowongan->gaji}}</span></li>
                          <li>Dibuka : <span>{{$lowongan->dibuka}}</span></li>
                          <li>Ditutup : <span>{{$lowongan->ditutup}}</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="mailto:{{$lowongan->email}}" class="btn">lamar sekarang</a>
                     </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Informasi Perusahaan</h4>
                       </div>
                          <span>{{$lowongan->nama_perusahaan}}</span>
                          <p>{{$lowongan->info_perusahaan}}</p>
                        <ul>
                            <li>Name: <span>{{$lowongan->nama_perusahaan}}</span></li>
                            <li>Web : <span>{{$lowongan->web}}</span></li>
                            <li>Email: <span>{{$lowongan->email}}</span></li>
                        </ul>
                   </div>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>
@endsection
@push('js')

@endpush
