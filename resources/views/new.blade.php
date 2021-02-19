@extends('layouts.master')


@section('content')

{{--    @foreach($news as $new)--}}

        <h2 class="title">{{$news -> title}}</h2>

        <ul class="entry-meta">
            <li><b>Date:</b>{{substr($news -> updated_at, 0, 10)}}</li>
            {{--            @isset($new)--}}
            {{--                @if($new->author_id == $authors->id)--}}
            {{--            <li value="">><b>Author:</b>{{$authors -> name}}</li>--}}
            {{--                @endif--}}
            {{--                @endisset</ul>--}}

            <div class="entry-body">

                <img class="entry-image" alt="" src="{{ Storage::url($news->image) }}">

                <p>
                    {{$news -> content}}
                </p>


            </div><!--/ .entry-body -->


{{--    @endforeach--}}
@endsection
