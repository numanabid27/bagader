@extends('layouts.dashboard')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Category') }}
    </h2>
@endsection

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" require
                        value="{{ old('name', $category->name) }}">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" require
                        value="{{ old('slug', $category->slug) }}">
                    @error('slug')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection