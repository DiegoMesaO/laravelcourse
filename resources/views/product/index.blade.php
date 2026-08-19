@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])

@section('content')
    <div class="mb-3 text-end">
        <a href="{{ route('product.create') }}" class="btn btn-primary">Create product</a>
    </div>

    <div class="row">
        @forelse ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card" alt="Laravel logo">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->id]) }}"
                           class="btn bg-primary text-white">{{ $product->name }}</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No products found.</p>
        @endforelse
    </div>
@endsection
