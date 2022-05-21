    @extends('home.layouts.main')
    @section('content')
    @include('home.layouts.navbar')

    <section id="about" class="about">

        <div class="container mt-4" data-aos="fade-up">
            <div class="section-title text-center">
                <p>Apa itu Sirekperum?</p>
            </div>
            <p style="text-align: justify">SIREKPERUM merupakan Sistem Rekomendasi Perumahan pada Land Group yang terdiri dari Cluster Sultan Regency,
                Sultan Estate, dan Citra Pesona Residence. SiRekPerum dapat membantu dan memudahkan calon pembeli dalam memilih rumah yang diinginkan.
                Graha Land Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana untuk menjawab kebutuhan masyarakat di Kabupaten Indramayu.
                </p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right">
                    <img src="{{asset('landing')}}/assets/img/perum.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h5>Visionary Masterpieces PATRIOT SAYMA LAND (Land Group)</h5>
                    <p>
                        Salah satu perusahaan yang bergerak pada bidang properti di Kabupaten Indramayu yaitu PT. Patriot Sayma
                        Land (Land Group) merupakan perusa- <br> aan yang bergerak dibidang properti seperti rumah dan ruko. Graha Land
                        Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana
                        kebutuhan masyarakat di Kabupaten Indramayu.
                        <br> Graha Land Group terletak di Jalan Tambak (Pertigaan antara Jl. Pahlawan dengan Jl. Samsu). Project Land Group diantaranya:

                    <ul>
                        <li class="fst-italic"><i class="bi bi-check-circle"></i> Cluster Sultan Regency.</li>
                        <li class="fst-italic"><i class="bi bi-check-circle"></i> Sultan Estate.</li>
                        <li class="fst-italic"><i class="bi bi-check-circle"></i> Pesona Citra Residence.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
