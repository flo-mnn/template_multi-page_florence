<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">{{$open[0]->title1}}</span>
              <span class="section-heading-lower">{{$open[0]->title2}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              @foreach ($open[1] as $dayhour)
                <li class="list-unstyled-item list-hours-item d-flex {{  date('l')== $dayhour->day ?'today': "" }}">
                  {{$dayhour->day}}
                  <span class="ml-auto">{{$dayhour->hours}}</span>
                </li>
              @endforeach
              
            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$open[0]->address1}}</strong>
                <br>
                {{$open[0]->address2}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$open[0]->call1}}</em>
              </small>
              <br>
              {{$open[0]->call2}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>