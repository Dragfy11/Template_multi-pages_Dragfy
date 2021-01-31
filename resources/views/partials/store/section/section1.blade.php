<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
            <span class="section-heading-upper">{{$store[0]->titre}}</span>
            <span class="section-heading-lower">{{$store[0]->subtitre}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              @foreach ($store[1] as $day=>$hours)
                <li class="list-unstyled-item list-hours-item d-flex">
                {{$day}}
                <span class="ml-auto">{{$hours}}</span>
              @endforeach
            </ul>
            <p class="address mb-5">
              <em>
              <strong>{{$store[0]->adress}}</strong>
                <br>
                {{$store[0]->etat}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$store[0]->appel}}</em>
              </small>
              <br>
              {{$store[0]->num}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>