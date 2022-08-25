    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">

            @foreach ($sliders as $slider)
                <div class="slide-item"
                    style="
              background: linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ),
                url({{ $slider->banner_image }});
            ">
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>{{ $slider->caption }}</h2>
                            <h4>{{ $slider->short_content }}</h4>
                            {{-- <div class="link-box clearfix">
                                <a href="about.html" class="theme-btn btn-style-one">Know About us</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
