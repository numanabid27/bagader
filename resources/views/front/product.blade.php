@extends('layouts.home')

@section('slider')
    <div class="pbmit-slider-area pbmit-slider-one">
        <div class="swiper-slider" data-autoplay="true" data-loop="false" data-dots="false" data-arrows="false"
            data-columns="1" data-margin="0" data-effect="fade">
            <div class="swiper-wrapper">
                <!-- Slide1 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/product-banner.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-top transform-delay-1">One of the Asian
                                            partners (Supplier) once called Bagader </h5>
                                        <h2 class="pbmit-title transform-left transform-delay-3">Products</h2>
                                        <div class="pbmit-desc transform-bottom transform-delay-4">
                                            We all need a little space to grow. Give yourself the space you need to
                                            find your inner you.
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <style>
        .product-tabs .nav-tabs {
            border-bottom: none;
            justify-content: center;
            margin-bottom: 3rem !important;
            gap: 15px;
        }

        .product-tabs .nav-link {
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            color: #555;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .product-tabs .nav-link:hover {
            transform: translateY(-2px);
            background-color: #e9ecef;
        }

        .product-tabs .nav-link.active {
            background-color: #595AF5;
            color: white;
            box-shadow: 0 8px 15px rgba(217, 35, 45, 0.3);
            transform: translateY(-2px);
        }

        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background: white;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .product-img-wrapper {
            height: 260px;
            overflow: hidden;
            position: relative;
        }

        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-img-wrapper img {
            transform: scale(1.1);
        }

        .product-card .card-body {
            padding: 1.5rem;
            text-align: center;
        }

        .product-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .product-desc {
            color: #777;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.35rem;
            font-weight: 600;
            color: #595AF5;
            display: block;
            padding-bottom: 11px;
        }

        .badge-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #595AF5;
            color: #fff;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            z-index: 2;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

    <section class="section-md" style="background-color: #fdfdfd;">
        <div class="container">
            <!-- Nav Tabs -->
            <div class="product-tabs">
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                            type="button" role="tab" aria-controls="all" aria-selected="true">All Products</button>
                    </li>
                    @foreach ($categories as $category)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-{{ $category->id }}" data-bs-toggle="tab"
                                data-bs-target="#cat-{{ $category->id }}" type="button" role="tab"
                                aria-controls="cat-{{ $category->id }}" aria-selected="false">{{ $category->name }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content mt-4" id="productTabsContent">

                <!-- All Products Tab -->
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row g-4">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-6">
                                <div class="product-card shadow-sm">
                                    <span class="badge-category">{{ $product->category->name ?? 'Product' }}</span>
                                    <div class="product-img-wrapper">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="product-title">{{ $product->name }}</h5>
                                        <span class="product-price">AED {{ number_format($product->price, 2) }} </span>
                                        <a href="{{ route('product.show', $product->slug) }}"
                                            class="btn btn-sm btn-outline-success">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Category Tabs -->
                @foreach ($categories as $category)
                    <div class="tab-pane fade" id="cat-{{ $category->id }}" role="tabpanel"
                        aria-labelledby="tab-{{ $category->id }}">
                        <div class="row g-4">
                            @if($category->products->count() > 0)
                                @foreach ($category->products as $product)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="product-card shadow-sm">
                                            <div class="product-img-wrapper">
                                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="product-title">{{ $product->name }}</h5>
                                                <span class="product-price">${{ number_format($product->price, 2) }}</span>
                                                <div class="mt-3">
                                                    <a href="{{ route('product.show', $product->slug) }}"
                                                        class="btn btn-sm btn-outline-success">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center py-5">
                                    <h5 class="text-muted">No products available in this category yet.</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection