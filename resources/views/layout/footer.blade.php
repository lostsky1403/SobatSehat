    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{ url('index') }}"  class="d-inline-block mb-3">
                        <h1 class="text-primary">Sobat Sehat</h1>
                    </a>
                    <p class="mb-0">Bersiaplah untuk  memulai perjalanan sehatmu bersama kami.Aplikasi ini 
                        didedikasikan untuk mendukung gaya hidup sehatmu dengan informasi, saran, dan fitur-fitur menarik. Mari kita bersama-sama mencapai 
                        kesehatan optimal!</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Setu Indah No.116, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451</p>
                    <p><i class="fa fa-phone-alt me-3"></i>0217863191</p>
                    <p><i class="fa fa-envelope me-3"></i>info@nurulfikri.ac.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href="{{ asset ('') }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="{{ asset ('') }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="{{ asset ('') }}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="{{ asset ('') }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="mb-4">Selengkapnya</h5>
                    <a class="btn btn-link" href="">Lokasi</a>
                    <a class="btn btn-link" href="">Kegiatan</a>
                    <a class="btn btn-link" href="">Artikel</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="mb-4">Link Lainnya</h5>
                    <a class="btn btn-link" href="">Lokasi</a>
                    <a class="btn btn-link" href="">Kegiatan</a>
                    <a class="btn btn-link" href="">Artikel</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Sobat Sehat - Kelompok Mangga</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="{{ url('https://htmlcodex.com') }}">HTML Codex</a> Distributed by <a href="{{ url('https://themewagon.com')}}">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ asset ('') }}">Beranda</a>
                            <a href="{{ asset ('') }}">Cookies</a>
                            <a href="{{ asset ('') }}">Help</a>
                            <a href="{{ asset ('') }}">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('Sobatsehat/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Sobatsehat/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Sobatsehat/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('Sobatsehat/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset ('Sobatsehat/js/main.js') }}"></script>
</body>

</html>