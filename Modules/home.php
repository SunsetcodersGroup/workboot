<?php

namespace Modules;

/**
 * Home class
 */
class home
{

    /**
     * Render home page
     * @return void
     */
    public static function callToPage(): void
    {
        ?>
        <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);"
                data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Sunsetcoders Web Development</h1>
                                <h2>Let us shape your online presence without the jargon! We specialize in web
                                    development in order to help you promote your business with a secure, user-friendly,
                                    and responsive website.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="fh5co-services" class="fh5co-bg-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span><img class="img-responsive" src="images/webdevelopment.svg"
                                       alt="FEATURED IMAGE"></span>
                            <h3>Website Design & Development</h3>
                            <p>A website is a necessity no matter your industry. <br><br> We build unique, user-centered
                                digital experiences combining design and strategy to tell your brand's story. </p>
                            <p><a href="?WebDevelopment" class="btn btn-primary btn-outline btn-sm">More <i
                                        class="icon-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span><img class="img-responsive" src="images/logodesign.svg" alt="FEATURED IMAGE"></span>
                            <h3>Logo Design</h3>
                            <p>Let our team </p>
                            <p><a href="?LogoDesign" class="btn btn-primary btn-outline btn-sm">More <i
                                        class="icon-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span><img class="img-responsive" src="images/appdevelop.svg" alt="FEATURED IMAGE"></span>
                            <h3>App Development</h3>
                            <p>App Developement</p>
                            <p><a href="?AppDevelopment" class="btn btn-primary btn-outline btn-sm">More <i
                                        class="icon-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        Team::callToPage();
        pricing::callToPage();

        ?>

        <div id="fh5co-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Portfolio</h2>
                        <p>Some of out latest work are listed below.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <ul id="fh5co-portfolio-list">

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/wkvGardening.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Web Design</span>
                                        <h2>WKV Gardening</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/FeedMe.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Web Design</span>
                                        <h2>Feed The Hungry - Mildura</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/twilight.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Web Design</span>
                                        <h2>Twilight World Online</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/nanobubble.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Logo Design</span>
                                        <h2>NanoBubble</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/Studio458.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Web Design</span>
                                        <h2>Studio 458</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="two-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/happydancer.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Web Design</span>
                                        <h2>Happy Dancer Photography</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/oak&rye.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <span>Logo Design</span>
                                        <h2>Oak & Rye</h2>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-testimonial" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Happy Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/person3.jpg" alt="user">
                                        </figure>
                                        <span>Nikki Jade, via <a href="#" class="facebook">Facebook</a></span>
                                        <blockquote>
                                            <p>&ldquo;These guys are fantastic.. great at what they do and community
                                                minded. They have donated many hours already to assisting Feed the
                                                hungry with a website. 5 stars.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/person3.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the
                                                Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/person3.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the
                                                blind texts. Separated they live in Bookmarksgrove right at the coast of
                                                the Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2><span> Lets us help you promote your business..</span></h2>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p><a href="#" class="btn btn-default btn-lg">Become a Client</a></p>
                    </div>
                </div>
            </div>
        </div>


        <?php
    }

}
