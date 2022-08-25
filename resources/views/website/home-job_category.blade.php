<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="inner-column">
            <h2 style="color:#6EBB3E "> <span>JOB CATEGORY</span> </h2>

        </div>
        <div class="row clearfix">


            @foreach ($job_categories as $cat)
                <div class="service-block col-lg-3 col-md-6 col-sm-6 col-12  mt-4">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ $cat->banner_image }}" alt="banner_img" />
                        </div>
                        <div class="caption-box">
                            <h3><a href="/{{ $cat->nav_name }}">{{ $cat->caption }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
