   <section class="testimonials-section">
            <div class="auto-container">
                <div class="sec-title style-two">
                    <div class="row clearfix">
                        <div class="title-column col-lg-4 col-md-12 col-sm-12">
                            <h2> Testimonials</h2>
                        </div>

                    </div>
                </div>

                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!-- Testimonial BLock -->
                    @foreach ($testimonial as $testimonial_item)
                         <div class="testimonial-block">
                        <div class="inner-box">
                            
                            <div class="text">
                               {{ $testimonial_item->short_content }}
                            </div>
                            <div class="info-box">
                                <h5 class="name">{{ $testimonial_item->caption }}</h5>
                               
                            </div>
                        </div>
                    </div>

                    @endforeach
                   
                   
                  
                </div>
            </div>
        </section>
