@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')
                <!-- CONTENT START -->

			<main class="content">
				<div class="container-fluid p-0">
                    <div class="btn-group mb-3" role="group" aria-label="FAQ Modification">
                        <a href="{{route('admin.faq.create')}}">
                            <button type="button" class="btn btn-primary">
                                <i class="align-middle" data-feather="plus-square"></i>
                                Add Question</button>
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
                                            <strong class="card-title mb-0">FAQ List</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- card-body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-hover my-0" aria-labelledby="FAQ List">
                                                        <thead>
                                                            <tr>
                                                                <th class="d-none d-md-table-cell">Id</th>
                                                                <th style="width: 144px" class="d-none d-md-table-cell">Question</th>
                                                                <th class="d-none d-md-table-cell">Answer</th>
                                                                <th class="d-none d-md-table-cell">Status</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Edit</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Action</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Show</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data as $rs)
                                                            <tr>
                                                                <td class="d-none d-md-table-cell">{{$rs->id}}</td>
                                                                <td class="d-none d-md-table-cell">{{$rs->question}}</td>
                                                                <td class="d-none d-xl-table-cell">{!! $rs->answer !!}</td>
                                                                <td class="d-none d-md-table-cell">{{$rs->status}}</td>
                                                                <td><a href="{{route('admin.faq.edit', ['id'=>$rs->id])}}" class="btn btn-sm text-none btn-warning" style="text-decoration: none">
                                                                    <i class="align-middle" data-feather="edit-3"></i>Edit
                                                                </a></td>
                                                                <td><a href="{{route('admin.faq.destroy', ['id'=>$rs->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none"
                                                                    onclick="return confirm('Deleting !! Are you sure ?')">
                                                                    <i class="align-middle" data-feather="trash-2"></i>Delete
                                                                </a></td>
                                                                <td><a href="{{route('admin.faq.show', ['id'=>$rs->id])}}" class="btn btn-sm btn-success" style="text-decoration: none">
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
