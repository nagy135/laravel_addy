@extends('base')


@section('content')

<div class="container">
    <div class="row">
        <select class="custom-select custom-select-lg col-6 offset-3 mt-5" id="category_select" name="category">
            <option value="all"
            @if( $selected_category == "all" )
            selected='selected'
            @endif
            >Všetky</option>
            @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                    @if( $category->id == $selected_category)
                    selected='selected'
                    @endif
                    >{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>

    @foreach($products as $index => $product)
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex {{ ($index % 2 == 0) ? 'ml-auto' : 'mr-auto' }} rounded">
            <h2 class="section-heading mb-0">
                <span class="section-heading-upper">{{ $product->category->name }}</span>
                <span class="section-heading-lower">{{ $product->title }}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ public_url_modify($product->thumbnail->path ?? '/images/image_not_found.png') }}" alt="">
        <div class="product-item-description d-flex {{ ($index % 2 == 0) ? 'mr-auto' : 'ml-auto' }}">
          <div class="bg-faded p-5 rounded">
              <p class="mb-0">{{ $product->description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    @endforeach
  <div class="container">
      <div class="row">
          <div class="col-8 offset-2 d-flex justify-content-center">
          {{ $products->links() }}
          </div>
      </div>
  </div>

@endsection

