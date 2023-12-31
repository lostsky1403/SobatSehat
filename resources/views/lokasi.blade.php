@extends('layout.app')
@section('content')
    <!--  Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Lokasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Lokasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--  End -->


    <!-- Halaman Lokasi -->
    <div class="container-fluid how-to-use bg-primary my-5 py-5">
        <div class="container text-white py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Sobat</span> Sehat
                    <span class="fw-light text-dark"></span></h1>
                <p class="mb-5">Pastikan Sebelum anda jalan tujuan lokasi kegiatan benar.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                    <a href="{{ url('https://maps.app.goo.gl/kfzkUNpS91KnELqc7') }}" class="text-white"><h5>Cibinong</h5></a>
                    <hr class="w-25 bg-light my-2 mx-auto">
                    <span>Children
                        <br>
                       Telp : 082161035623
                       <br>
                       Jl. Raya Mayor Oking Jaya Atmaja No.158 M.
                       </span>
                </div>
                <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                    <a href="{{ url('https://maps.app.goo.gl/ir6BKq1aWvQW6HQq6') }}" class="text-white"><h5 class="text-white">Depok</h5></a>
                    <hr class="w-25 bg-light my-2 mx-auto">
                    <span>Children
                        <br>
                        <br>
                        Telp : 082161035623
                        <br>
                        Gedung Baleka II, Jl. Margonda No.54, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat
                    </span>
                </div>
                <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                    <a href="{{ url('https://maps.app.goo.gl/dTckr2idPe7k2U8eA') }}" class="text-white"><h5 class="text-white">Bogor</h5></a>
                    <hr class="w-25 bg-light my-2 mx-auto">
                    <span>Children
                        <br>
                        <br>
                        Telp : 02518331753
                        <br>
                        Jalan R.M. Tirto Adhi Soerjo, RT.02/RW.02, Tanah Sareal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Halaman Lokasi -->

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

@endsection