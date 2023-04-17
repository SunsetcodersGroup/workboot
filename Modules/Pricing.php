<?php

namespace Modules;

/**
 * Pricing class
 */
class Pricing
{
    /**
     * Render pricing pages
     * @return void
     */
    public static function callToPage(): void
    {
        ?>
        <div id="fh5co-pricing">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Website Packages</h2>
                        <p>Please select from one of our cost effective website packages.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing">
                        <div class="col-md-3 animate-box">
                            <div class="price-box">
                                <h2 class="pricing-plan">Basic</h2>
                                <div class="price"><sup class="currency">$</sup>100</div>
                                <ul class="classes">
                                    <li>1 Page</li>
                                    <li class="color">Wordpress</li>
                                    <li>Social Media</li>
                                    <li class="color">Google Maps</li>
                                </ul>
                                <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                            </div>
                        </div>

                        <div class="col-md-3 animate-box">
                            <div class="price-box">
                                <h2 class="pricing-plan">Standard</h2>
                                <div class="price"><sup class="currency">$</sup>300</div>
                                <ul class="classes">
                                    <li>Up To 5 Pages</li>
                                    <li class="color">Gallery</li>
                                    <li>Social Media</li>
                                    <li class="color">Google Maps</li>
                                </ul>
                                <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                            </div>
                        </div>

                        <div class="col-md-3 animate-box">
                            <div class="price-box popular">
                                <h2 class="pricing-plan pricing-plan-offer">Full Package <span>Best Offer</span></h2>
                                <div class="price"><sup class="currency">$</sup>1000</div>
                                <ul class="classes">
                                    <li>Unlimited Pages</li>
                                    <li class="color">Logo Design</li>
                                    <li>Custom CMS</li>
                                    <li class="color">Google Maps</li>
                                    <li>Social Media</li>
                                    <li class="color">12 Months Hosting</li>
                                </ul>
                                <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                            </div>
                        </div>

                        <div class="col-md-3 animate-box">
                            <div class="price-box">
                                <h2 class="pricing-plan">ECommerce</h2>
                                <div class="price"><sup class="currency">$</sup>2000</div>
                                <ul class="classes">
                                    <li>Unlimited Pages</li>
                                    <li class="color">Logo Design</li>
                                    <li>Shopping Cart</li>
                                    <li class="color">Social Media</li>
                                    <li>Custom CMS</li>
                                    <li class="color">Google Maps</li>
                                    <li>Social Media</li>
                                    <li class="color">12 Months Hosting</li>
                                </ul>
                                <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
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
                        <h2><span class="percent">Sunset</span>coders Web Development Team <br></h2>
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
