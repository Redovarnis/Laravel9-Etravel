@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
                <!-- CONTENT START -->

			<main class="content">
				<div class="container-fluid p-0">
                    <div class="btn-group mb-3" role="group" aria-label="Category Modification">
                        <a href="{{route('admin.category.create')}}">
                            <button type="button" class="btn btn-primary">
                                <i class="align-middle" data-feather="plus-square"></i>
                                Add Category</button>
                        </a>
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
                                            <strong class="card-title mb-0">Category List</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- card-body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-hover my-0" aria-labelledby="CategoryList">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th class="d-none d-md-table-cell">Image</th>
                                                                <th class="d-none d-md-table-cell">Parent</th>
                                                                <th class="d-none d-xl-table-cell">Title</th>
                                                                <th class="d-none d-xl-table-cell">Keywords</th>
                                                                <th class="d-none d-md-table-cell">Description</th>
                                                                <th class="d-none d-md-table-cell">Status</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Edit</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Action</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Show</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data as $rs)
                                                            <tr>
                                                                <td> {{$rs->id}} </td>
                                                                <td class="d-none d-md-table-cell">
                                                                    @if ($rs->image)
                                                                    <img src="{{Storage::url($rs->image)}}" alt="{{$rs->title}}" style="height: 40px" class="img-fluid">
                                                                    @endif

                                                                </td>
                                                                <td class="d-none d-xl-table-cell">{{$rs->parent_id}}</td>
                                                                <td class="d-none d-xl-table-cell">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                                                                <td class="d-none d-md-table-cell">{{$rs->keywords}}</td>
                                                                <td class="d-none d-xl-table-cell">{!! $rs->description !!}</td>
                                                                <td class="d-none d-md-table-cell">{{$rs->status}}</td>
                                                                <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" class="btn btn-sm text-none btn-warning" style="text-decoration: none">
                                                                    <i class="align-middle" data-feather="edit-3"></i>Edit
                                                                </a></td>
                                                                <td><a href="{{route('admin.category.destroy', ['id'=>$rs->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none"
                                                                    onclick="return confirm('Deleting !! Are you sure ?')">
                                                                    <i class="align-middle" data-feather="trash-2"></i>Delete
                                                                </a></td>
                                                                <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}" class="btn btn-sm btn-success" style="text-decoration: none">
                                                                    <i class="align-middle" data-feather="grid"></i>Show
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
