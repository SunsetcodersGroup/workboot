<?php

namespace Modules;

/**
 * Description of description
 *
 * @author Andrew Jeffries
 */
class WebDevelopment
{

    /**
     * Render the call to page
     * @return void
     */
    public static function callToPage(): void
    {
        ?>
        <style>
            .webdevelopment-content {
                clear: both;
                padding-top: 50px;
                padding-bottom: 50px;
                margin: 0 auto;
                max-width: 1024px;
            }

            .webdevelopment-content h2 {
                height: 50px;
                color: orange;
                text-transform: uppercase;
                margin-top: 30px;
            }
        </style>
        <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
                style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Web Development</h1>
                                <h2>Some of our Latest works are listed below.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="webdevelopment-content">
            <h2>Web Development</h2>
            Looking for a Web development company to create a smooth functioning, mobile-friendly lead generation
            website? Straight North has been getting that job done for clients since 1997.

            Specialists in custom website development services, our team is proficient in all aspects of the front-end
            and back-end skills needed for affordable lead generation websites, including responsive Web design and open
            source technologies.
            Beyond technical expertise, our staff is proficient in the key areas that make your new website successful,
            including SEO, user experience (UX) and conversion rate optimization (CRO).
            Why Straight North Is a Leading Custom Web Development Agency
            <h2>Expertise & Experience</h2>
            Our full-time, professional, in-house development team is highly skilled in responsive Web design, HTML,
            CSS, JavaScript, JQuery, Ajax, PHP, MySQL, Git, Drupal, WordPress, Apache and Linux. The success of your
            project never depends on the availability or skills of a single individual.
            <h2>Focus on Lead Generation</h2>
            Unlike many Web developers, we offer a full suite of Internet marketing services. We apply our knowledge of
            SEO, UX and CRO to every project, so that your new, mobile-friendly website is configured for maximum
            exposure and conversion capability.
            <h2>Proven, Documented Process</h2>
            Website projects are complex and require detailed planning and execution. Our proven, time-tested and
            documented process enables us to maintain a consistently high level of quality while meeting deadlines and
            keeping your project on budget.
        </div>
        <?php
    }
}
