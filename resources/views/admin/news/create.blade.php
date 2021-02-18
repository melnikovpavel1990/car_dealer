@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <div style="margin: 50px">
                <form action="{{route('admin_news_store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input name="title" type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Author</label>
                        <select name="author_id" class="form-control"  id="">
                           @foreach($authors as $author)
                            <option value="{{$author->id}}">{{$author -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-info" type="submit">Save</button>
                    </div>
                </form>
            </div>
    </main>







@endsection
