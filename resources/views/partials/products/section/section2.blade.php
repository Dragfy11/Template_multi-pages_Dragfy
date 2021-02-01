<section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$products[1]->titre}}</span>
              <span class="section-heading-lower">{{$products[1]->subtitre1}} &amp; {{$products[1]->subtitre2}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$products[1]->image}}" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$products[1]->text}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>