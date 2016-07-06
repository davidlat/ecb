@extends('layouts.master')

@section('content')

<?php

// $img = 'eddie01.jpg';

// if(isset($_GET['img'])){
//     $img = $_GET['img']; 
// }
// echo $img;
?>

    <!-- FB PLUGIN SCRIPT -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=383073861706852";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- HEADER -->
    <header id="home" class="bg-image fixed-bg window-height overlay-on-scroll parallax-bg" data-stellar-background-ratio=".5" style="background-image:url(images/background/eddie02.jpg);">
        <div class="middle-align-content">
            <div class="container text-lg parallax-move-down">         
                <!-- <h2 class="blessed ecb_md scrolling-animation fade-down d2">the</h2> -->
                <h1 class="blessed ecb_lg scrolling-animation scale-in" style="color:#E6C828;color:#D87300;">Eddie Carey</h1>
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

                    <div class="row" style="padding: 10px;font-size:20px;">
                        <div class="col-xs-5 col-sm-4 col-md-3 bg-color" style="border-bottom: 2px solid #2898AC;">
                            <div class="content-box content-box-sm">
                                <p class="mb-0 text-center">JUN 2016</p>
                            </div>
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <span class="text-uppercase">New website launched</span> 
                             <em class="text-gray hidden-sm">www.eddiecarey.com</em>
                        </div>
                    </div>
                    <div class="row mb-60">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                            <p>We have been working on our new website for some time now and we are sure you will agree it has been worth the wait. The new website, designed by Adaptive Office Services in Newcastle West is a sleek modern site with all the latest features. 
                                <br />
                                <span class="visible-sm">www.eddiecarey.com</span>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding: 10px;font-size:20px;">
                        <div class="col-xs-5 col-sm-4 col-md-3 bg-color" style="border-bottom: 2px solid #2898AC;">
                            <div class="content-box content-box-sm">
                                <p class="mb-0 text-center">JUN 2016</p>
                            </div>
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <span class="text-uppercase">New music</span> 
                             <em class="text-gray hidden-sm"></em>
                        </div>
                    </div>
                    <div class="row mb-60">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
                            <p>Eddie and the band have been very busy rehearsing new song's getting them just right for the launch. The dance programme  is made of  slow set's as well  as Eddie's big Ballad's and old favourites with a good splash of Jiving & Rock
                                <br /><br />
                                Here is a sample from these latest tracks:
                                <br /><br />
                                <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/268528051&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"> <!-- FB page plugin row -->
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-lg-8 col-md-8 col-sm-7">
                        <!-- Follow page panel -->
                        <div class="fb-page" data-href="https://www.facebook.com/EddieCareyBand/" data-tabs="timeline" data-width="500" data-hide-cta="true" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/EddieCareyBand/">
                                    <a href="https://www.facebook.com/EddieCareyBand/">Eddie Carey Band</a>
                                </blockquote>
                            </div>
                        </div>          
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5 mt-20" style="padding-left:20px;"> 
                        <!-- Follow button -->     
                        <div class="fb-follow" data-href="https://www.facebook.com/EddieCareyBand/timeline" data-width="200" data-layout="standard" data-show-faces="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ABOUT EDDIE -->
    <div id="about" class="bg-image pt-120 pb-80 fixed-bg parallax-bg" data-stellar-background-ratio=".5"  style="background-image:url(images/background/road-bg.jpg);">
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
                        <img class="img-responsive" src="images/people/eddie_pose02.jpg" alt=""  />
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
    

    <hr class=""/>

    <!-- DATES -->
    <div id="dates" class="bg-light pt-120 mb-100">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Upcoming <span class="text-color">Dates</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-20">
                <p class="text-gray text-center mb-80">Come see one of our upcoming shows</p>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">



                    <div class="row mb-20 scrolling-animation fade-left d1" style="padding: 10px;font-size:20px;">
                        <div class="col-xs-5 col-sm-4 col-md-3 bg-color" style="border-bottom: 2px solid #2898AC;">
                            <div class="content-box content-box-sm">
                                <p class="mb-0 text-center">August 2016</p>
                            </div>
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <span class="text-uppercase">Harvest & Country Festival</span> 
                             <em class="text-gray hidden-sm">- Thurles</em>
                        </div>
                        <div class="col-xs-5 col-sm-4 col-md-3">
                            &nbsp;
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <font style='font-size:0.8em;'>More information <a style='color:#2898AC;' href="https://www.facebook.com/ThurlesHarvestFestival/posts/610487292444917" target="_blank">here</a>.</font>
                        </div>    
                    </div>

                    <div class="row mb-20 scrolling-animation fade-left d2" style="padding: 10px;font-size:20px;">
                        <div class="col-xs-5 col-sm-4 col-md-3 bg-color" style="border-bottom: 2px solid #2898AC;">
                            <div class="content-box content-box-sm">
                                <p class="mb-0 text-center">August 2016</p>
                            </div>
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <span class="text-uppercase">SPIL Festival</span> 
                             <em class="text-gray hidden-sm">Wexford</em>
                        </div>

                        <div class="col-xs-5 col-sm-4 col-md-3">
                            &nbsp;
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <font style='font-size:0.8em;'>More information to be announced.</font>
                        </div>    
                    </div>
                    
                    <div class="row mb-20 scrolling-animation fade-left d2" style="padding: 10px;font-size:20px;">
                        <div class="col-xs-5 col-sm-4 col-md-3 bg-color" style="border-bottom: 2px solid #2898AC;">
                            <div class="content-box content-box-sm">
                                <p class="mb-0 text-center">August 2016</p>
                            </div>
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <span class="text-uppercase">Belfast Festival</span> 
                             <em class="text-gray hidden-sm">Belfast</em>
                        </div>

                        <div class="col-xs-5 col-sm-4 col-md-3">
                            &nbsp;
                        </div>
                        <div class="content-box content-box-sm col-xs-7 col-sm-8 col-md-9" style="border-bottom: 2px solid #2898AC;border-left: 4px solid #2898AC;">
                            <font style='font-size:0.8em;'>Coming soon to Donegal, Cookstown, Dublin, Kerry & Wexford</font>
                        </div>    
                    </div>
                    
                    <br /><br />
                    <p>Other dates to be confirmed</p>

                </div>
            </div>
        </div>
    </div>



    <!-- STATISTICS -->
    <div id="stats" class="bg-image pt-120 pb-80 fixed-bg parallax-bg" data-stellar-background-ratio=".5"  style="background-image:url(images/background/guitar.jpg);">
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
                    <div class="progress-circle progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="3" data-speed="4000"></span></div>
                    <h2 class="text-bold text-lg">Tours</h2>
                </div>
                <div class="col-md-3 mb-60">
                    <div class="progress-circle progress-circle-plus progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="10" data-speed="5000"></span></div>
                    <h2 class="text-bold text-lg">Songs</h2>
                </div>
                <div class="col-md-3 mb-60">
                    <div class="progress-circle progress-circle-plus progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="25" data-speed="6000"></span></div>
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
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/268377370&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </div> 
            </div>
            <div class="row mt-40">
                <div class="col-lg-8 col-lg-offset-2 scrolling-animation fade-up">
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/268377524&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </div> 
            </div>
            <div class="row mt-40">
                <div class="col-lg-8 col-lg-offset-2 scrolling-animation fade-up">
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/268377626&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </div> 
            </div>            
            <div class="row mt-40">
                <div class="col-lg-8 col-lg-offset-2 scrolling-animation fade-up">
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/265563736&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </div> 
            </div>


            <p class="text-gray text-center">Duet with Lisa Stanley</p>

        </div>
    </div>


    <hr class=""/>


    <!-- VIDEOS -->
    <div id="video" class="bg-light pt-120">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Sample <span class="text-color">Videos</span></h2>
                <hr class="hr-gray hr-bold hr-sm hr-center">
                <p class="text-gray text-center mb-80">A selection of videos from the Eddie Carey Band.</p>
                        </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 scrolling-animation scale-in">
                    <div class="macbook-mockup single-device">
                        <img class="img-responsive img-center" src="images/macbook-single.png" alt=""/>
                        <div class="macbook-mockup-content flexslider controls-lg no-bullet-nav effect-zoom" data-speed="4000">
                          <ul class="slides">
                            <li>
                                <div class="videoWrapper">
                                    <iframe width="600" height="338" src="https://www.youtube.com/embed/B_wFE8UNXoE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <span class="text-color text-bold">I Told You So</span>
                            </li>
                            <li>
                                <div class="videoWrapper">
                                    <iframe width="600" height="338" src="https://www.youtube.com/embed/io-dpfHNd3A?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <span class="text-color text-bold">Hold You In My Arms</span>
                            </li>
                            <li>
                                <div class="videoWrapper">
                                    <iframe width="600" height="338" src="https://www.youtube.com/embed/cbbCWv7s-Cg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <span class="text-color text-bold">Seashores Of Old Mexico</span>
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



    <!-- BLOCK BUTTON -->
    <div class="text-center">
        <a class="btn btn-rect btn-xl btn-block scrollto" href="#contact">Contact Us<br>
            <span class="btn-subtext">Details below</span>
        </a>
    </div>
    


    <!-- PHOTOS -->
    <div id="photos" class="bg-light pt-120 pb-120">
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
                    <li class="filter-button scrolling-animation fade-right" data-filter=".cat-3">Out & About</li>
                </ul>
            </div>
            <div id="grid-1" class="grid grid-gap-sm grid-3-cols fade-in">
                <div class="grid-item cat-1">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/eddie_01.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                    <p class="">www.eddiecarey.com</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-2">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_03.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey Band</h3>
                                    <p class="">Desmond Castle - Newcastle West</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-1">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/eddie_02.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                    <p class="">www.eddiecarey.com</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-2">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_01.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey Band</h3>
                                    <p class="">Newcastle West</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-1">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/eddie_03.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                    <p class="">www.eddiecarey.com</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-3">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/oao_01.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                    <p class="">Out & About</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-3">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/oao_02.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                    <p class="">Out & About</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-3">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/oao_03.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey</h3>
                                    <p class="">Out & About</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>
                <div class="grid-item cat-2">
                    <!-- <a href=""> -->
                        <figure class="hover-mask-parent img-hover-zoom">
                            <img class="img-responsive" src="images/people/band_02.jpg" alt="" />
                            <figcaption class="hidden-sm hover-mask hover-mask-color hover-mask-zoom-out">
                                <div class="hover-mask-content text-center">
                                    <h3 class="mb-10 text-bold">Eddie Carey Band</h3>
                                    <p class="">Live</p>
                                </div>
                            </figcaption>
                        </figure>
                    <!-- </a> -->
                </div>

            </div>
        </div>
    </div>
    

    <hr class=""/>

    <!-- SPONSOR -->
    <div id="news" class="bg-light pt-60 mb-60">
        <div class="container">
            <div class="scrolling-animation fade-up">
                <h2 class="text-lg text-center">Main <span class="text-color">Sponsor</span></h2>
                <hr class="hr-gray hr-center hr-sm hr-bold mb-0">
                <p class="text-gray text-center mb-80">JDP Graphic Design and Print</p>
            </div>
            <div class="row col-sm-10 col-sm-offset-1" >

                <p class="mb-0 text-center">
                    JDP Graphic Design and print are based in Dungannon  Co. Tyrone and were started by Don Casey   in1990.
Back then we were initially  a graphic design studio  but due to overwhelming demand we installed one of the first digital printers in Tyrone
Some 26 years later JDP print everything  Business Stationery, Posters, Flyers , Pop up Stands, Backdrops, Signage, Promotional Merchandise
T.Shirts & Vehicle Graphics.
                </p>

            </div>
        </div>
    </div>




    <!-- CONTACT -->
    <div id="contact" class="bg-image pt-160 pb-80 fixed-bg" style="background-image:url('images/background/mic-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-md-offset-1">
                    <h2 class="text-uppercase text-bold mb-40 scrolling-animation fade-up">Drop us a line</h2>
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
                        <!-- <p class="form-success"><i class="fa fa-check"></i>Your message has been sent</p> -->
                        <p class="form-success"><p class="form-error empty-fields"><i class="fa fa-exclamation-triangle"></i>ERROR: PLease send email to sales@jdpromotions.com</p></p>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>


@endsection
