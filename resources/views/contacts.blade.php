@extends('layouts.master')


@section('content')
    <div class="main">

        <!--<div id="map"></div>-->

        <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

        <section class="container clearfix">

            <div class="four columns">

                <div class="widget_contacts">

                    <h3 class="widget-title">Our Contacts</h3>

                    <ul class="our-contacts">

                        <li class="address">
                            <b>Address Info 1:</b>
                            <p>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</p>
                        </li>
                        <li class="phone">
                            <b>Phone:</b>&nbsp;<span>+1 (234) 567-8901</span> <br />
                            <b>FAX:</b>&nbsp;<span>+1 (234) 567-8902</span>
                        </li>
                        <li>
                            <b>Email: <a href="mailto:testmail@sitename.com">testmail@sitename.com</a></b>
                        </li>

                    </ul><!--/ .our-contacts-->

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

            <div class="twelve columns">

                <div id="contact">

                    <h3 class="widget-title">Contact Us</h3>

                    <form method="post" action="#" class="contact-form" id="contactform">

                        <p class="input-block">
                            <label for="name">Your Name (required)</label>
                            <input type="text" name="name" id="name" />
                        </p>

                        <p class="input-block">
                            <label for="email">Your Email (required)</label>
                            <input type="text" name="email" id="email" />
                        </p>

                        <p class="input-block">
                            <label for="web">Website</label>
                            <input type="text" name="web" id="web" />
                        </p>

                        <p class="input-block">
                            <label for="message">You Message: (required)</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </p>

                        <p class="input-block">
                            <label for="verify">Are you human?</label>
                            <iframe src="php/capcha_page.html" height="29" width="80" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" class="capcha_image_frame" name="capcha_image_frame"></iframe>
                            <input class="verify" type="text" id="verify" name="verify" />
                        </p>

                        <p class="input-block">
                            <label>&nbsp;</label>
                            <button class="button orange" type="submit" id="submit">Submit</button>
                        </p>

                    </form><!--/ .contact-form-->

                </div><!--/ #contact-->

            </div><!--/ .twelve .columns-->



        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div><!--/ .main-->
@endsection
