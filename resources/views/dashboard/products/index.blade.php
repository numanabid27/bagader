@extends('layouts.dashboard')

@section('header')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
    </div>
@endsection

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                        style="width: 50px; height: 50px; object-fit: cover;" class="rounded">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>
                                @if($product->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-info text-white">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection