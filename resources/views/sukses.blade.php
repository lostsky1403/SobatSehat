@extends('layout.app')
@section('content')

<div class="kontener">
    <div class="terimakasih">

        <body>
            <div class="container">
                <div class="text-center">
                    <h1 class="display-4">Sukses Membuat Jadwal!</h1>
                    <hr class="my-4">
                    <p>Untuk melihat kegiatan lainnya, silakan kunjungi halaman utama kami.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ ('/') }}" role="button">Kembali ke Halaman Utama</a>
                    </p>
                </div>
            </div>
        </body>
    </div>
</div>
@endsection