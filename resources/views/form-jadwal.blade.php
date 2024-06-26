@extends('layout.app')
@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-light text-black" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-justify">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Buat Jadwalmu!</h2>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tanggal Kegiatan</label>
                                <input type="datetime-local" class="form-control" id="tanggal" placeholder="">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Kirim Jadwal ke Emailmu
                                </label>
                            </div>

                            <div class="form align-items-center">
                                <a href="{{ url('/sukses') }}"><button class="btn btn-primary btn-lg px-5 py-10"
                                        type="submit">Buat Jadwalmu</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
