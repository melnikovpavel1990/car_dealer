@extends('layouts.master')

@section('content')

    <div class="main">

        <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

        <section class="container content clearfix">
            <form action="" enctype="multipart/form-data" method="POST">
                <div class="form-account">

                    <div class="form-heading">
                        <h3>Sell Your Car</h3>
                    </div><!--/ .form-heading-->

                    <div class="form-entry">

                        <p>
                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate.
                        </p>

                        <div class="form-title"><h5>Submit Your Vechicle</h5></div>

                        <div class="cart-holder clearfix">
                            {{--                            @dd($cars)--}}
                            <div class="cart-content step-1 clearfix">

                                <div class="five columns alpha">
                                        <p>
                                            <label>Mark:</label>
                                            <select name="mark_id">
                                                <option selected="selected">Select make</option>
                                                @foreach($cars as $car)
                                                    <option value="{{$car->mark->id}}">{{$car->mark->mark}}</option>
                                                @endforeach
                                            </select>
                                        </p>

                                        <label>Milleage:</label>
                                        <input name="milleage" type="text">
                                        </p>
                                        <p>
                                            <label>Fuel type:</label>
                                            <select name="fuel_id">
{{--                                                @foreach($cars as $car)--}}
{{--                                                    <option value="{{ $car->fuel->id }}">{{$car->fuel}}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                        </p>


                                </div><!--/ .five-->

                                <div class="five columns">

                                    <p class="not-active">
                                        <label>Model:</label>
                                        <select name="model_id">
{{--                                            @foreach($cars as $car)--}}
{{--                                                <option value="{{ $car->mark->id }}">{{$car->mark}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </p>
                                    <p class="three columns alpha">
                                        <label>Price:</label>
                                        <input name="price" type="text">
                                    </p>

                                    <p class="three columns omega">
                                        <label>Year:</label>
                                        <input name="year" type="text">
                                    </p>

                                    <p>
                                        <label>Ecterrior color:</label>
                                        <select name="color_id">
{{--                                            @foreach($cars as $car)--}}
{{--                                                <option value="{{ $car->mark->id }}">{{$car->mark}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>

                                    </p>


                                </div><!--/ .five-->

                                <div class="five columns omega">

                                    <p>
                                        <label>Transmission:</label>
                                        <select name="transmission_id">
{{--                                            @foreach($cars as $car)--}}
{{--                                                <option value="{{ $car->mark->id }}">{{$car->mark}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </p>

                                    <p class="three columns alpha">
                                        <label>Power</label>
                                        <input name="" type="text">
                                    </p>

                                    <p class="three columns omega">
                                        <label>Engine size:</label>
                                        <input name="power" type="text">
                                    </p>


                                    <p class="three columns alpha">
                                        <label>Location:</label>
                                        <select name="location_id">
{{--                                            @foreach($cars as $car)--}}
{{--                                                <option value="{{ $car->mark->id }}">{{$car->mark}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </p>

                                    <p class="three columns omega">
                                        <label>City:</label>
                                        <select name="city_id">
                                            <option selected="selected">Select city</option>

                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                        </select>
                                    </p>

                                </div><!--/ .five-->

                            </div><!--/ .cart-content-->

                            <div class="cart-content step-2 clearfix">

                                <div class="five columns alpha">

                                    <p>
                                        <label>Title:</label>
                                        <input type="text"/>
                                    </p>

                                </div><!--/ .five-->

                                <div class="clear"></div>

                                <p>
                                    <label>Description:</label>
                                    <textarea></textarea>
                                </p>

                                <div class="eight columns alpha">

                                    <div class="form-title"><h6>Car Accessories</h6></div>

                                    <div class="four columns alpha">

                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Air conditioning:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Bluetooth:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/>GPS:</label>
                                        </p>

                                    </div><!--/ .four-->

                                    <div class="four columns omega">

                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Heated seats:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Power seat:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Speed Control:</label>
                                        </p>

                                    </div><!--/ .four-->

                                </div><!--/ .eight-->

                                <div class="eight columns omega">

                                    <div class="form-title"><h6>Security Options</h6></div>

                                    <div class="four columns alpha">

                                        <p>
                                            <label class="input-check"><input name="ABS" type="checkbox"/>ABS:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="airbag" type="checkbox"/>Airbag:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="alarm" type="checkbox"/>Alarm:</label>
                                        </p>

                                    </div><!--/ .four-->

                                    <div class="four columns omega">

                                        <p>
                                            <label class="input-check"><input name="fog_lights" type="checkbox"/>Fog lights:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="heated_mirrors" type="checkbox"/> Heated mirrors:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="tow_packag" type="checkbox"/> Tow package:</label>
                                        </p>

                                    </div><!--/ .four-->

                                </div><!--/ .eight-->

                                <div class="clear"></div>

                                <div class="form-title"><h6>Upload Photos</h6></div>

                                <div class="upload-holder">


                                        Select image to upload:
                                        <input type="file" value="Upload Image" name="submit">


                                </div><!--/ .upload-holder-->

                            </div><!--/ .cart-content-->

                        </div><!--/ .cart-holder-->

                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">Сохранить</button>
                        </div>
                    </div><!--/ .cart-holder-->

                </div><!--/ .form-entry-->

                <!--/ .form-account-->
            </form>
        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div><!--/ .main-->





@endsection
