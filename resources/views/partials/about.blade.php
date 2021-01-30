<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/about.jpg')}}" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$about->title}}</span>
                <span class="section-heading-lower">{{$about->subtitle}}</span>
              </h2>
              <p>{{$about->text[0]}}</p>
              <p class="mb-0">
                {{$about->text[1][0]}}<em>{{$about->text[1][1]}}</em>{{$about->text[1][2]}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>