<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{$articles[0]->img}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$articles[0]->title}}</span>
            <span class="section-heading-lower">{{$articles[0]->subtitle}}</span>
          </h2>
          <p class="mb-3">{{$articles[0]->text}}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$articles[0]->btn}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>