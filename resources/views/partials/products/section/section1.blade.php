<section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
            <span class="section-heading-upper">{{$products[0]->titre}}</span>
              <span class="section-heading-lower">{{$products[0]->subtitre1}} &amp; {{$products[0]->subtitre2}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$products[0]->image}}" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
          <p class="mb-0">{{$products[0]->text}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>