@extends('layouts.home')

@section('slider')
    <div class="d-flex justify-content-between align-items-center" style="padding-top: 91px">
    </div>
@endsection

@section('content')
    <section class="section-md">
        <div class="container-fluid">
            <div class="row justify-content-between product__row">
                <div class="col-md-5">
                    <div class="product-gallery">
                        <div class="product-image-box">
                            <img src="{{ asset($product->image) }}" class="img-fluid w-100 rounded shadow-sm"
                                alt="{{ $product->name }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mt-4 mt-md-0">
                    <div class="product-details">
                        <div class="mb-3">
                            <span
                                class="badge bg-success rounded-pill px-3 py-2">{{ $product->category->name ?? 'Category' }}</span>
                        </div>
                        <h2 class="product-title mb-3" style="font-weight: 700; color: #333;">{{ $product->name }}</h2>
                        <h3 class="product-price mb-4" style="color: #595AF5; font-weight: 600;">
                            AED {{ number_format($product->price, 2) }}
                        </h3>

                        <div class="product-description mb-5">
                            <h5 class="mb-3" style="font-weight: 600;">Description</h5>
                            <div class="description-content text-muted" style="line-height: 1.8;">
                                {!! $product->description !!}
                            </div>
                        </div>

                        <div class="product-actions">
                            <button type="button" class="pbmit-btn" data-bs-toggle="modal" data-bs-target="#orderModal">
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Place Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product</label>
                            <input type="text" class="form-control" id="product_name"
                                value="{{ $product->name }} - AED {{ number_format($product->price, 2) }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="background-color: #595AF5; border: none;">Submit
                        Order</button>
                </div>
            </div>
        </div>
    </div>
@endsection