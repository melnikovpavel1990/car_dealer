@extends('layouts.admin')

@section('content')

    <div class="container" style="margin: 50px">
        <form action="{{route('admin_model_store',  ['id' => $model->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Марка автомобиля</label>
                <input type="text" class="form-control" name="name" value="{{ $model->name }}">
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" value="{{ $model->slug }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

