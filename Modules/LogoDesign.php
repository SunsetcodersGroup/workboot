<?php

namespace Modules;

/**
 * Logo Design class
 */
class LogoDesign
{
    /**
     * Render logo
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
                                <h1>Logo Design</h1>
                                <h2>Some of our Latest works are listed below.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="body-content">
            <h2>Logo Design</h2>
            Sunsetcoders can not only create exciting dynamic and static websites, we are also very adept at capturing
            your brand identity through unique logo design. Having a designer that knows your brand inside and out will
            make for a much more consistent use of your brand imagery and color scheme throughout your website. They can
            then also provide logo designs for use on Social Media, Video Productions and on any print collateral you'd
            like us to design for your organization.
        </div>
        <?php
    }
}

