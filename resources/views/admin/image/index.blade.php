@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')

@section('content')
                <!-- CONTENT START -->

			<main class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="text-align: center">
                                <strong><h1>{{$place->title}}</h1></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
				<div class="container-fluid p-0">
                    <div class="card">
                        <div class="card-body">
                            <form role="form" action="{{route('admin.image.store', ['pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 form-control input-group-text">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="email"><strong>Title</strong></label>
                                                <input type="text" class="form-control form-control-lg" name="title" placeholder="Title">
                                            </div>
                                            <div class="col-md">
                                                <label class="w-100" for="image"><strong>Image</strong></label>
                                                <input type="file" class="form-control form-control-lg" name="image">
                                                <input class="btn btn-primary" type="submit" value="Upload">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.form-body -->
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Cardholder START -->
                            <div class="card">
                                <div class="card-body">
                                    <!-- card -->
                                    <div class="card ">
                                        <!-- card-header -->
                                        <div class="card-header">
                                            <strong class="card-title mb-0">Product Image List</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- card-body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-hover my-6" aria-labelledby="CategoryList">
                                                        <thead>
                                                            <tr>
                                                                <th class="d-md-table-cell">Id</th>
                                                                <th class="d-md-table-cell">Image</th>
                                                                <th class="d-xl-table-cell">Title</th>
                                                                <th class="d-md-table-cell">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($images as $rs)
                                                            <tr>
                                                                <td> {{$rs->id}} </td>
                                                                <td class="d-none d-md-table-cell">
                                                                    @if ($rs->image)
                                                                        <img src="{{Storage::url($rs->image)}}" alt="{{$rs->title}}" style="height: 40px" class="img-fluid">
                                                                    @endif
                                                                </td>
                                                                <td> {{$rs->title}} </td>
                                                                <td><a href="{{route('admin.image.destroy', ['pid'=>$place->id, 'id'=>$rs->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none"
                                                                    onclick="return confirm('Deleting !! Are you sure ?')">
                                                                    <i class="align-middle" data-feather="trash-2"></i>Delete
                                                                </a></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <!-- Cardholder END -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </main>
            <!-- /.content -->
@endsection
