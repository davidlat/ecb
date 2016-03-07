@extends('layouts.master')

@section('content')

    <!-- HEADER -->
    <header id="home" class="bg-image fixed-bg window-height overlay-on-scroll parallax-bg" data-stellar-background-ratio=".5" style="background-image:url(images/background/guitarSM-bg.jpg);">
        <div class="middle-align-content">
            <div class="container text-lg parallax-move-down">         
                <!-- <h2 class="blessed ecb_md scrolling-animation fade-down d2">the</h2> -->
                <h1 class="blessed ecb_lg scrolling-animation scale-in">Eddie Carey</h1>
                <h2 class="blessed ecb_md scrolling-animation fade-down d2">and the EC band</h2>
                <!-- <p class="text-lg scrolling-animation fade-up d2">to the <span class="text-color">Next Level</span></p> -->
            </div>
        </div>
    </header>
    


    <!-- QUOTE -->
    <div class="bg-light pt-80 pb-40">
        <div class="container">
            <div class="row">
                <div id="waypoints" class="col-sm-10 col-sm-offset-1 text-center scrolling-animation fade-up">
                    <p class="text-lg-2x">
                        <sup><i class="fa fa-quote-left fa-fw text-color"></i></sup>
                        <em class="text-gray"> Ireland's brightest star!</em>
                        <sup><i class="fa fa-quote-right fa-fw text-color"></i></sup>
                    </p>
                    <!-- <p class="text-2x"><em>Eddie Carey and the EC band.</em></p> -->
                </div>
                <i class="fa fa-microphone text-lg-2x text-color"></i>
            </div>
        </div>
    </div>



    <hr class=""/>


    <!-- NEWS -->
    <div id="news" class="bg-light pt-120 mb-100">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Latest <span class="text-color">News</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-20">
                <p class="text-gray text-center mb-80">Updates on the latest from Eddie Carey and Band.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="content-box content-box-sm bg-color">
                                <p class="mb-0 text-center">MARCH 2016</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <h3 class="mt-10 mb-0"><span class="text-uppercase">New website launched</span> 
                            - <em class="text-gray">www.eddiecarey.com</em></h3>
                        </div>
                    </div>
                    <hr class="hr-color mt-0 mb-40">
                    <div class="row mb-60">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                            <p>We have been working on our new website for some time now and we are sure you will agree it has been worth the wait. The new website, designed by Adaptive Office Services in Newcastle West is a sleek modern site with all the latest features. The site is a 'mobile first' design, it looks as good on youyr mobile phone as it does on large screen computers and tablet computers.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="content-box content-box-sm bg-color">
                                <p class="mb-0 text-center">FEBURARY 2016</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <h3 class="mt-10 mb-0"><span class="text-uppercase">Red Cow - Series of gigs planned</span> - <em class="text-gray">Dublin</em></h3>
                        </div>
                    </div>
                    <hr class="hr-color mt-0 mb-40">
                    <div class="row mb-60">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                            <p>The Eddie Carey band will be playing a series of gigs at Moran's Red Cow Inn in Dublin starting in May. No strangers to the venue, the band have been asked back to take part in a three-month long country music program running every Saturday night.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ABOUT EDDIE -->
    <div id="about" class="bg-image pt-120 pb-80 fixed-bg parallax-bg" data-stellar-background-ratio=".5"  style="background-image:url(images/background/road-bg0.jpg);">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-center text-lg">About <span class="text-color">Eddie</span></h2>
                <hr class="hr-color hr-sm hr-center mt-20 mb-20">
                <h4 class="text-center">The road so far</h4>
            </div>
            <div class="row mt-120 text-center">
                <div class="col-lg-7 text-center mb-40 scrolling-animation fade-left">
                    <p class="text-lg">
                        <sup><i class="fa fa-quote-left fa-fw text-gray"></i></sup>
                        Born in 1990, Eddie is a native of Newcastle West, Co. Limerick, where he and his family still live.  Its obvious enough that he comes from a musical background.
                        <br /><br />
                        When asked what age he was when he became aware of his interest in country music, Eddie says, "I started seriously listening to country music when I was really young.  I was only about 4 or 5 years old.  I listened to a little bit of everything, but I was really into the American country", he says, citing George Jones, Gene Watson, and Tammy Wynette as influences.  He played his first gig only a short while later when he was six.
                        <sup><i class="fa fa-quote-right fa-fw text-gray"></i></sup>
                    </p>
                    <!-- <p class="text-gray text-right"><em>- AOS</em></p> -->
                </div>
                <div class="col-lg-5 scrolling-animation fade-left d1">
                    <figure class="hover-mask-parent img-hover-zoom" >
                        <img class="img-responsive" src="images/people/eddie_pose.jpg" alt=""  />
                        <figcaption class="hidden hover-mask hover-mask-color hover-mask-zoom-out">
                            <div class="hover-mask-content text-center">
                                <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                <p class="">Lead Singer/Songwriter/Acoustic Guitar</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    

    
    <!-- BAND -->
    <div id="band" class="bg-light pt-120 pb-80">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Band <span class="text-color">Members</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-20">
                <p class="text-gray text-center mb-80">Here is the current Eddie Carey band line-up</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-40 scrolling-animation fade-left">
                    <h2 class="text-center">Jim <span class="text-color">Murray</span></h2>
                    <figure class="hover-mask-parent img-hover-zoom" >
                        <img class="img-responsive" src="images/people/band_01.jpg" alt=""  />
                        <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                            <div class="hover-mask-content text-center">
                                <h3 class="mb-10 text-bold">Jim Murray</h3>
                                <p class="">(Lead Guitar)</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-40 scrolling-animation fade-left">
                    <h2 class="text-center">Robert <span class="text-color">Quinlan</span></h2>
                    <figure class="hover-mask-parent img-hover-zoom" >
                        <img class="img-responsive" src="images/people/band_02.jpg" alt=""  />
                        <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                            <div class="hover-mask-content text-center">
                                <h3 class="mb-10 text-bold">Robert Quinlan </h3>
                                <p class="">(Bass)</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-40 scrolling-animation fade-left">
                    <h2 class="text-center">Stephen <span class="text-color">Keary</span></h2>
                    <figure class="hover-mask-parent img-hover-zoom" >
                        <img class="img-responsive" src="images/people/band_03.jpg" alt=""  />
                        <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                            <div class="hover-mask-content text-center">
                                <h3 class="mb-10 text-bold">Stephen Keary</h3>
                                <p class="">(Piano)</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-40 scrolling-animation fade-left">
                    <h2 class="text-center">Brian <span class="text-color">Mullen</span></h2>
                    <figure class="hover-mask-parent img-hover-zoom" >
                        <img class="img-responsive" src="images/people/band_04.jpg" alt=""  />
                        <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                            <div class="hover-mask-content text-center">
                                <h3 class="mb-10 text-bold">Brian Mullen</h3>
                                <p class="">(Drums)</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>  
            </div>
        </div>
    </div>


    <!-- STATISTICS -->
    <div id="stats" class="bg-image pt-120 pb-80 fixed-bg parallax-bg" data-stellar-background-ratio=".5"  style="background-image:url(images/background/guitar-bg.jpg);">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-center text-lg">Playing by <span class="text-color">Numbers</span></h2>
                <hr class="hr-color hr-sm hr-center mt-20 mb-20">
                <h4 class="text-center">No Half Measures - You Can Count On Us</h4>
            </div>
            <div class="row mt-120 text-center">
                <div class="col-md-3 mb-60">
                    <div class="progress-circle progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="5" data-speed="3000"></span></div>
                    <h2 class="text-bold text-lg">Musicians</h2>
                </div>
                <div class="col-md-3 mb-60">
                    <div class="progress-circle progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="12" data-speed="4000"></span></div>
                    <h2 class="text-bold text-lg">Tours</h2>
                </div>
                <div class="col-md-3 mb-60">
                    <div class="progress-circle progress-circle-plus progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="130" data-speed="5000"></span></div>
                    <h2 class="text-bold text-lg">Songs</h2>
                </div>
                <div class="col-md-3 mb-60">
                    <div class="progress-circle progress-circle-plus progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="160" data-speed="6000"></span></div>
                    <h2 class="text-bold text-lg">Gigs</h2>
                </div>
            </div>
        </div>
    </div>



    <!-- MUSIC -->
    <div id="music" class="pt-120 pb-120">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Sample <span class="text-color">Music</span></h2>
                <hr class="hr-gray hr-bold hr-sm hr-center">
                <p class="text-gray text-center mb-80">Sample tracks from the Eddie Carey Band.</p>
            </div>
            <div class="row mt-40">
                <div class="col-lg-8 col-lg-offset-2 scrolling-animation fade-up">
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/128771589&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </div>    
            </div>
            <div class="row mt-40">
                <div class="col-lg-8 col-lg-offset-2 scrolling-animation fade-up">
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/57649244&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </div>    
            </div>
        </div>
    </div>




    <!-- VIDEOS -->
    <div id="video" class="bg-light pt-120">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Use this for <span class="text-color">Videos</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-20">
                <p class="text-gray text-center mb-80">A small sample of Eddie Carey Band music videos.</p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 scrolling-animation scale-in">
                    <div class="macbook-mockup single-device">
                        <img class="img-responsive img-center" src="images/macbook-single.png" alt=""/>
                        <div class="macbook-mockup-content flexslider controls-lg no-bullet-nav effect-zoom" data-speed="4000">
                          <ul class="slides">
                            <li>
                                <div class="videoWrapper">
                                    <iframe width="600" height="338" src="https://www.youtube.com/embed/io-dpfHNd3A?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <span class="text-color text-bold">Hold You In My Arms</span>
                            </li>
                            <li>
                                <div class="videoWrapper">
                                    <iframe width="600" height="338" src="https://www.youtube.com/embed/IxcK46vvFBE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <span class="text-color text-bold">Help Yourself</span>
                            </li>
                            <li>
                                <div class="videoWrapper">
                                    <iframe width="600" height="338" src="https://www.youtube.com/embed/MXgAxrfAOOg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="border:2px solid color: #2997AB;"></iframe>
                                </div>
                                <span class="text-color text-bold">The One I loved Back Then</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- PHOTOS -->
    <div id="photos" class="bg-light pt-120">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Band <span class="text-color">Photos</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-20">
                <p class="text-gray text-center mb-40">A selection of photos of the band and various shows.</p>
            </div>
            <div class="filter-buttons text-center mb-40" data-target="#grid-1">
                <ul class="list-unstyled list-inline">
                    <li class="active filter-button scrolling-animation fade-right d3" data-filter="*">All</li>
                    <li class="filter-button scrolling-animation fade-right d2" data-filter=".cat-1">Eddie</li>
                    <li class="filter-button scrolling-animation fade-right d1" data-filter=".cat-2">EC Band</li>
                    <li class="filter-button scrolling-animation fade-right" data-filter=".cat-3">Performance</li>
                </ul>
            </div>
            <div id="grid-1" class="grid grid-gap-sm grid-3-cols fade-in">
                <div class="grid-item cat-1">
                    <a href="project-synchronized-all.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/thumb-1.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Great Design</h3>
                                    <p class="">#logos #apps</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-2">
                    <a href="project-all-devices-sliders.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_03.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Stephen Keary</h3>
                                    <p class="">Piano</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-1">
                    <a href="project-all-devices-scrolling.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/thumb-3.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">User Experience</h3>
                                    <p class="">#web #apps</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-2">
                    <a href="project-synchronized-macbook-iphone.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_01.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Jim Murray</h3>
                                    <p class="">Lead Guitar</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-1">
                    <a href="project-macbook-iphone-sliders.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/thumb-5.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Great Design</h3>
                                    <p class="">#web #design</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-2">
                    <a href="project-all-devices-scrolling.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_04.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Brian Mullen</h3>
                                    <p class="">Drums</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-3">
                    <a href="project-all-devices-sliders.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/thumb-7.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">UI/UX</h3>
                                    <p class="">#design #apps</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-3">
                    <a href="project-synchronized-all.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/thumb-8.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Great Design</h3>
                                    <p class="">#web #design</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-3">
                    <a href="project-desktop-scrolling.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/thumb-9.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Creative Portfolio</h3>
                                    <p class="">#web #apps</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="grid-item cat-2">
                    <a href="project-desktop-scrolling.html">
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_02.jpg" alt="" />
                            <figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Robert Quinlan</h3>
                                    <p class="">Bass</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

            </div>
        </div>
    </div>
    

    





    
    <br /><br /><br /><br /><br /><br />

    <!-- CHARTS -->
    <div id="guarantee" class="bg-image pt-120 pb-80 fixed-bg parallax-bg" data-stellar-background-ratio=".5"  style="background-image:url(images/background/blue-bg.jpg);">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-center text-lg">Guaranteed Results</h2>
                <hr class="hr-color hr-sm hr-center mt-20 mb-20">
                <h4 class="text-center">No Half Measures. Because you deserve the best.</h4>
            </div>
            <div class="row mt-120 text-center">
                <div class="col-md-3 col-md-offset-1 mb-60">
                    <div class="progress-circle mb-20 mt-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="100" data-speed="5000"></span></div>
                    <h3>Unique</h3>
                </div>
                <div class="col-md-4 mb-60">
                    <div class="progress-circle progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="100" data-speed="5000"></span></div>
                    <h2 class="text-bold text-lg">Responsive</h2>
                </div>
                <div class="col-md-3 mb-60">
                    <div class="progress-circle mb-20 mt-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="100" data-speed="5000"></span></div>
                    <h3>Creative</h3>
                </div>
            </div>
        </div>
    </div>
    

    <!-- FAN -->
    <div id="fan" class="bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 pt-180 pb-180 text-center">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 scrolling-animation fade-up">
                            <h2 class="text-lg">Love your country!</h2>
                            <h3 class="text-gray mb-40 text-color text-bold">Keep it country</h3>
                            <p>
                                Country Music, or Country and Western, refers to the genre of music which originated in the rural Southern and Western United States. It is typified by the heavy use of guitars, steel guitars, and fiddles, and, like its root style blues, an accented 2nd and 4th beat in the drums. 
                            </p>
                            <p>
                                Since the mid-60's, Nashville has been the dominant city involved in this form of music and is even nick-named Music City. However, other cities such as Branson, New Orleans, Jackson, Austin, Stillwater and Albuquerque have also played important roles in its progression. 
                            </p>
                            <p>
                                Although it was born and gained huge success in America, it is also popular in Australia and Canada and has moderate prominence in Germany, the United Kingdom, and <span class="text-color">Ireland</span>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-image col-full-height hidden-sm hidden-xs" style="background-image:url(images/background/fan.jpg);">
                </div>
            </div>
        </div>
    </div>
    

    <!-- COLLAPSE SECTION -->
    <div id="collapse" class="text-center">
        <a class="btn btn-rect btn-xl btn-block" data-toggle="collapse" href="#resume">Long Answer<br>
            <span class="btn-subtext">Check my full Resume</span>
        </a>
    </div>
    <div class="collapse scroll-on-show" id="resume">
        <div class="bg-gray pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2 class="text-uppercase text-bold text-center mb-40 text-lg">My <span class="text-color">Education</span></h2>
                        <img class="img-responsive img-center img-circle mb-60" src="images/education.jpg" alt="" />
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="content-box content-box-sm bg-color">
                                    <p class="mb-0 text-center">2010 - 2012</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <h3 class="mt-10 mb-0"><span class="text-uppercase">Masters Degree</span> - <em class="text-gray">M.I.T.</em></h3>
                            </div>
                        </div>
                        <hr class="hr-color mt-0 mb-40">
                        <div class="row mb-60">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="content-box content-box-sm bg-color">
                                    <p class="mb-0 text-center">2007 - 2010</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <h3 class="mt-10 mb-0"><span class="text-uppercase">Bachelor Degree</span> - <em class="text-gray">UCLA</em></h3>
                            </div>
                        </div>
                        <hr class="hr-color mt-0 mb-40">
                        <div class="row mb-60">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2 class="text-uppercase text-bold text-center mb-40 text-lg">Work <span class="text-color">Experience</span></h2>
                        <img class="img-responsive img-center img-circle mb-60" src="images/working.jpg" alt="" />
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="content-box content-box-sm bg-color">
                                    <p class="mb-0 text-center">2015 - Now</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <h3 class="mt-10 mb-0"><span class="text-uppercase">Lead Designer</span> - <a href="#link"><em class="text-gray text-hover-color ">MegaSoft.com</em></a></h3>
                            </div>
                        </div>
                        <hr class="hr-color mt-0 mb-40">
                        <div class="row mb-60">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="content-box content-box-sm bg-color">
                                    <p class="mb-0 text-center">2014 - 2015</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <h3 class="mt-10 mb-0"><span class="text-uppercase">Senior Designer</span> - <a href="#link"><em class="text-gray text-hover-color ">Orange.com</em></a></h3>
                            </div>
                        </div>
                        <hr class="hr-color mt-0 mb-40">
                        <div class="row mb-60">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="content-box content-box-sm bg-color">
                                    <p class="mb-0 text-center">2012 - 2014</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <h3 class="mt-10 mb-0"><span class="text-uppercase">Designer</span> - <a href="#link"><em class="text-gray text-hover-color ">ThatCompany.com</em></a></h3>
                            </div>
                        </div>
                        <hr class="hr-color mt-0 mb-40">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <!-- BLOCK BUTTON -->
    <div class="text-center">
        <a class="btn btn-rect btn-xl btn-block" href="https://wrapbootstrap.com/user/qthemes" target="_blank">Buy Now<br>
            <span class="btn-subtext">You won't regret it</span>
        </a>
    </div>
    


    <!-- TESTIMONIALS -->
    <div id="testimonials" class="bg-gray pt-120 pb-80">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Satisfied <span class="text-color">Clients</span></h2>
                <hr class="hr-gray hr-bold hr-sm hr-center">
            </div>
            <div class="row mt-100 mb-80">
                <div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-right d2">
                    <a href="#link"><img class="img-responsive img-hover-opacity" src="images/client-logo-1.png" alt="" /></a>
                </div>
                <div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-right d1">
                    <a href="#link"><img class="img-responsive img-hover-opacity" src="images/client-logo-2.png" alt="" /></a>
                </div>
                <div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-in">
                    <a href="#link"><img class="img-responsive img-hover-opacity" src="images/client-logo-3.png" alt="" /></a>
                </div>
                <div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-in">
                    <a href="#link"><img class="img-responsive img-hover-opacity" src="images/client-logo-4.png" alt="" /></a>
                </div>
                <div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-left d1">
                    <a href="#link"><img class="img-responsive img-hover-opacity" src="images/client-logo-1.png" alt="" /></a>
                </div>
                <div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-left d2">
                    <a href="#link"><img class="img-responsive img-hover-opacity" src="images/client-logo-2.png" alt="" /></a>
                </div>
            </div>
            <div class="row scrolling-animation fade-up">
                <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="testimonials flexslider no-direction-nav effect-slide" data-speed="5000">
                        <ul class="slides">
                            <li class="icon-box icon-box-round mb-40 icon-top-left">
                                <span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
                                <div class="icon-box-content bg-light">
                                    <h3 class="text-color"><img class="img-circle" src="images/client-1.jpg" alt="" />John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
                                    <p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thisCompany.com</a></em></p>
                                </div>
                            </li>
                            <li class="icon-box icon-box-round mb-40 icon-top-left">
                                <span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
                                <div class="icon-box-content bg-light">
                                    <h3 class="text-color"><img class="img-circle" src="images/client-2.jpg" alt="" />Jane Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
                                    <p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thatCompany.com</a></em></p>
                                </div>
                            </li>
                            <li class="icon-box icon-box-round mb-40 icon-top-left">
                                <span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
                                <div class="icon-box-content bg-light">
                                    <h3 class="text-color"><img class="img-circle" src="images/client-1.jpg" alt="" />John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
                                    <p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thisCompany.com</a></em></p>
                                </div>
                            </li>
                            <li class="icon-box icon-box-round mb-40 icon-top-left">
                                <span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
                                <div class="icon-box-content bg-light">
                                    <h3 class="text-color"><img class="img-circle" src="images/client-2.jpg" alt="" />Jane Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
                                    <p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thatCompany.com</a></em></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- CONTACT -->
    <div id="contact" class="bg-image pt-160 pb-120 fixed-bg" style="background-image:url('images/background/blue-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-md-offset-1">
                    <h2 class="text-uppercase text-bold mb-40 scrolling-animation fade-up">Drop me a line</h2>
                    <form class="contact-form text-dark mb-120 scrolling-animation fade-up d1" action="php/contact.php" method="post" novalidate>
                        <div class="form-i-right">
                            <input class="form-control input-rect input-solid-white mb-20 requiredField" placeholder="Your Name" type="text" name="name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-i-right">
                            <input class="form-control input-rect input-solid-white mb-20 requiredField" placeholder="Your Email" type="email" name="email">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-i-right">
                            <textarea class="mb-20 form-control input-rect input-solid-white requiredField" rows="5" placeholder="Your Message" name="message"></textarea>
                            <i class="fa fa-comments"></i>
                        </div>
                        <button type="submit" class="btn btn-block btn-rect btn-3d">Send Message</button>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        <p class="form-error empty-fields"><i class="fa fa-exclamation-triangle"></i>Please fill the required fields</p>
                        <p class="form-error email-error"><i class="fa fa-exclamation-triangle"></i>Email looks invalid</p>
                        <p class="form-success"><i class="fa fa-check"></i>Your message has been sent</p>
                    </form>
                    <h2 class="text-uppercase text-bold mb-20 scrolling-animation fade-up">Contact Information</h2>
                    <div class="scrolling-animation fade-up d1">
                        <p>250 W Broadway</p>
                        <p>New York, NY 10013</p>
                        <p>(123) 456 - 7890 </p>
                        <p><a href="mailto:mail@example.com" class="text-hover-color">mail@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- SERVICES -->
    <div id="services" class="bg-light pt-120">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">See how I can <span class="text-color">help you</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-20"/>
                <p class="text-gray text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum.</p>
            </div>
            <div class="row mt-160">
                <div class="col-lg-5 text-center mt-40 mb-40 scrolling-animation fade-left">
                    <h3 class="text-lg text-bold mb-10">Responsive Design</h3>
                    <h3 class="text-gray mb-40 text-color text-bold">Why</h3>
                    <p class="text-lg">
                        <sup><i class="fa fa-quote-left fa-fw text-gray"></i></sup>
                        Day by day, the number of devices, platforms, and browsers that need to work with your site grows. Responsive web design represents a fundamental shift in how we’ll build websites for the decade to come.
                        <sup><i class="fa fa-quote-right fa-fw text-gray"></i></sup>
                    </p>
                    <p class="text-gray text-right"><em>- Jeffrey Veen</em></p>
                </div>
                <div class="col-lg-7 scrolling-animation fade-left d1">
                    <div class="multiple-devices synchronized-sliders">
                        <div class="macbook-mockup single-device">
                            <img class="img-responsive img-center" src="images/macbook-single.png" alt=""/>
                            <div class="macbook-mockup-content flexslider no-direction-nav no-bullet-nav effect-zoom" data-speed="2500">
                              <ul class="slides">
                                <li>
                                  <img src="images/macbook-screen-1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="images/macbook-screen-2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="images/macbook-screen-3.jpg" alt="" />
                                </li>
                              </ul>
                            </div>
                            <a href="#desktop-modal" data-toggle="modal"><span style="top:-5%;left:10%;" class="poi">Click Me</span></a>
                        </div>
                        <div class="iphone-mockup single-device">
                            <img class="img-responsive img-center" src="images/iphone-single.png" alt=""/>
                            <div class="iphone-mockup-content flexslider pause no-direction-nav no-bullet-nav effect-slide" data-speed="2500">
                                <ul class="slides">
                                <li>
                                  <img src="images/iphone-screen-1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="images/iphone-screen-2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="images/iphone-screen-3.jpg" alt="" />
                                </li>
                                </ul>
                            </div>
                            <a href="#mobile-modal" data-toggle="modal"><span style="top:-8%;right:-15%;" class="poi delay-animation">Click Me</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-80 mb-80"/>
            
            <div class="pb-80 hidden-xs"></div>
            
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-lg-push-6 text-center mt-100 mb-40  scrolling-animation fade-right">
                    <h3 class="text-lg text-bold mb-10">Creative UX / UI</h3>
                    <h3 class="text-gray mb-40 text-color text-bold">What</h3>
                    <p class="text-lg">
                        <sup><i class="fa fa-quote-left fa-fw text-gray"></i></sup>
                        A great product experience starts with UX followed by UI. Both are essential for the product’s success.
                        <sup><i class="fa fa-quote-right fa-fw text-gray"></i></sup>
                    </p>
                    <p class="text-gray text-right"><em>- Rahul Varshney</em></p>
                </div>
                <div class="col-lg-6 col-lg-pull-6 scrolling-animation fade-right d1">
                    <div class="imac-mockup single-device">
                        <img class="img-responsive" src="images/imac-single.png" alt=""/>
                        <div class="imac-mockup-content">
                            <div class="twentytwenty-container">
                                <!-- The before image is first -->
                                <img class="img-responsive" src="images/code.png" alt="" />
                                <!-- The after image is last -->
                                <img class="img-responsive" src="images/mac-thumb.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection