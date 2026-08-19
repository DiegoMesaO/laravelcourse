@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])

@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start" alt="Laravel logo">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $viewData['product']->name }}</h5>
                    <p class="card-text">Price: {{ $viewData['product']->price }}</p>

                    @foreach ($viewData['product']->comments as $comment)
                        - {{ $comment->getDescription() }}<br />
                    @endforeach

                    <a class="btn btn-secondary" href="{{ route('product.index') }}">Back to products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
