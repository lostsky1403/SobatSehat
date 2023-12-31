@extends('layout.app')
@section('content')
<!-- Beranda Start -->
    <div class="container-fluid custom-bg-peach">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-4 text-black animated slideInRight">Selamat  <span class="fw-light text-dark">Datang</span> Di Sobat Sehat</h1>
                    <p class="text-black mb-4 animated slideInRight">Bersiaplah untuk  memulai perjalanan sehatmu bersama kami.Aplikasi ini 
                        didedikasikan untuk mendukung gaya hidup sehatmu dengan informasi, saran, dan fitur-fitur menarik. Mari kita bersama-sama mencapai 
                        kesehatan optimal!</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('Sobatsehat/img/bg.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Beranda End -->


    <!-- Feature Start -->

    
    <!-- Feature End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Halaman Menu Web Start -->
    <div class="container-fluid deal">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-4">
                        <div class="">
                            <div class="">
                                <i class="fas fa-map-marker-alt fa-3x"></i>
                                <h5 class="text-black mb-0">Map</h5>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="{{ url ('/lokasi') }}">Lihat Lokasi</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-4">
                            <div class="">
                                <i class="fas fa-running fa-3x"></i>
                                <h5 class="text-black mb-0">Kegiatan</h5>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="{{ url ('/kegiatan') }}">Lihat Kegiatan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Halaman Menu Web End -->


    <!-- Feature Start -->

    <!-- Feature End -->


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


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Artikel Start -->
    <div class="container-fluid how-to-use bg-primary my-5 py-5">
        <div class="container text-white py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-black mb-3"><span class="fw-light text-dark">Temukan Artikel</h1>
                <p class="mb-5">Berita kesehatan apa  yang ingin kamu cari hari ini ?</p>
            </div>
            <div class="row g-4 text-black">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item border h-100 p-4 text-black">
                        <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="">
                        <a href="{{ url('https://stikesbanyuwangi.ac.id/pentingnya-olahraga-bagi-tubuh-dan-kesehatan/') }}" class="h5 lh-base d-inline-block text-white">Pentingnya Olahraga Bagi Tubuh Dan Kesehatan</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Olahraga merupakan hal yang sangat penting dan dibutuhkan oleh tubuh kita. Walaupun kita sudah berusia lanjut tetap membutuhkan yang namanya olahraga olah tubuh. Manfaat olahraga bagi kesehatan jelas sangat banyak dan bisa dirasakan oleh setiap orang. Tak bisa dipungkiri bahwa
                                         olahraga menjadi salah satu gaya hidup yang wajib dilakukan setiap orang untuk bisa membuat tubuhnya tetap sehat dan bugar.</p>
                        <a href="{{ url('https://stikesbanyuwangi.ac.id/pentingnya-olahraga-bagi-tubuh-dan-kesehatan/') }}" class="btn btn-outline-primary px-3 text-white">Selengkapnya>></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/blog-2.jpg" alt="">
                        <a href="{{ url('https://www.rscahyakawaluyan.com/post/view/148--olah-raga-menjaga-kesehatan') }}" class="h5 lh-base d-inline-block text-white">Manfaat dari berolah raga</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4"> 1. Mengendalikan berat badan
                            <br>
                                            Berolah raga secara teratur mampu mengurangi lemak tubuh serta membangun massa otot dan meningkatkan metabolisme tubuh.
                                            <br>
                                         2. Mencegah penyakit jantung dan stroke
                                         <br>
                                            Olahraga akan memperkuat otot jantung, menurunkan tekanan darah, meningkatkan tingkat kolesterol.
                                            <br>
                                        3.  Mencegah nyeri punggung
                                        <br>
                                            Peningkatan kekuatan dan ketahanan otot serta fleksibilitas tubuh yang didapat dari olahraga rutin dapat membantu mencegah nyeri punggung.</p>
                        <a href="{{ url('https://www.rscahyakawaluyan.com/post/view/148--olah-raga-menjaga-kesehatan') }}" class="btn btn-outline-primary px-3 text-white">Selengkapnya>></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/blog-3.jpg" alt="">
                        <a href="{{ url('https://www.kabarpendidikan.id/2023/03/pentingnya-olahraga-kehidupan-sehari.html') }}" class="h5 lh-base d-inline-block text-white">Pentingnya Olahraga Kehidupan Sehari-hari</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Olahraga merupakan hal yang sangat penting dalam kehidupan kita, di era modern saat ini rasanya sudah jarang sekali individu dapat berolahraga. Berbagai kesibukan yang menyita waktu sehari-hari membuat manusia lupa untuk menyempatkan waktu berolahraga. Padahal olahraga mempunyai segudang manfaat yang sangat penting. 
                            Selain karena tidak memiliki waktu, penyebab malas berolahraga tentunya karena sarana dan prasarana untuk berolahraga yang sudah jarang ditemukan</p>
                        <a href="{{ url('https://www.kabarpendidikan.id/2023/03/pentingnya-olahraga-kehidupan-sehari.html') }}" class="btn btn-outline-primary px-3 text-white">Selengkapnya>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel End -->


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