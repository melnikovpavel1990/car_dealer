@extends('layouts.master')


@section('content')
    <div class="wrap">


        <!-- - - - - - - - - - - - - - Top Panel - - - - - - - - - - - - - - - - -->

        <div class="top-panel clearfix">

            <!-- - - - - - - - - - - Slider - - - - - - - - - - - - - -->

            <div id="slider" class="flexslider clearfix">

                <ul class="slides">
                    @foreach($paid as $car)
                        <li>
                            <img width="1000" height="700" src="{{ Storage::url($car->img1)}}" alt=""/>

                            <div class="caption">
                                <div class="caption-entry">

                                    <dl class="auto-detailed clearfix">
                                        <dt><span
                                                class="model">{{$car->year}} {{$car->mark->mark}} {{$car->model->model}}</span>
                                        </dt>
                                        <dd class="media-hidden"><b>{{$car->milleage}} Miles</b></dd>
                                        <dd><span class="heading">${{$car->price}}</span></dd>
                                    </dl><!--/ .auto-detailed-->

                                    <a href="{{route('one_car', ['id' => $car->id])}}" class="button orange">
                                        Details</a>

                                </div><!--/ .caption-entry-->
                            </div><!--/ .caption-->

                        </li>
                    @endforeach
                </ul><!--/ .slides-->

            </div><!--/ #slider-->


            <!-- - - - - - - - - - - end Slider - - - - - - - - - - - - - -->
            <!-- - - - - - - - - - - Search Panel - - - - - - - - - - - - - -->
            <div class="widget_custom_search">
                @include('include.calculate')
            </div>
            <!-- - - - - - - - - - end Search Panel - - - - - - - - - - - - -->

        </div><!--/ .top-panel-->

        <!-- - - - - - - - - - - - - end Top Panel - - - - - - - - - - - - - - - -->

        <div class="main">

            <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

            <section class="container sbr clearfix">

                <!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

                <section id="content" class="two-thirds column">

                    <h3 class="widget-title">Recent Automobiles</h3>

                    <section id="change-items" class="item-grid">
                        @foreach($cars as $car)
                            <article>

                                <a href="{{route('one_car', ['id' => $car->id])}}">
                                    <img style="max-width: 80%" src="{{ Storage::url($car->img1)}}" alt="">
                                </a>

                                <div class="detailed">

                                    <h6 class="title-item">
                                        <a href="{{route('one_car', ['id' => $car->id])}}">{{$car->mark->mark}}  {{$car->model->model}}</a>
                                    </h6>

                                    <span class="price">${{$car->price}}</span>

                                    <div class="clear"></div>

                                    <ul class="list-entry">
                                        <li><b class="label">Engine:</b><span>{{$car->power}}</span></li>
                                        <li><b class="label">Mileage:</b><span>{{$car->milleage}}</span></li>
                                        <li><b class="label">Year:</b><span>{{$car->year}}</span></li>
                                        <li>
                                            <b class="label">Location:</b><span>{{$car->city->city}} / {{$car->location->location}}</span>
                                        </li>
                                    </ul><!--/ .list-entry-->

                                    <a href="{{route('one_car', ['id' => $car->id])}}" class="button orange">Details</a>

                                </div><!--/ .detailed-->

                            </article>
                        @endforeach

                    </section><!--/ .item-grid-->
                    <a href="{{route('AutoAds')}}" class="see">See all automobiles</a>
                </section><!--/ #content-->

                <!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->


                <!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->

                <aside id="sidebar" class="one-third column">

                    <div class="widget-container widget_recent_entries">

                        <h3 class="widget-title">Recent News</h3>

                        <ul>
                            @foreach($news as $new)
                                <li><a href="{{route('new', ['id' => $new->id])}}">{{$new->title}}</a></li>
                            @endforeach
                        </ul>

                        <a href="{{route('news')}}" class="see">See all news</a>

                    </div><!--/ .widget-container-->

                </aside><!--/ #sidebar-->

                <!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

            </section><!--/.container -->

            <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

        </div><!--/ .main-->


    </div><!--/ .wrap-->

@endsection
