@extends('bfr.index2')
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
                                <h2>Temukan Lowongan</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->

                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                               @foreach ($items as $data)
                               <div class="single-job-items mb-30 m-auto">
                                <div class="job-items">
                                    {{-- <div class="company-img">
                                        <a href="#"><img src="{{ asset('storage') }}/assets/img/icon/job-list1.png" alt=""></a>
                                    </div> --}}
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>{{$data->posisi }}</h4>
                                        </a>
                                        <ul>
                                            <li>{{ $data->posisi }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>{{$data->lokasi }}</li>
                                            <li>Rp.{{$data->gaji }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">{{$data->waktu_kerja }}</a>
                                </div>
                            </div>
                               @endforeach
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
     
        <!--Pagination End  -->

    </main>
@endsection
@push('js')

@endpush
