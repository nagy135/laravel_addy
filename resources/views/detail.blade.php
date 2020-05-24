@extends('base')


@section('content')


<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">{{ $product->category->name }}</span>
                        <span class="section-heading-lower">{{ $product->title }}</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ public_url_modify($product->thumbnail->path ?? '/images/image_not_found.png') }}" alt="">
            @foreach( $product->images as $image )
                <img class="pt-2 product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ public_url_modify($image->path) }}" alt="">
            @endforeach
            <div class="row">
                <div class="product-item-description col-6">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">{{ $product->description }}</p>
                    </div>
                </div>
                <div class="product-item-description col-3 offset-3">
                <button id="buy-button" class='btn btn-primary btn-lg stick-bottom-right'>Objednať</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

