@extends('layouts.frontbase')

@section('title', 'User ShopCart')

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">User ShopCart</a></li>
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
                        <h2>User ShopCart</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
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
                                                    @foreach($cart as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td><a href="{{route('place', ['id'=>$item->place->id])}}">{{ $item->place->title }}</a></td>
                                                            <td><a href="{{route('place', ['id'=>$item->place->id])}}"><img src="{{ Storage::url($item->place->image) }}" alt="" style="width: 60px; height: 60px;"/></td></a>
                                                            <td>
                                                                <form action="{{route('shopcart.update', ['id'=>$item->id])}}" method="POST">
                                                                    @csrf
                                                                    <div class="input-group">
                                                                        <input class="input form-control input-number" name="quantity" type="number"  value="{{$item->quantity}}" min="1" max="{{$item->place->quantity}}" onchange="this.form.submit()">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('shopcart.destroy', ['id'=>$item->id])}}"
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
                    </div>
                    <!-- End Main Content -->
                    <br>
                    <!-- User Menu -->

                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection

