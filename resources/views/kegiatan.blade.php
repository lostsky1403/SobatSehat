@extends('layout.app')
@section('content')

    <!--  Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Kegiatan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--  End -->

    <!-- Halaman Kegiatan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Sobat</span> Sehat</h1>
                <p class="mb-5">Pastikan keluarga Anda memiliki informasi terkini tentang layanan pencegahan kami..</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <div class="mb-2">
                            <i class="fas fa-dumbbell fa-2x"></i>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Senam</a>
                        <h5 class="text-primary mb-3">Senam penting untuk menjaga kesehatan fisik dan mental anak-anak.</h5>
                        <a href="{{ url ('/form-jadwal') }}" class="btn btn-outline-primary px-3 text-black">Daftar Jadwal Kegiatan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <div class="mb-2">
                            <i class="fas fa-swimmer fa-2x"></i>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2"> Berenang</a>
                        <h5 class="text-primary mb-3">Berenang adalah olahraga yang sangat efektif untuk meningkatkan kebugaran anak-anak.
                            Berenang dapat membantu anak-anak membangun kekuatan, daya tahan, dan fleksibilitas.</h5>
                        <a href="{{ url ('/form-jadwal') }}" class="btn btn-outline-primary px-3 text-black">Daftar Jadwal Kegiatan</a>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <div class="mb-2">
                            <i class="fas fa-utensil-spoon fa-2x"></i>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Gizi</a>
                        <h5 class="text-primary mb-3">Anak-anak membutuhkan makanan bergizi untuk tumbuh dan berkembang.
                            Makanan bergizi dapat membantu anak-anak tetap sehat, memiliki energi, dan fokus.</h5>
                        <a href="{{ url ('/form-jadwal') }}" class="btn btn-outline-primary px-3 text-black">Daftar Jadwal Kegiatan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <div class="mb-2">
                            <i class="fas fa-syringe fa-2x"></i>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Vaksinasi</a>
                        <h5 class="text-primary mb-3">Vaksin penting untuk melindungi anak-anak dari penyakit. Vaksin bekerja dengan mengajarkan sistem kekebalan tubuh anak-anak untuk melawan penyakit.</h5>
                        <a href="{{ url ('/form-jadwal') }}" class="btn btn-outline-primary px-3 text-black">Daftar Jadwal Kegiatan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Halaman Kegiatan End -->


    <!-- Newsletter Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-black mb-3"><span class="fw-light text-dark">Ayo Ikuti Kegiatan Kami!</h1>
                <p class="text-black mb-4">Untuk Info lengkap lainnya :</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Masukan Email Anda"
                            style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-white fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
@endsection