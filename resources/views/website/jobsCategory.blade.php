     <section class="services-section">
            <div class="auto-container">
                <div class="sec-title style-two">
                    <div class="row clearfix">
                        <div class="title-column col-lg-4 col-md-12 col-sm-12">
                            <h2>JOB CATEGORY</h2>
                        </div>
                        <div class="text-column col-lg-8 col-md-12 col-sm-12">
                            <div class="text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Corporis, dicta reprehenderit soluta, atque explicabo pariatur
                                eos vero, necessitatibus autem dignissimos animi quibusdam?
                                Illo, saepe cupiditate.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    @foreach ($job_categories as $job_categories)
                         <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ $job_categories->banner_image }}" alt="" />

                               
                            </div>
                            <div class="caption-box">
                                <h3><a href="service-single.html">{{ $job_categories->caption }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                   

                    <!-- view all services button -->
                    <div style="display: flex; justify-content: center; width: 100%" class="link-box">
                        <a href="services.html" class="theme-btn btn-style-one">Load More</a>
                    </div>
                </div>

            </div>
        </section>
