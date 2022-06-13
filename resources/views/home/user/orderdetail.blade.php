@extends('layouts.frontbase')

@section('title', 'User Detail')

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">User Detail</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Side Column -->
                <div class="col-md-3">
                    <!-- Recent Posts -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">User Menu</h3>
                        </div>
                        <div class="panel-body">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                    <!-- End recent Posts -->
                </div>
                <!-- End Side Column -->
                <!-- Main Column -->
                <div class="col-md-9">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>User Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th>Name :</th> <td>{{$order->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone :</th> <td>{{$order->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email :</th> <td>{{$order->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address :</th> <td>{{$order->address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Note :</th> <td>{{$order->note}}</td>
                                                    </tr>
                                                </table>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product Name</th>
                                                        <th>Image</th>
                                                        <th>Quantity</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($orderplace as $rs)
                                                        <tr>
                                                            <td>{{ $rs->id }}</td>
                                                            <td><a href="{{route('place', ['id'=>$rs->place->id])}}">{{ $rs->place->title }}</a></td>
                                                            <td><a href="{{route('place', ['id'=>$rs->place->id])}}"><img src="{{ Storage::url($rs->place->image) }}" alt="" style="width: 60px; height: 60px;"/></td></a>
                                                            <td>{{$rs->quantity}}</td>
                                                            <td>
                                                                <a href="#"
                                                                    class="btn btn-danger"><i class="fa fa-close"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection

