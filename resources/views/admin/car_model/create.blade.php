@extends('layouts.admin')

@section('content')
    <div class="container" style="margin: 50px">
    <form action="{{route('admin_model_store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Марка автомобиля</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label >Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Enter Slug">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
