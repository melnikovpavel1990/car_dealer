@extends('layouts.master')

@section('content')
<div class="main">

    <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

    <section class="container content clearfix">

        <div class="form-account">

            <div class="form-heading">
                <h3>Sell Your Car</h3>
            </div><!--/ .form-heading-->

            <div class="form-entry">

                <p>
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate.
                </p>

                <div class="form-title"><h5>Submit Your Vechicle</h5></div>

                <div class="cart-holder clearfix">


                    <div class="cart-content step-1 clearfix">

                        <div class="five columns alpha">

                            <p>
                                <label>Condition:</label>
                                <select>
                                    <option selected="selected">Select condition</option>
                                    <option value="1">New</option>
                                    <option value="2">Sed</option>
                                </select>
                            </p>

                            <p>
                                <label>Mark:</label>
                                <select>
                                    <option selected="selected">Select make</option>
                                    @foreach($markas as $mark)
                                        <option value="{{ $mark->id }}">{{ $mark->mark }}</option>
                                    @endforeach
                                </select>
                            </p>

                            <p class="not-active">
                                <label>Model:</label>
                                <select>
                                    <option selected="selected">Select model</option>
{{--                                    @foreach($markas as $models => $model)--}}
{{--                                        <option value="{{ $model->id }}">{{ $model->model }}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </p>

                            <p>
                                <label>Body type:</label>
                                <select>
                                    <option selected="selected">Select body</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </p>

                        </div><!--/ .five-->

                        <div class="five columns">

                            <p class="three columns alpha">
                                <label>Price:</label>
                                <input type="text">
                            </p>

                            <p class="three columns omega">
                                <label>Year:</label>
                                <select>
                                    <option selected="selected">Select Year</option>
                                    @for($i=1950; $i<63; $i++)
                                        <option value="1">{{$i->i}}</option>
                                    @endfor
                                </select>
                            </p>

                            <p>
                                <label>Milleage:</label>
                                <input type="text">
                            </p>

                            <p>
                                <label>Ecterrior color:</label>
                                <select>
                                    <option selected="selected">Select color</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </p>

                            <p>
                                <label>Fuel type:</label>
                                <select>
                                    <option selected="selected">Select fuel type</option>
                                    <option value="1">Petrol</option>
                                    <option value="2">Diesel</option>
                                    <option value="3">Electric motor</option>
                                </select>
                            </p>

                        </div><!--/ .five-->

                        <div class="five columns omega">

                            <p>
                                <label>Transmission:</label>
                                <select>
                                    <option selected="selected"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </p>

                            <p class="three columns alpha">
                                <label>Engine size:</label>
                                <select>
                                    <option selected="selected"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </p>

                            <p class="three columns omega">
                                <label>Power:</label>
                                <select>
                                    <option selected="selected"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </p>

                            <p>
                                <label>Number of owners:</label>
                                <select>
                                    <option selected="selected"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </p>

                            <p class="three columns alpha">
                                <label>Location:</label>
                                <select>
                                    <option selected="selected">Select location</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
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

                            <input type="text"/>
                            <a href="#" class="button orange">Browse...</a> <br/>
                            <i>User Name sjncsjacnkas sjcbscbsj</i>

                        </div><!--/ .upload-holder-->

                    </div><!--/ .cart-content-->

                    <a href="vechicle-step-3.html" class="button orange">Download</a>

                </div><!--/ .cart-holder-->


            </div><!--/ .cart-holder-->

        </div><!--/ .form-entry-->

        <!--/ .form-account-->

    </section><!--/.container -->

    <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

</div><!--/ .main-->





@endsection
