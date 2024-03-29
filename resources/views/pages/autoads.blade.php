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

                        <a href="{{route('one_car', ['id' => $car->id])}}">
                            <img src="{{Storage::url($car->images[0]->image)}}"  alt="" style="max-width: 200px; max-height: 146px">
                        </a>

                        <div class="detailed">

                            <h6 class="title-item">
                                <a href="{{route('one_car', ['id' => $car->id])}}">{{$car->mark->mark}}  {{$car->model->model}}</a>
                            </h6>
                            <h6 class="title-item">
                                <span style="color: coral">${{$car->price}}</span>
                            </h6>

                            <div class="clear"></div>

                            <ul class="list-entry">
                                <li><b class="label">Engine:</b><span>{{$car->power}}</span></li>
                                <li><b class="label">Mileage:</b><span>{{$car->milleage}}</span></li>
                                <li><b class="label">Year:</b><span>{{$car->year}}</span></li>
                                <li><b class="label">Location:</b><span>{{$car->city->city}} / {{$car->location->location}}</span></li>
                            </ul><!--/ .list-entry-->




                        </div><!--/ .detailed-->

                    </article>
                    @endforeach

                </section><!--/ #change-items-->

                <div class="wp-pagenavi clearfix">

                                        {{$cars->links()}}


                </div><!--/ .wp-pagenavi-->

            </section><!--/ #content-->

            <!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->


            <!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->

            <aside id="sidebar" class="one-third column">

@include('include.search')




            </aside><!--/ #sidebar-->

            <!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div>

@endsection
