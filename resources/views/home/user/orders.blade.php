@extends('layouts.frontbase')

@section('title', 'User Order List')

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">Orders List</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- User Menu -->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">User Order List</h3>
                        </div>
                        <div class="panel-body">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                    <!-- User Menu -->
                </div>
                <!-- User Orders -->
                <div class="col-md-9">
                    <div class="headline">
                        <h2>User Orders & Review</h2>
                    </div>
                    <table class="table table-hover my-0" aria-labelledby="Order List">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">Id</th>
                                <th class="d-none d-md-table-cell">Name & Surname</th>
                                <th class="d-none d-md-table-cell">Phone</th>
                                <th class="d-none d-md-table-cell">Email</th>
                                <th class="d-none d-md-table-cell">Address</th>
                                <th class="d-none d-xl-table-cell">Status</th>
                                <th style="width: 40px" class="d-none d-md-table-cell">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $rs)
                            <tr>
                                <td class="d-none d-md-table-cell">{{$rs->id}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->name}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->phone}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->email}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->address}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->status}}</td>
                                <td><a href="{{route('userpanel.orderdetail', ['id'=>$rs->id])}}" class="btn  btn-sm btn-success" style="text-decoration: none">
                                    <i class="align-middle" data-feather="eye"></i>Show Detail
                                </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <!-- End User Orders -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection

