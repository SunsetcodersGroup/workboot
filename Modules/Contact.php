<?php

namespace Modules;

/**
 * Contact class
 */
class Contact
{

    /**
     * Render the call to page
     * @return void
     */
    public static function callToPage(): void
    {
        ?>
        <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
                style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Contact Us</h1>
                                <h2>Drop us a line and we will get back to you...</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="contact-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105583.40921921442!2d142.06356407916988!3d-34.210721045366284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ac30469ecf799c3%3A0x50579a430a0d4f0!2sMildura+VIC+3500!5e0!3m2!1sen!2sau!4v1527572192890"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- END map -->

        <div id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-push-1 animate-box">

                        <div class="fh5co-contact-info">
                            <h3>Contact Information</h3>
                            <ul>
                                <li class="address">PO Box 597 Merbein Victoria Australia</li>
                                <li class="phone"><a href="tel://0412151850">0412151850</a></li>
                                <li class="email"><a href="mailto:contact@sunsetcoders.com.au">contact@sunsetcoders.com.au</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6 animate-box">
                        <h3>Get In Touch</h3>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <!-- <label for="fname">First Name</label> -->
                                    <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                </div>
                                <div class="col-md-6">
                                    <!-- <label for="lname">Last Name</label> -->
                                    <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <!-- <label for="email">Email</label> -->
                                    <input type="text" id="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <!-- <label for="subject">Subject</label> -->
                                    <input type="text" id="subject" class="form-control"
                                           placeholder="Your subject of this message">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                              placeholder="Say something about us"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Sunsetcoders Web Development Team <br> <span> Pay Now and <br> Get <span
                                    class="percent">35%</span> Discount</span></h2>
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
