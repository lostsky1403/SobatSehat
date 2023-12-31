@extends('layout.app')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Artikel</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


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