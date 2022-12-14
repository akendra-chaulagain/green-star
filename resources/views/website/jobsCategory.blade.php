      @extends('layouts.master')

      @push('title')
          Jobs
      @endpush

      @section('content')
          <section class="page-title"
              style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url('https://images.pexels.com/photos/1181401/pexels-photo-1181401.jpeg?auto=compress&cs=tinysrgb&w=1600')">

              <div class="auto-container">
                  <div class="title-box">
                      <h1>{{ $slug_detail->caption ?? 'All Jobs' }}</h1>
                  </div>

                  <ul class="page-breadcrumb">
                      <li><a href="/">Home</a></li>
                      <li>{{ $slug_detail->caption ?? 'All Jobs' }}</li>
                  </ul>
              </div>
          </section>

          <section class="services-section">
              <div class="auto-container">
                  <div class="sec-title style-two">
                      <div class="row clearfix">
                          <div class="title-column col-lg-4 col-md-12 col-sm-12">
                              <h2 style="color: #6ebb3e">

                               
                                      {{ $slug_detail->caption ?? 'All Jobs' }}
                                 
                              </h2>
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
                      @foreach ($jobs as $job)
                          <div class="job-detail  ">
                              <div class="job_cat_box mt-4">
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <div class="Job_img-box">
                                              <a href="{{ route('single_job', $job->nav_name) }}">
                                                  <img src="{{ $job->banner_image }}" alt="banner_img"></a>
                                          </div>
                                      </div>
                                      <div class="col-sm-5 job_cat_data">
                                          <a href="{{ route('single_job', $job->nav_name ?? " ") }}">
                                              <div class="single_job_text">
                                                  <h6>{{ $job->caption }}</h6>

                                                  <span
                                                      class="job_company mt-1">{{ $job->getJob->company_name ?? 'null' }}</span>
                                                  <span class="mt-1"><i
                                                          class="fa fa-map-marker "></i>{{ $job->getJob->country ?? 'null' }}</span>

                                              </div> 
                                          </a>
                                      </div>
                                      <div class="col-sm-4 job_cat_data_right">
                                          <div class="job_cat_data_right_text">
                                              <span class="job_company">Salary : MYR {{ $job->getJob->salary ?? '' }}
                                                  Monthly</span>
                                              <span>Contract : {{ $job->getJob->contract_time ?? '' }} Year(s)</span>
                                              <a href="/jobapply/{{ $job->nav_name }}" class="apply-button"
                                                  target="_blank">Apply Now</a>
                                          </div> 
                                      </div>
                                  </div>
                              </div>


                          </div>
                      @endforeach



                   
                  </div>

              </div>
          </section>
      @endsection
