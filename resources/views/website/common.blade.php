 @extends('layouts.master')



@section('content')
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="flaticon-cancel"></span></div>

            <div class="logo">
                <a href="index-2.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <!-- Brochures Widget -->
            <div class="brochures-widget">
                <h4>Our Brochures</h4>
                <div class="brochure-box">
                    <div class="inner">
                        <i class="icon flaticon-file-1"></i>
                        <h5><a href="#">Landscape Styles</a></h5>
                        <span>1000+ designs</span>
                    </div>
                </div>
                <div class="brochure-box">
                    <div class="inner">
                        <i class="icon flaticon-file-1"></i>
                        <h5><a href="#">Company Profile</a></h5>
                        <span>Since 1978</span>
                    </div>
                </div>
            </div>
            <!-- Subscribe Widget -->
            <div class="subscribe-widget">
                <h4>Newsletter Subscribe</h4>
                <p>Get landscaping tips, tricks & latest updates</p>
                <div class="subscribe-form">
                    <form method="post" action="https://t.commonsupport.com/groundwork/index.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address..."
                                required="">
                            <button type="submit"><i class="flaticon-right-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Offer Widget -->
            <div class="offer-widget" style="background-image: url(images/resource/offer-bg.jpg);">
                <div class="inner">
                    <div class="offer"><span>50%</span>offer</div>
                    <div class="text">Lifetime Maintenance</div>
                    <div class="link-box"><a href="#" class="theme-btn btn-style-two">Get Estimate</a></div>
                </div>
            </div>
            <!-- Copyright Text -->
            <div class="copyright-text">Copyrights &copy; 2012-2018 <a href="index-2.html">The Groundwork.</a></div>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title"
        style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url(images/aboutus/about-nepal.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>About Nepal</h1>
            </div>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">Home</a></li>

                <li>About Nepal</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2> <span>About Nepal</span> </h2>

                        <div class="text">Nepal, officially the Federal Democratic Republic of Nepal is a landlocked
                            sovereign state
                            located in South Asia. Nepal is situated within latitude 26° 22' N to 30°27' N and longitude
                            80°4E to 88°12' E. with an area of 147,181 square kilometers (56,827 sq mi). Its Shape is
                            roughly rectangular about 885km long East to West and about 200km wide North to South and
                            occupies 0.3 and 0.3% of land area of Asia and the world respectively. Population of Nepal is
                            approximately 27 million (and nearly 2 million absentee workers living abroad); Nepal is the
                            world's 93rd largest country by land mass and the 41st most populous Country.
                            It is located in the Himalayas and bordered to the north by the People's Republic of China, and
                            to
                            the south, east, and west by the Republic of India. Specifically, the Indian states of
                            Uttarakhand,
                            Uttar Pradesh, Bihar, West Bengal, and Sikkim border Nepal, while across the Himalayas lies the
                            Tibetan Autonomous Region. Nepal is separated from Bangladesh by the narrow Indian Siliguri
                            corridor. Kathmandu is the nation's capital and largest metropolis. <br>
                            The mountainous north of Nepal has eight of the world's ten tallest mountains, including the
                            highest point on Earth, Mount Everest, called Sagarmatha in Nepali. It contains more than 240
                            peaks over 20,000 ft (6,096 m) above sea level. The southern Terai region is fertile and humid.
                            Lumbini, the birthplace of Lord Gautam Buddha, is located in this region. Lumbini is one of the
                            holiest places of one of the world's great religions, and its remains contain important evidence
                            about the nature of Buddhist pilgrimage centres from as early as the 3rd century BC. <br>
                            Hinduism is practiced by about 81.3% of Nepalis, making it the country with the highest
                            percentage of Hindus. Buddhism is linked historically with Nepal and is practiced by 16%, Kirat
                            5.1%, lsam by 4.4%, Christianity 1.4%, and animism 0.4%. A large section of the population,
                            especially in hill region, even though they follow Hindu customs, may identify themselves as
                            both Hindu as well as Buddhists which can be attributed to syncretic nature of Hinduism and
                            Buddhism in Nepal. In 2013, Nepal ranked the 157th place on the Human Development Index
                            (HDI) and is one of the least developed nations in the entire world .</div>


                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">

                    <div class="commonPageCategory ">
                        <h3>Side Navigation</h3>
                        <div class="icommonPageCategoryItem">
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="about-nepal.html">About Nepal</a></li>
                                <li><a href="mission.html">Mission/Vision</a></li>
                                <li><a href="objectives.html">Objectives</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="inner-column">

                        <figure class="image wow fadeIn" data-wow-delay="600ms"><img
                                src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                alt="">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

<!-- End About Us -->
