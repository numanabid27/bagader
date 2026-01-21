@extends('layouts.dashboard')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Product') }}
    </h2>
@endsection

@section('content')

    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ old('name', $product->name) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="" disabled>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required
                    value="{{ old('price', $product->price) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($product->image)
                    <div class="mt-2">
                        <img src="{{ asset($product->image) }}" alt="Product Image" style="width: 100px; height: auto;"
                            class="rounded border">
                    </div>
                @endif
            </div>
            <div class="col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    required>{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" {{ $product->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Active Product</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#description').summernote({
                height: 300,
            });
        });
    </script>
@endpush