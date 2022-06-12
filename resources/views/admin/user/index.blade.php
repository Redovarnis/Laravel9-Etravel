@extends('layouts.adminbase')

@section('title', 'User Details')

@section('content')
                <!-- CONTENT START -->

			<main class="content">
				<div class="container-fluid p-0">
                    <div class="btn-group mb-3" role="group" aria-label="User Modification">
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
                                            <strong class="card-title mb-0">User List</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- card-body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-hover my-0" aria-labelledby="User List">
                                                        <thead>
                                                            <tr>
                                                                <th class="d-none d-md-table-cell">Id</th>
                                                                <th class="d-none d-md-table-cell">Name</th>
                                                                <th class="d-none d-md-table-cell">Email</th>
                                                                <th class="d-none d-xl-table-cell">Role</th>
                                                                <th class="d-none d-xl-table-cell">Status</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Show</th>
                                                                <th style="width: 40px" class="d-none d-md-table-cell">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data as $rs)
                                                            <tr>
                                                                <td class="d-none d-md-table-cell">{{$rs->id}}</td>
                                                                <td class="d-none d-md-table-cell">{{$rs->name}}</td>
                                                                <td class="d-none d-md-table-cell">{{$rs->email}}</td>
                                                                <td class="d-none d-md-table-cell">
                                                                    @foreach ($rs->roles as $role)
                                                                        {{$role->name}}
                                                                    @endforeach
                                                                </td>
                                                                <td class="d-none d-md-table-cell">{{$rs->status}}</td>
                                                                <td><a href="{{route('admin.user.destroy', ['id'=>$rs->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none">
                                                                    <i class="align-middle" data-feather="trash-2"></i>Delete
                                                                </a></td>
                                                                <td><a  href="{{route('admin.user.show', ['id'=>$rs->id])}}" class="btn btn-sm btn-success" style="text-decoration: none"
                                                                    onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=900')">
                                                                    <i class="align-middle" data-feather="eye"></i>Show
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
