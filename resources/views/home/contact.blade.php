    @extends('home.layouts.main')
    @section('content')
    @include('home.layouts.navbar')

    <section id="contact" class="contact">
        <div class="section-title text-center mt-3" data-aos="fade-up">
            <p>Contact</p>
        </div>

        <div class="col-xl-12 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-10 px-lg-5" data-aos="fade-left">
            <div>
                <p class="text-center">Graha Land Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana untuk menjawab kebutuhan masyarakat di Kabupaten Indramayu.
                “Graha Land Group bukan sekadar hunian semata. Didalamnya telah disediakan sejumlah fasilitas, <br> yang tentunya akan dibutuhkan masyarakat,”.
                Selain ruang pertemuan yang nyaman dan representatif, ke depan, Land Group juga akan dilengkapi <br> klinik kesehatan. Dengan sarana dan prasarana modern, klinik juga didukung oleh sumber daya manusia yang profesional dan berpengalaman. <br>
                “Dengan kapasitas besar, ruang pertemuan VIP dan VVIP bisa digunakan untuk meeting maupun gathering instansi atau pun perusahaan. <br> Sedangkan untuk klinik kesehatan, akan disediakan medical check up dengan dukungan dokter-dokter spesialis, <br> asli putra-putri daerah Indramayu,”</p>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="info-box mb-4 section-bg">
                        <div class="d-flex justify-content-center">
                            <div class="row mt-3">
                                <i class="bi bi-geo-alt-fill bi-2x"></i>
                            </div>
                        </div>

                            <div class="row mt-4">
                                <h3 class="text-center">Our Address</h3>
                                <p class="text-center">Jl. Tambak Raya (Pertigaan antara Jl. Pahlawan dengan Jl. Samsu)</p>
                            </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4 section-bg">
                        <div class="d-flex justify-content-center">
                            <div class="row mt-3">
                                <i class="bi bi-envelope-fill "></i>
                            </div>
                        </div>

                            <div class="row mt-4">
                                <h3 class="text-center">Email Us</h3>
                                <p class="text-center">pt.patriotsaymaland@gmail.com</p>
                            </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4 section-bg">
                        <div class="d-flex justify-content-center">
                            <div class="row mt-3">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                        </div>

                            <div class="row mt-4">
                                <h3 class="text-center">Call Us</h3>
                                <p class="text-center">0813 1635 0016</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section
    @endsection
