@extends('layouts.app') 

@section('title') 
    Detail Produk
@endsection


@section('content')
<div class="page-content page-details">
    <!-- breadcrumb -->
    <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
    >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active">Detail Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery -->
    <section class="store-gallery mb-3" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 images-thumbnail" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <!-- :src = variable di vue -->
                        <img
                            :src="photos[activePhoto].url"
                            :key="photos[activePhoto].id"
                            class="main-image"
                            alt=""
                        />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div
                            class="col-3 col-lg-12 mt-2 mt-lg-0"
                            v-for="(photo, index) in photos"
                            :key="photo.id"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                        >
                            <a href="#" @click="changeActive(index)">
                                <img
                                    :src="photo.url"
                                    class="w-100 thumbnail-image"
                                    style="max-height: 200px"
                                    :class="{active : index == activePhoto}"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- details -->
    <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>{{ $product->name }}</h1>
                        <div class="owner">Toko :  {{ $product->user->store_name }}</div>
                        <div class="price">Rp {{ number_format($product->price) }}</div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">

                        @auth
                        <form action="{{ route('detail-add', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button
                                type="submit"
                                class="btn btn-success btn-block text-white px-4 mb-3"
                                ><i class="fa-solid fa-cart-shopping">Tambah</i>
                            </button>        
                        </form>                   

                        @else
                        <a
                            href="{{ route('login') }}"
                            class="btn btn-success btn-block text-white px-4 mb-3"
                            >Masuk untuk belanja</a
                        >
                        @endauth

                    </div>
                </div>
            </div>
        </section>

        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h4>Ulasan Pelanggan (3)</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img
                                    src="/images/testimoni/man-testimoni.png"
                                    class="rounded-circle mr-3"
                                    alt=""
                                />
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Chandra Dharma</h5>
                                    <p>
                                        Bahan berkualitas tinggi memberikan kenyamanan maksimal, 
                                        sementara desainnya yang elegan dan modern memberikan sentuhan 
                                        fashion yang memikat. Keunikan produk ini terletak pada perpaduan 
                                        antara fungsionalitas dan estetika, menjadikannya pilihan yang tepat 
                                        untuk melengkapi gaya hidup yang dinamis.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <img
                                    src="/images/testimoni/woman-profile.png"
                                    class="rounded-circle mr-3"
                                    alt=""
                                />
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Citra Dewi</h5>
                                    <p>
                                        Produk ini menyuguhkan kombinasi sempurna antara keindahan desain 
                                        . Material berkualitas tinggi memberikan pengalaman 
                                        pengguna yang nyaman dan tahan lama.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <img
                                    src="/images/testimoni/woman-profile-2.png"
                                    class="rounded-circle mr-3"
                                    alt=""
                                />
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Fitriani Indah</h5>
                                    <p>
                                        Bahan yang digunakan tidak hanya memberikan tampilan yang menarik, 
                                        tetapi juga kenyamanan optimal saat dipakai. Desainnya yang kreatif 
                                        dan modern membuat pakaian ini cocok untuk berbagai kesempatan, 
                                        dari formal hingga santai.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection 

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [
                    @foreach ($product->galleries as $gallery )
                    {
                        id: {{ $gallery->id }},
                        url: "{{ Storage::url($gallery->photos) }}",
                    },
                    @endforeach
                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
