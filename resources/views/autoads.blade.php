@extends('layouts.master')


@section('content')

    <div class="main">

        <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

        <section class="container sbl clearfix">

            <!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

            <section id="content" class="two-thirds column">

                <div class="page-header clearfix">

                    <h3 class="section-title">Recent Automobiles</h3>



                </div><!--/ .page-header-->

                <section id="change-items" class="item-list">
                    @foreach($cars as $car)
                    <article>

                        <a href="one-products.html" class="single-image picture video">
                            <img src="images/temp/thumb-1.jpg" alt="">
                        </a>

                        <div class="detailed">

                            <h6 class="title-item">
                                <a href="one-products.html">{{$car->mark->mark}}  {{$car->model->model}}</a>
                            </h6>

                                <span class="price">${{$car->price}}</span>

                            <div class="clear"></div>

                            <ul class="list-entry">
                                <li><b class="label">Engine:</b><span>{{$car->power}}</span></li>
                                <li><b class="label">Mileage:</b><span>{{$car->milleage}}</span></li>
                                <li><b class="label">Year:</b><span>{{$car->year}}</span></li>
                                <li><b class="label">Location:</b><span>{{$car->city->city}} / {{$car->location->location}}</span></li>
                            </ul><!--/ .list-entry-->


                            <a href="one-products.html" class="button orange">Details</a>

                        </div><!--/ .detailed-->

                    </article>
                    @endforeach

                </section><!--/ #change-items-->

                <div class="wp-pagenavi clearfix">

                    <span class="pages">Page 1 of 2</span>
                    <a class="prevpostslink" href="#"></a>
                    <span class="current">1</span>
                    <a class="page" href="#">2</a>
                    <a class="nextpostslink" href="#"></a>

                </div><!--/ .wp-pagenavi-->

            </section><!--/ #content-->

            <!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->


            <!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->

            <aside id="sidebar" class="one-third column">

@include('include.search')

@include('include.calculate')



            </aside><!--/ #sidebar-->

            <!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div>

@endsection
