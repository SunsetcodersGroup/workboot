<?php

namespace Modules;

/**
 * Team class
 */
class Team
{
    /**
     * Render the team page
     * @return void
     */
    public static function callToPage(): void
    {
        ?>
        <div id="fh5co-trainer">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Meet the Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="images/andrew.jpg" alt="Web Developer"></a>
                            <div class="title">
                                <h3><a href="#">Andrew Jeffries</a></h3>
                                <span>Web Development</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">
                                    <li><a href="https://www.linkedin.com/in/andrew-jeffries-8abb35107/"><i
                                                class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="images/simon.jpg" alt="Web Developer"></a>
                            <div class="title">
                                <h3><a href="#">Simon Mitchell</a></h3>
                                <span>Web Development</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="images/mathew.jpg" alt="App Developer"></a>
                            <div class="title">
                                <h3><a href="#">Matthew Norman</a></h3>
                                <span>App Development</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="images/186-1-4.jpg" alt="System Lord"></a>
                            <div class="title">
                                <h3><a href="#">Nathanial Marsh</a></h3>
                                <span>SystemLord</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">

                                    <li><a href="https://www.linkedin.com/in/nathanial-marsh-6614367a/"><i
                                                class="icon-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="images/copyrighter.jpg"
                                             alt="Content Management"></a>
                            <div class="title">
                                <h3><a href="#">Sariah Robinson</a></h3>
                                <span>Content Management</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">

                                    <li><a href="https://www.facebook.com/sariah.robinson.948"><i
                                                class="icon-facebook"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
