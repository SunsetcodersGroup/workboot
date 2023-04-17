<?php

namespace Modules;

/**
 * AppDevelopment class
 */
class AppDevelopment
{
    /**
     * Render page
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
                                <h1>App Development</h1>
                                <h2>Some of our Latest works are listed below.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div>Cause its the end of the world as we know it.</div>
        <?php
    }
}