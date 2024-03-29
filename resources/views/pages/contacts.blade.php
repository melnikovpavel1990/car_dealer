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
                            <b>Phone:</b>&nbsp;<span>+1 (234) 567-8901</span> <br/>
                            <b>FAX:</b>&nbsp;<span>+1 (234) 567-8902</span>
                        </li>
                        <li>
                            <b>Email: <a href="">testmail@sitename.com</a></b>
                        </li>

                    </ul><!--/ .our-contacts-->

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

            <div class="twelve columns">

                <div id="contact">

                    <h3 class="widget-title">Contact Us</h3>

                    <form METHOD="post" action="{{route('telegram')}}" name="ajax_form" id="ajax_form"
                          class="contact-form" id="contactform">
                        @csrf
                        {{--                        @method('POST')--}}
                        <p class="input-block">
                            <label for="name">Your Name </label>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="name" id="name"/>
                        </p>

                        <p class="input-block">
                            <label for="email">Your Email </label>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="email" name="email" id="email"/>
                        </p>

                        <p class="input-block">
                            <label for="message">You Message: </label>
                        @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </p>

                        <p class="input-block">
                            <label>&nbsp;</label>
                            <button class="button orange" type="submit" id="submit">Submit</button>
                        </p>

                    </form><!--/ .contact-form-->

                    <br>

                    <div id="result_form">

                    </div>


                </div><!--/ #contact-->

            </div><!--/ .twelve .columns-->


        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div><!--/ .main-->
@endsection
