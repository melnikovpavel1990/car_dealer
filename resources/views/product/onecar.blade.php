@extends('layouts.master')

@section('content')


    <div class="main">

        <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

        <section class="container">

            <!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
            <section id="content" class="two-thirds column">

                <article class="item clearfix">
                    @if(Auth::user()->id == $car->user_id)
                        <a class="btn btn-info"
                           href="{{route('PostAd.edit', ['id' => $car->id])}}">Редактировать
                        </a>
                        <form action="{{route('PostAd.destroy', ['id' => $car->id])}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                    <h2 class="title">{{$car->mark->mark}}  {{$car->model->model}}</h2>

                    <div id="gallery" class="gallery">

                        <div class="slideshow-container">
                            <div id="loading" class="loader"></div>
                            <div id="slideshow" class="slideshow clearfix"></div>
                        </div><!--/ .slideshow-container-->

                        <div id="thumbs" class="clearfix">

                            <!--/КАРТИНКИ-->
                            <ul class="thumbs list-image clearfix" style="display: inline;">

                                <li>
                                    <a class="thumb" name="leaf" href="{{asset('images/temp/item-1.jpg')}}"
                                       title="Title 0">
                                        <img src="{{asset('images/temp/item-1.jpg')}}" alt="Title #1"/>
                                    </a>
                                </li>

                                <li>
                                    <a class="thumb" name="leaf" href="{{asset('images/temp/item-3.jpg')}}"
                                       title="Title 2">
                                        <img src="{{asset('images/temp/item-3.jpg')}}" alt="Title #3"/>
                                    </a>
                                </li>


                            </ul><!--/ .thumbs-->

                        </div><!--/   картинки #thumbs-->

                    </div><!--/ #gallery-->


                    <div class="entry-item">

                        <ul class="list type-1">
                            <li><b>Price: </b><span style="color: coral">${{$car->price}}</span></li>
                            <li><b>Mileage: </b><span>{{$car->milleage}}</span></li>
                            <li><b>Model Year: </b><span>{{$car->year}}</span></li>
                            <li><b>Engine Size: </b><span>{{$car->power}}</span></li>
                            <li><b>Trans: </b><span>{{$car->transmission->name}}</span></li>
                            <li><b>Fuel Type: </b><span>{{$car->fuel->name}}</span></li>
                            <li><b>Phone number: </b><span>+375(29)1234567</span></li>
                        </ul>
                        <h3 class="section-title">Description</h3>

                        <p>
                            {{$car->description}}.
                        </p>

                    </div><!--/ .entry-item-->
                    <div class="cart-content step-2 clearfix">

                        <div class="eight columns alpha">

                            <div class="form-title"><h6>Car Accessories</h6></div>

                            <div class="four columns alpha">

                                <p>
                                    <label class="input-check"><input type="checkbox" value="1" onclick="return false"
                                                                      name="air_conditioning"{{$car->air_conditioning?'checked':''}}/>Air
                                        conditioning:</label>
                                </p>
                                <p>
                                    <label class="input-check"><input type="checkbox" value="1" onclick="return false"
                                                                      name="Bluetooth" {{$car->Bluetooth?'checked':''}}/>Bluetooth:</label>
                                </p>
                                <p>
                                    <label class="input-check"><input type="checkbox" value="1" onclick="return false"
                                                                      name="GPS" {{$car->GPS?'checked':''}}/>GPS:</label>
                                </p>

                            </div><!--/ .four-->

                            <div class="four columns omega">

                                <p>
                                    <label class="input-check"><input type="checkbox" value="1" onclick="return false"
                                                                      name="heated_seats" {{$car->heated_seats?'checked':''}}/>Heated
                                        seats:</label>
                                </p>
                                <p>
                                    <label class="input-check"><input type="checkbox" value="1" onclick="return false"
                                                                      name="power_seat" {{$car->power_seat?'checked':''}}/>Power
                                        seat:</label>
                                </p>
                                <p>
                                    <label class="input-check"><input type="checkbox" value="1" onclick="return false"
                                                                      name="speed_control" {{$car->speed_control?'checked':''}}/>Speed
                                        Control:</label>
                                </p>

                            </div><!--/ .four-->

                        </div><!--/ .eight-->


                        <div class="form-title"><h6>Security Options</h6></div>

                        <div class="four columns alpha">

                            <p>
                                <label class="input-check"><input name="ABS" type="checkbox" onclick="return false"
                                                                  value="1" {{$car->ABS?'checked':''}}/>ABS:</label>
                            </p>
                            <p>
                                <label class="input-check"><input name="airbag" onclick="return false" type="checkbox"
                                                                  value="1"{{$car->airbag?'checked':''}}/>Airbag:</label>
                            </p>
                            <p>
                                <label class="input-check"><input name="alarm" onclick="return false" type="checkbox"
                                                                  value="1" {{$car->alarm?'checked':''}}/>Alarm:</label>
                            </p>

                        </div><!--/ .four-->

                        <div class="four columns omega">

                            <p>
                                <label class="input-check"><input name="fog_lights" onclick="return false"
                                                                  type="checkbox"
                                                                  value="1" {{$car->fog_lights?'checked':''}}/>Fog
                                    lights:</label>
                            </p>
                            <p>
                                <label class="input-check"><input name="heated_mirrors" onclick="return false"
                                                                  type="checkbox"
                                                                  value="1" {{$car->heated_mirrors?'checked':''}}/>
                                    Heated mirrors:</label>
                            </p>
                            <p>
                                <label class="input-check"><input name="tow_packag" onclick="return false"
                                                                  type="checkbox"
                                                                  value="1" {{$car->tow_packag?'checked':''}}/> Tow
                                    package:</label>
                            </p>

                        </div><!--/ .four-->

                    </div><!--/ .eight-->

                    <div class="clear"></div>

    </div><!--/ .cart-content-->


    </article><!--/ .item-->

    </section><!--/ #content-->

    <!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->


    <!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

    </section><!--/.container -->

    <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div><!--/ .main-->







@endsection
