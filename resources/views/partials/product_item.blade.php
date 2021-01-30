@foreach ($products as $item)
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex {{($loop->iteration  %  2  ==  0)? 'mr-auto' : 'ml-auto'}} rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$item->title[0]}}</span>
              <span class="section-heading-lower">{{$item->title[1]}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$item->img}}" alt="">
        <div class="product-item-description d-flex {{($loop->iteration  %  2  ==  0)? 'ml-auto' : 'mr-auto'}}">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$item->text}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach