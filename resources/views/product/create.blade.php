@extends('layouts.master')

@section('content')

    <div class="main">

        <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

        <section class="container content clearfix">
            <form action="" method="POST">
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
                                    <form action="">
                                        <p>
                                            <label>Mark:</label>
                                            <select>
                                                <option selected="selected">Select make</option>
                                                @foreach($cars as $car)
                                                    <option value="{{ $car->car_marks->id }}">{{$car->mark}}</option>
                                                @endforeach
                                            </select>
                                        </p>

                                        <label>Milleage:</label>
                                        <input type="text">
                                        </p>
                                        <p>
                                            <label>Fuel type:</label>
                                            <select>
                                                @foreach($fuels as $fuel)
                                                    <option value="{{ $fuel->id }}">{{$fuel->name}}</option>
                                                @endforeach
                                            </select>
                                        </p>


                                </div><!--/ .five-->

                                <div class="five columns">

                                    <p class="not-active">
                                        <label>Model:</label>
                                        <select>
                                            @foreach($models as $model)
                                                <option value="{{ $model->mark_id }}">{{$model->model}}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                    <p class="three columns alpha">
                                        <label>Price:</label>
                                        <input type="text">
                                    </p>

                                    <p class="three columns omega">
                                        <label>Year:</label>
                                        <input type="text">
                                    </p>

                                    <p>
                                        <label>Ecterrior color:</label>
                                        <select>
                                            @foreach($colors as $color)
                                                <option value="{{ $color->id }}">{{$color->color}}</option>
                                            @endforeach
                                        </select>

                                    </p>


                                </div><!--/ .five-->

                                <div class="five columns omega">

                                    <p>
                                        <label>Transmission:</label>
                                        <select>
                                            @foreach($transmissions as $transmission)
                                                <option value="{{$transmission->id}}">{{$transmission->name}}</option>
                                            @endforeach
                                        </select>
                                    </p>

                                    <p class="three columns alpha">
                                        <label>Engine size:</label>
                                        <input type="text">
                                    </p>

                                    <p class="three columns omega">
                                        <label>Power:</label>
                                        <input type="text">
                                    </p>


                                    <p class="three columns alpha">
                                        <label>Location:</label>
                                        <select>
                                            @foreach($locations as $location)
                                                <option value="{{$location->id}}">{{$location->location}}</option>
                                            @endforeach
                                        </select>
                                    </p>

                                    <p class="three columns omega">
                                        <label>City:</label>
                                        <select>
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
                                            <label class="input-check"><input type="checkbox"/>ABS:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Airbag:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Alarm:</label>
                                        </p>

                                    </div><!--/ .four-->

                                    <div class="four columns omega">

                                        <p>
                                            <label class="input-check"><input type="checkbox"/>Fog lights:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/> Heated mirrors:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox"/> Tow package:</label>
                                        </p>

                                    </div><!--/ .four-->

                                </div><!--/ .eight-->

                                <div class="clear"></div>

                                <div class="form-title"><h6>Upload Photos</h6></div>

                                <div class="upload-holder">

                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        Select image to upload:
                                        <input type="file" value="Upload Image" name="submit">
                                    </form>

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
