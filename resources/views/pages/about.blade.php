@extends('layouts.app') 

@section('title') 
    About - Ndawin Store
@endsection

@section('content')
    <!-- about us -->
    <section id="about" class="py-5 mt-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start" data-aos="fade-left">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class="lead text-muted">Toko Pakaian Wanita Ndawin Store
                    </p>
                    <p>Ndawin Store adalah destinasi fashion eksklusif yang menghadirkan koleksi pakaian wanita dengan
                        sentuhan elegan dan gaya
                        yang trendi. Toko ini secara khusus fokus pada penawaran berbagai macam pakaian wanita, mulai
                        dari jilbab, gamis, hingga
                        daster. Dengan komitmen untuk memberikan pengalaman berbelanja yang memuaskan, Ndawin Store
                        senantiasa menyajikan
                        produk-produk berkualitas tinggi yang menggabungkan desain modern dengan keindahan tradisional.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-0" data-aos="fade-right">
                    <img src="/images/carousel/carousel-1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

    <!-- Hijab -->
    <section id="hijab" class="py-5 mt-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1" data-aos="fade-left">
                    <img src="/images/about/hijab-about.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-lg-0 text-center text-lg-start" data-aos="fade-right">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">Hijab</h2>
                    </div>
                    <p class="lead text-muted">Jilbab voal, Jilbab Umama, Jilbab Pashmina, dll
                    </p>
                    <p>Jilbab Voal, Jilbab Umama, Jilbab Pashmina, dan sejenisnya merupakan pilihan 
                        aksesoris hijab yang memberikan sentuhan elegan dan modis pada penampilan muslimah. 
                        Dengan berbagai varian seperti voal, Umama, dan pashmina, jilbab ini hadir dalam 
                        beragam gaya dan warna, memungkinkan Anda untuk menyesuaikannya dengan gaya pribadi 
                        dan berbagai kesempatan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of Hijab -->

    <!-- Daster -->
    <section id="daster" class="py-5 mt-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start" data-aos="fade-left">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">Daster</h2>
                    </div>
                    <p class="lead text-muted">Daster Rayon, Daster Bali, Daster Katun.
                    </p>
                    <p>Daster Rayon, Daster Bali, dan Daster Katun adalah pilihan nyaman 
                        untuk gaya santai dengan sentuhan tradisional. Dibuat dari bahan 
                        berkualitas tinggi, Daster Rayon menawarkan kenyamanan ringan, 
                        sementara Daster Bali memberikan nuansa khas Bali dengan motif 
                        dan warna yang menarik.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-0" data-aos="fade-right">
                    <img src="/images/about/daster-about.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of daster -->

    <!-- Gamis -->
    <section id="gamis" class="py-5 mt-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1" data-aos="fade-left">
                    <img src="/images/about/gamis-about.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-lg-0 text-center text-lg-start" data-aos="fade-right">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">Gamis</h2>
                    </div>
                    <p class="lead text-muted">Gamis Burkat, Gamis Katun Ima, Gamis Linen.
                    </p>
                    <p>Gamis Burkat, Gamis Katun Ima, dan Gamis Linen adalah pilihan busana muslimah yang 
                        memancarkan keanggunan dan kenyamanan. Gamis Burkat menawarkan keindahan dengan 
                        detail bordir burkat, menciptakan tampilan elegan dan berkelas. Gamis Katun Ima 
                        hadir dengan kenyamanan serat katun berkualitas tinggi, memberikan nuansa ringan 
                        dan sejuk pada pemakaiannya.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of gamis -->


    <!-- locate -->
    <section id="locate" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1" data-aos="fade-left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.30690828990788!2d101.74007353884218!3d-1.2222539600873157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2c0ae2d869a367%3A0x7155ddac805fa1c!2sQPHR%2B438%2C%20Jl.%20Lintas%20Sumatera%2C%20Sungai%20Rumbai%2C%20Kec.%20Sungai%20Rumbai%2C%20Kabupaten%20Dharmasraya%2C%20Sumatera%20Barat%2027684!5e0!3m2!1sid!2sid!4v1704266800526!5m2!1sid!2sid"
                        class="img-fluid" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 order-lg-0 text-center text-lg-start" data-aos="fade-right">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">Locate</h2>
                    </div>
                    <p class="lead text-muted">Toko Pakaian Wanita Ndawin Store
                    </p>
                    <p>Ndawin Store berlokasi di Jalan Pasar Lama Sungai Rumbai, Dharmasraya, Sumatra Barat. Deretan
                        Zena Cafee
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- locate -->
@endsection