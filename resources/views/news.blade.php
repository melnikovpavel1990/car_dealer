@extends('layouts.master')


@section('content')

    <div class="main">


        <section id="content" class="two-thirds column">

            <h2 class="section-title">News</h2>
            @foreach($news as $new)
                <article class="entry clearfix secondary">

                    <img class="entry-image" alt="" src="{{ Storage::url($new->image) }}">

                    <div class="entry-body">

                        <span class="date"><b>Date:</b>{{" ".substr($new -> updated_at, 0, 10)}}</span>

                        <a href="{{route('new', ['id' => $new->id])}}">
                            <h2 class="title">{{$new -> title}}</h2>
                        </a>

                        <p style="font-size: 20px">
                            {{mb_substr($new -> content, 0, 260)}}...
                        </p>

                    </div><!--/ .entry-body-->

                </article><!--/ .entry-->
            @endforeach

            <div class="wp-pagenavi clearfix">

                <span class="pages">Page 1 of 2</span>
                <a class="prevpostslink" href="#"></a>
                <span class="current">1</span>
                <a class="page" href="#">2</a>
                <a class="nextpostslink" href="#"></a>

            </div><!--/ .wp-pagenavi-->

        </section><!--/ #content-->

        <!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->

        </section><!--/.container -->

        <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

    </div>

@endsection
