@extends('layouts.app') 

@section('title') 
    Home - Ndawin Store
@endsection


@section('content')
<div class="page-content page-home">
    <!-- Carousel -->
    <section class="store-carousel" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        id="storeCarousel"
                        class="carousel slide"
                        data-ride="carousel"
                    >
                        <ol class="carousel-indicators">
                            <li
                                class="active"
                                data-target="#storeCarousel"
                                data-slide-to="0"
                            ></li>
                            <li
                                data-target="#storeCarousel"
                                data-slide-to="1"
                            ></li>
                            <li
                                data-target="#storeCarousel"
                                data-slide-to="2"
                            ></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="100">
                                <img
                                    src="/images/carousel/carousel-1-new.png"
                                    alt="Carousel Image"
                                    class="d-block w-100"
                                />
                            </div>
                            <div class="carousel-item" data-bs-interval="200">
                                    <img
                                    src="/images/carousel/carousel-2-new.png"
                                    alt="Carousel Image"
                                    class="d-block w-100"
                                    />
                            </div>
                            <div class="carousel-item" data-bs-interval="300">
                                <img
                                    src="/images/carousel/carousel-3-new.png"
                                    alt="Carousel Image"
                                    class="d-block w-100"
                                />
                            </div>
                        </div>
                        <a
                            class="carousel-control-prev"
                            href="#storeCarousel"
                            role="button"
                            data-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a
                            class="carousel-control-next"
                            href="#storeCarousel"
                            role="button"
                            data-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Kategori Produk</h5>
                </div>
            </div>
            <div class="row">

                {{-- variable increment delay --}}
                @php
                    $incrementCategory = 0
                @endphp

                @forelse ($categories as $category)
                    <div
                        class="col-6 col-md-3 col-lg-2"
                        data-aos="fade-up"
                        data-aos-delay="{{ $incrementCategory += 100 }}"
                        >
                        <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                            <div class="categories-image">
                                <img
                                    src="{{ Storage::url($category->photo) }}"
                                    alt="Image Category {{ $category->slug }}"
                                    class="w-100"
                                />
                            </div>
                            <p class="categories-text">{{ $category->name }}</p>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                        Tidak ada kategori yang ditemukan
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="store-new-products">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Produk Baru</h5>
                </div>
            </div>
            <div class="row">

                @php
                    $incrementProduct = 0;
                @endphp

                @forelse ($products as $product)
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="{{ $incrementProduct += 100 }}"
                        >
                        <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="
                                        @if ($product->galleries->count())
                                            background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                        @else
                                            background-color : #eee;
                                        @endif
                            
                                    "
                                ></div>
                            </div>
                            <div class="products-text">
                                <p>{{ $product->name }}</p>
                            </div>
                            <div class="products-price">
                                <p>Rp {{ number_format($product->price) }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                        Tidak ada produk yang ditemukan
                    </div>
                @endforelse

            </div>
        </div>
    </section>
</div>
@endsection
