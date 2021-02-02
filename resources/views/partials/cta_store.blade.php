<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">{{$articles[6]->title}}</span>
              <span class="section-heading-lower">{{$articles[6]->subtitle}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              @foreach ($openings as $day)
                <li class="list-unstyled-item list-hours-item d-flex {{  date('l')== $day->day ?'today': "" }}">
                  {{$day->day}}
                  <span class="ml-auto">{{$day->hours}}</span>
                </li>
              @endforeach
              
            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$coordinates[0]->part1}}</strong>
                <br>
                {{$coordinates[0]->part2}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$coordinates[1]->part1}}</em>
              </small>
              <br>
              {{$coordinates[1]->part2}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>