@php
$global_setting = app\Models\GlobalSetting::all()->first();
$normal_gallary_notice = app\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', '!=', 'Job')
    ->where('page_type', '!=', 'Photo Gallery')
    ->where('page_type', '!=', 'Notice')
    ->where('parent_page_id', 0)
    ->where('page_status', '1')
    ->orderBy('position', 'ASC')
    ->get();
if (isset($normal)) {
    $seo = $normal;
} elseif (isset($job)) {
    $seo = $job;
}
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="website/css/bootstrap.css" rel="stylesheet" />
    <link href="website/css/style.css" rel="stylesheet" />
    <link href="website/css/responsive.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <link rel="icon" href="images/logo.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="/uploads/icons/{{ $global_setting->favicon }}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="/website/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="/website/css/responsive.css">
    <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="main-page-wrapper">
        <header class="main-header">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="top-left">
                            <ul class="contact-list clearfix">
                                <li>
                                    <i class="flaticon-maps-and-flags"></i>Basundhara, Kathnandu
                                    , Nepal
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-send"></i>greenstaroverseas@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <ul class="social-icon-one clearfix">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="index-2.html"><img src="website/images/logo.png" alt=""
                                        title="" /></a>
                            </div>
                        </div>

                        <!-- Call Btn -->
                        <div class="call-btn">
                            <i class="flaticon-phone-1"></i> +997-1-4363546 <br /><i class="flaticon-phone-1"></i>
                            +997-1-4363540
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-dark">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-1"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                    <ul class="navigation clearfix">
                                        <!-------menu------>
                                        <li @if (!isset($slug_detail)) class="active" @endif><a
                                                href="/">Home</a></li>
                                        @foreach ($menus as $menu)
                                            @php $submenus = $menu->childs; @endphp
                                            <li class="dropdowns" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif><a
                                                    @if ($submenus->count() > 0) href="#" @else href="{{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>
                                                @if ($submenus->count() > 0)
                                                    <ul>
                                                        @foreach ($submenus as $sub)
                                                            <li><a
                                                                    href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach


                                        <li><a href="/contact">Contact</a></li>

                                        <!-------menu closed--->
                                    </ul>
                                </div>
                            </nav>


                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index-2.html" title=""><img src="images/logo.png" alt=""
                                title="" /></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdowns"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li>
                                                <a href="about-nepal.html">About Nepal</a>
                                            </li>
                                            <li>
                                                <a href="mission.html">Mission/Vision</a>
                                            </li>
                                            <li>
                                                <a href="objectives.html">Objectives </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdowns">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li>
                                                <a href="working-process.html">Recruitment Process</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="client.html">Client</a>

                                    </li>
                                    <li class="dropdowns">
                                        <a href="document.html">Documentt</a>
                                        <ul>
                                            <li><a href="document.html">Required Document</a></li>
                                            <li>
                                                <a href="demand-letter-example.html">Demand Letters Examples</a>
                                            </li>

                                        </ul>

                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')


        <footer class="main-footer">
            <!--End Footer Top -->
            <div class="auto-container">
                <!-- Footer Top -->
                <div class="footer-top clearfix">
                    <div class="top-right clearfix">
                        <div class="scroll-to-top scroll-to-target" data-target="html">
                            <span class="flaticon-up-chevron"></span> Move to the Top
                        </div>
                    </div>
                </div>

                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="footer_logo">
                                    <a href="index-2.html"><img src="website/images/logo.png" alt="" /></a>
                                </div>
                                <div class="text">
                                    Green Star Overseas Pvt.Ltd. is a leading government recognized recruitment agency
                                    in Nepal
                                    providing all kind of manpower management services since 2001 from Nepal to
                                    Malaysia, Saudi
                                    Arabia, Dubai, Kuwait, Oman, Qatar and other Gulf companies
                                </div>

                                <div class="copyright-text">
                                    Copyrights &copy; 2022
                                    <a target="_blank" href="https://radiantnepal.com/">Radiant InfoTech Nepal.</a>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget lists-widget">
                                <div class="footer-title">
                                    <h2>Usefull Links</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <ul class="footer-list">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="about-nepal.html">About Nepal</a></li>
                                                <li><a href="mission.html">Mission/Vision</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>

                                            </ul>
                                        </div>

                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <ul class="footer-list">
                                                <li><a href="services.html"> Services</a></li>
                                                <li><a href="working-process.html">Recruitment Process</a></li>
                                                <li><a href="client.html">Client</a></li>
                                                <li><a href="document.html">Required Document</a></li>
                                                <li><a href="contact.html">Contact </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <div class="footer-title">
                                    <h2>Follow us</h2>
                                </div>
                                <ul class="social-icon-two">
                                    <li>
                                        <a style="color: gray;" href="#"><span
                                                class="fa fa-facebook"></span></a>
                                    </li>
                                    <li>
                                        <astyle="color: gray;" href="#"><span class="fa fa-twitter"></span>
                                            </astyle=>
                                    </li>
                                    <li>
                                        <a style="color: gray;" href="#"><span
                                                class="fa fa-instagram"></span></a>
                                    </li>
                                    <li>
                                        <a style="color: gray;" href="#"><span
                                                class="fa fa-whatsapp"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>



        <!-- Optional JavaScript _____________________________  -->

        <script src="website/js/jquery.js"></script>
        <script src="website/js/popper.min.js"></script>
        <script src="website/js/bootstrap.min.js"></script>
        <script src="website/js/validate.js"></script>

        <script src="website/js/jquery.fancybox.js"></script>
        <script src="website/js/owl.js"></script>
        <script src="website/js/wow.js"></script>
        <script src="website/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="website/js/isotope.js"></script>
        <script src="website/js/appear.js"></script>
        <script src="website/js/script.js"></script>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
        <script src="website/js/map-script.js"></script>
        <!--End gllery js -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if (Session::has('contact'))
            <script>
                Swal.fire(
                    'Thanks!',
                    "Form submitted sucessfully!!!",
                    'success'
                )
            </script>
        @endif
    </div> <!-- /.main-page-wrapper -->
</body>

</html>
