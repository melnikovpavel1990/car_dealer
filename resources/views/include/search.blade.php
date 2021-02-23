<div class="widget-container widget_custom_search">

    <div class="search-heading">

        <h3 class="widget-title">Quick Search</h3>

    </div><!--/ .search-heading-->

    <div class="search-entry clearfix">

        <form action="{{route('search')}}" method="get" class="form-panel">

            <fieldset>
                <label>Make:</label>

                <select name="mark">
                    <option selected=""></option>
                    @foreach($cars as $car)
                        <option >{{$car->mark->mark}}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="not-active">
                <label>Model:</label>
                <select name="model">
                    <option selected=""></option>
                    @foreach($cars as $car)
                        <option >{{$car->model->model}}</option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset>
                <label for="price_min">Price min:</label>
                <select name="price_min" id="price_min">
                    <option selected=""></option>
                @for($i=0; $i<=20000; $i+=1000)
                        <option>{{$i}}</option>
                    @endfor
                </select>
            </fieldset>
            <fieldset>
                <label for="price_max">Price max:</label>
                <select name="price_max" id="price_max">
                    <option selected=""></option>
                    @for($i=0; $i<=20000; $i+=1000)
                        <option>{{$i}}</option>
                    @endfor
                </select>
            </fieldset>
            <fieldset>
                <label>Year from::</label>
                <select name="year_from" id="year_from">
                    <option selected=""></option>
                    @for($i=1980; $i<=2021; $i++)
                        <option>{{$i}}</option>
                    @endfor
                </select>
            </fieldset>
            <fieldset>
                <label>Year to:</label>
                <select name="year_to" id="year_to">
                    <option selected="selected"></option>
                    @for($i=1980; $i<=2021; $i++)
                        <option>{{$i}}</option>
                    @endfor
                </select>
            </fieldset>
            <fieldset>
            </fieldset>
            <div class="eight columns alpha">

                <div class="form-titl"><h6>Car Accessories</h6></div>

                <div class="four columns alpha">

                    <p>
                        <label class="input-check"><input type="checkbox" value="1"
                                                          name="air_conditioning"/> Air
                            conditioning:</label>
                    </p>
                    <p>
                        <label class="input-check"><input type="checkbox" value="1"
                                                          name="Bluetooth"/> Bluetooth:</label>
                    </p>
                    <p>
                        <label class="input-check"><input type="checkbox" value="1"
                                                          name="GPS"/> GPS:</label>
                    </p>

                </div><!--/ .four-->

                <div class="four columns alpha" style="margin-left: -80px">

                    <p>
                        <label class="input-check"><input type="checkbox" value="1"
                                                          name="heated_seats"/> Heated seats:</label>
                    </p>
                    <p>
                        <label class="input-check"><input type="checkbox" value="1"
                                                          name="power_seat"/> Power seat:</label>
                    </p>
                    <p>
                        <label class="input-check"><input type="checkbox" value="1"
                                                          name="speed_control"/> Speed
                            Control:</label>
                    </p>

                </div><!--/ .four-->

            </div><!--/ .eight-->

            <div class="eight columns omega" >

                <div class="form-titl"><h6>Security Options</h6></div>

                <div class="four columns alpha">

                    <p>
                        <label class="input-check"><input name="ABS" type="checkbox" value="1"/> ABS:</label>
                    </p>
                    <p>
                        <label class="input-check"><input name="airbag" type="checkbox" value="1"/> Airbag:</label>
                    </p>
                    <p>
                        <label class="input-check" style="margin-right: 20px"><input name="alarm" type="checkbox" value="1"/> Alarm:</label>
                    </p>

                </div><!--/ .four-->

                <div class="four columns omega" style="margin-left: -80px">

                    <p>
                        <label class="input-check"><input name="fog_lights" type="checkbox"
                                                          value="1"/> Fog lights:</label>
                    </p>
                    <p>
                        <label class="input-check"><input name="heated_mirrors" type="checkbox"
                                                          value="1"/> Heated mirrors:</label>
                    </p>
                    <p>
                        <label class="input-check"><input name="tow_packag" type="checkbox"
                                                          value="1"/> Tow package:</label>
                    </p>

                </div><!--/ .four-->

            </div><!--/ .eight-->
                        <div class="clear"></div>

            <button id="submitSearch" class="submit-search" type="submit">Search</button>
            <br>


        </form><!--/ .form-panel-->

    </div><!--/ .search-entry-->

</div><!--/ .widget-container-->
