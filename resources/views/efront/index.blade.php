@extends('layouts.panel')

@section('content')
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">SISTEM KUARANTIN KOLEJ AWANG HAD SALEH</span>
                        <h1 class="mb-3 mt-3">E - QUARANTINE</h1>

                        <p class="mb-4 pr-5">Kepada pelajar yang menghidapi penyakit covid - 19 perlu diasingkan . Jadi anda perlu menempah bilik untuk kuarantin .</p>
                        <div class="btn-container ">
                            <a href="{{ route('efront.apply') }}"  class="btn btn-main-2 btn-icon btn-round-full">APPLY NOW <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Hours Service</span>
                            <h4 class="mb-3">Online Appoinment</h4>
                            <p class="mb-4">SIla daftar secepat mungkin bagi mengelakkan penularan covid - 19 berlaku .</p>
                            <a href="{{ route('efront.apply') }}" class="btn btn-main btn-round-full">Make a appoinment</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Emegency Cases</span>
                            <h4 class="mb-3">+60 94922097</h4>
                            <p>Sila hubungi nombor ini jika terdapat kecemasan secepat mungkin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="title-color">Mencegah Covid - 19 </h2>
                </div>
                <div class="col-lg-8">
                    <p>Sistem E - Quarantine ini dibina atas tujuan mencegah penularan covid - 19 yang semakin menignkat di sekitar kawasan kolej ini . Ia adalah untuk memudahkan pelajar mendapat bilik kuarantin mereka tanpa perlu ada kontak secara bersemuka dengan pihak pengurusan kolej .</p>
                    <img src="images/about/sign.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>


    <section class="section service-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="https://media2.malaymail.com/resize_cache/uploads/articles/2022/2022-02/covid-19_self_test_kits_mz_2202_(2)-seo.JPG" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Covid test kit</h4>
                            <p class="mb-4">Test Kit disediakan khas untuk pelajar yang terkena jangkitan covid - 19 .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="https://demigos.com/media/cache/61/e8/61e8be99d482c40c4f294b577a7d2e92.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Health Checkup</h4>
                            <p class="mb-4">Pelajar yang berasa kondisi badan semakin teruk boleh bmembuat health checkup bersama pusat kesihatan kolej.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="https://cdn.remaja.my/2022/03/TOP-DIFFLAM.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Ubat Ubatan</h4>
                            <p class="mb-4">Ubat ubatan seperti batuk , sakit tekak  dan sebagainya diberi kepada pelajar yang sedang berkuarantin </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color"></h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="https://cf.shopee.com.my/file/801ef9709850fab59b95255d1fc33915" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2  title-color">Makanan Kering</h4>
                            <p class="mb-4">Makanan kering disediakan bagi mengelakkan pelajar yang kuarantin berasa lapar dan ingin turun ke bawah untuk membeli keperluan makanan</p>
                        </div>
                    </div>
                </div>

@endsection




