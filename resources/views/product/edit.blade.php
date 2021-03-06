@extends('layouts.master')

@section('content')

    <div class="main">

        <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

        <section class="container content clearfix">
            <form action="{{route('PostAd.update', ['id' => $car -> id])}}" enctype="multipart/form-data" method="POST"
                  id="form">
                @csrf
                @method('put')
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
                                            @foreach($marks as $mark)
                                                <option value="{{$mark->id}}"
                                                        @if($mark->id == $car -> mark_id) selected @endif>
                                                    {{$mark->mark}}</option>
                                            @endforeach
                                        </select>
                                    </p>

                                    <p>
                                        <label>Fuel type:</label>
                                        <select name="fuel_id">
                                            @foreach($fuels as $fuel)
                                                <option value="{{$fuel->id }}"
                                                        @if($fuel->id == $car -> fuel_id) selected @endif>

                                                    {{$fuel->name}}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                    <label>Milleage:</label>
                                    <input name="milleage" type="text" value="{{$car->milleage}}">
                                    </p>


                                </div><!--/ .five-->

                                <div class="five columns">

                                    <p class="not-active">
                                        <label>Model:</label>
                                        <select name="model_id">
                                            @foreach($models as $model)
                                                <option value="{{ $model->id }}"
                                                        @if($model->id == $car -> model_id) selected @endif>
                                                    {{$model->model}}</option>
                                            @endforeach
                                        </select>
                                    </p>


                                    <p class="three columns omega" style="margin-left: 0">
                                        <label>Year:</label>
                                        <select name="year" id="year">
                                            @for($i=1980; $i<=2021; $i++)
                                                <option value="{{$i}}"
                                                        @if($i == $car->year) selected @endif>
                                                    {{$i}}</option>
                                            @endfor
                                        </select>

                                    </p>

                                    <p class="three columns alpha">
                                        <label>Select color:</label>
                                        <select name="color_id">
                                            <option value=""></option>
                                            @foreach($colors as $color)
                                                <option value="{{ $color->id }}"
                                                        @if($color->id == $car -> color_id) selected @endif>
                                                    {{$color->color}}</option>
                                            @endforeach
                                        </select>

                                    </p>
                                    <p class="three columns alpha">
                                        <label>Price:</label>
                                        <input name="price" type="text" value="{{$car->price}}">
                                    </p>

                                </div><!--/ .five-->

                                <div class="five columns omega">

                                    <p>
                                        <label>Transmission:</label>
                                        <select name="transmission_id">
                                            @foreach($transmissions as $transmission)
                                                <option value="{{ $transmission->id }}"
                                                        @if($transmission->id == $car -> transmission_id) selected @endif>
                                                    {{$transmission->name}}</option>
                                            @endforeach
                                        </select>
                                    </p>

                                    <p class="three columns omega" style="margin-left: 0">
                                        <label>Engine size:</label>
                                        <select name="power" id="power">
                                            @for($i=0.4; $i<=6; $i+=0.1)
                                                <option value="{{$i}}"
                                                        @if($i == $car->power) selected @endif>
                                                    {{$i}}</option>
                                            @endfor
                                        </select>
                                    </p>
                                    <br> <br> <br> <br>
                                    <p class="three columns alpha">
                                        <label>Location:</label>
                                        <select name="location_id">
                                            @foreach($locations as $location)
                                                <option value="{{ $location->id }}"
                                                        @if($location->id == $car -> location_id) selected @endif>
                                                    {{$location->location}}</option>
                                            @endforeach
                                        </select>
                                    </p>

                                    <p class="three columns omega">
                                        <label>City:</label>
                                        <select name="city_id">
                                            <option selected="selected">Select city</option>
                                            @foreach($cities as $city)

                                                <option value="{{ $city->id }}"
                                                        @if($city->id == $car -> city_id) selected @endif>
                                                    {{$city->city}}  </option>

                                            @endforeach
                                            {{--                                            @foreach($cities as $city)--}}
                                            {{--                                                @if($location->id == $city -> locations_id) selected @endif>--}}
                                            {{--                                                <option value="{{ $city->id }}">{{$city->city}}</option>--}}
                                            {{--                                            @endforeach--}}
                                        </select>
                                    </p>

                                </div><!--/ .five-->

                            </div><!--/ .cart-content-->

                            <div class="cart-content step-2 clearfix">

                                <div class="five columns alpha">

                                    <p>
                                        <label>Title:</label>
                                        <input name="title" type="text" value="{{$car->title}}">
                                    </p>

                                </div><!--/ .five-->

                                <div class="clear"></div>

                                <p>
                                    <label>Description:</label>

                                    <textarea name="description"
                                              value="{{$car->description}}">{{$car->description}}</textarea>
                                </p>

                                <div class=" eight columns alpha">

                                    <div class="form-title"><h6>Car Accessories</h6></div>

                                    <div class="four columns alpha">

                                        <p>
                                            <label class="input-check"><input type="checkbox" value="1"
                                                                              name="air_conditioning"
                                                    {{$car->air_conditioning?'checked':''}}/>Air
                                                conditioning:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox" value="1"
                                                                              name="Bluetooth"{{$car->Bluetooth?'checked':''}}/>Bluetooth:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox" value="1"
                                                                              name="GPS"{{$car->GPS?'checked':''}}/>GPS:</label>
                                        </p>

                                    </div><!--/ .four-->

                                    <div class="four columns omega">

                                        <p>
                                            <label class="input-check"><input type="checkbox" value="1"
                                                                              name="heated_seats"{{$car->heated_seats?'checked':''}}/>Heated
                                                seats:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox" value="1"
                                                                              name="power_seat"{{$car->power_seat?'checked':''}}/>Power
                                                seat:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input type="checkbox" value="1"
                                                                              name="speed_control"{{$car->speed_control?'checked':''}}/>Speed
                                                Control:</label>
                                        </p>

                                    </div><!--/ .four-->

                                </div><!--/ .eight-->

                                <div class="eight columns omega">

                                    <div class="form-title"><h6>Security Options</h6></div>

                                    <div class="four columns alpha">

                                        <p>
                                            <label class="input-check"><input name="ABS" type="checkbox"
                                                                              value="1"{{$car->ABS?'checked':''}}/>ABS:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="airbag" type="checkbox"
                                                                              value="1"{{$car->airbag?'checked':''}}/>Airbag:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="alarm" type="checkbox"
                                                                              value="1"{{$car->alarm?'checked':''}}/>Alarm:</label>
                                        </p>

                                    </div><!--/ .four-->

                                    <div class="four columns omega">

                                        <p>
                                            <label class="input-check"><input name="fog_lights" type="checkbox"
                                                                              value="1"{{$car->fog_lights?'checked':''}}/>Fog
                                                lights:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="heated_mirrors" type="checkbox"
                                                                              value="1"{{$car->heated_mirrors?'checked':''}}/>
                                                Heated mirrors:</label>
                                        </p>
                                        <p>
                                            <label class="input-check"><input name="tow_package" type="checkbox"
                                                                              value="1"{{$car->tow_package?'checked':''}}/>
                                                Tow package:</label>
                                        </p>

                                    </div><!--/ .four-->

                                </div><!--/ .eight-->

                                <div class="clear"></div>

                                <div class="form-title"><h6>Upload Photos</h6></div>

                                <div class="upload-holder">
                                    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

                                    Select image to upload:
                                    <input type="file" name="img[]" id="id_image" multiple="multiple"
                                           value="" accept="image/jpg, image/jpeg">
                                </div><!--/ .upload-holder-->

                            </div><!--/ .cart-content-->

                        </div><!--/ .cart-holder-->

                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">Save</button>
                        </div>
                        <script type='text/javascript'>
                            $(function () {
                                var // Define maximum number of files.
                                    max_file_number = 2,
                                    // Define your form id or class or just tag.
                                    $form = $('form'),
                                    // Define your upload field class or id or tag.
                                    $file_upload = $('#id_image', $form),
                                    // Define your submit class or id or tag.
                                    $button = $('.submit', $form);
                                // Disable submit button on page ready.
                                $button.prop('disabled', 'disabled');
                                $file_upload.on('change', function () {
                                    var number_of_images = $(this)[0].files.length;
                                    if (number_of_images > max_file_number) {
                                        alert('You can upload maximum 2 files.');
                                        $(this).val('');
                                        $button.prop('disabled', 'disabled');
                                    } else {
                                        $button.prop('disabled', false);
                                    }
                                });
                            });
                        </script>


                    </div><!--/ .cart-holder-->

                </div><!--/ .form-entry-->

                <!--/ .form-account-->
            </form>
        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div><!--/ .main-->

@endsection
