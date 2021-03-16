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
                    List Cars
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Mark</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Year</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{$car->id}}</td>
                                    <td>{{$car->mark->mark}}</td>
                                    <td>{{$car->model->model}}</td>
                                    <td>{{$car->price}}</td>
                                    <td>{{$car->year}}</td>
                                    <td>{{$car->user->name}}</td>
                                    <td>
                                        <form action="{{route('admin.cars.destroy', ['id' => $car->id])}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="row">

                            <div class="col-sm-12 col-md-7">
                                {{$cars->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
