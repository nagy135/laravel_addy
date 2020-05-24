@extends('base')


@section('content')

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Máte záujem o nejaký produkt?</span>
                <span class="section-heading-lower">Kontaktujte ma</span>
              </h2>
<form>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="form__email" aria-describedby="emailHelp" placeholder="Váš email">
    <small id="emailHelp" class="form-text text-muted">Adresa na, ktorej Vás môžem kontaktovať</small>
  </div>
  <div class="form-group">
    <label for="product-id">Produkt ID</label>
    <input type="text" class="form-control" id="product-id" disabled 
        @if(!is_null($product_id))
            value="{{$product_id}}"
        @endif
    >
    <small id="productIdHelp" class="form-text text-muted">Na detailnej stránke produktu, máte tlačidlo <strong>Objednať</strong>, ktoré vyplní toto pole
        @if(isset($product_name))
            <br><strong>Vybratý produkt:&nbsp;</strong>{{ $product_name }}
        @endif
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Objednať</button>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

