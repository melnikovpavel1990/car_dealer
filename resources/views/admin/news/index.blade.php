@extends('layouts.admin')

@section('content')
    <main>
        <div style="margin: 50px">
            <div class="card mb-4">
                <div class="card-header">
                    <svg class="svg-inline--fa fa-table fa-w-16 mr-1" aria-hidden="true" focusable="false"
                         data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path>
                    </svg><!-- <i class="fas fa-table mr-1"></i> Font Awesome fontawesome.com -->
                    List News
                </div>
                <div class="card-header">
                    <a href="{{route('admin_news_create')}}">Добавление категории</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                                <tr>

                                    <td>{{$new->title}}</td>
                                    <td>{{$new->author_id}}</td>
                                    <td>{{$new->content}}</td>
                                    <td>
                                        <a class="btn btn-info"
                                           href="{{route('admin_news_edit', ['id' => $new->id])}}">Редактировать
                                        </a>
                                        <a class="btn btn-danger"
                                           href="{{route('admin_news_destroy', ['id' => $new->id])}}">Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
