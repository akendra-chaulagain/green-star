      @section('name')
      @endsection

      <section class="about-us">
          <div class="auto-container">
              <div class="row clearfix">
                  <!-- Content Column -->
                  <div class="content-column col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-column">
                          <h2 style="color: #6EBB3E">{{ $message->caption ?? " " }}</h2>

                          <div class="text">
                              {!! $message->long_content ?? " " !!}
                          </div>
                          {{-- <div class="author-boxs">
                              <span>Read More</span>
                          </div> --}}

                      </div>
                  </div>

                  <!-- Video Column -->
                  <div class="video-column col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-column">
                          <figure class="image wow fadeIn">
                              <img src="{{ $message->banner_image }}" alt="banner_image" />
                          </figure>
                      </div>
                  </div>
              </div>
          </div>
      </section>
