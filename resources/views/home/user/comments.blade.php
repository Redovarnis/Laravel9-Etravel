@extends('layouts.frontbase')

@section('title', 'User Comments & Review')

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">User Comments & Review</a></li>
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
                            <h3 class="panel-title">User Menu</h3>
                        </div>
                        <div class="panel-body">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                    <!-- User Menu -->
                </div>
                <!-- User Comments -->
                <div class="col-md-9">
                    <div class="headline">
                        <h2>User Comments & Review</h2>
                    </div>
                    <table class="table table-hover my-0" aria-labelledby="Comment List">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">Id</th>
                                <th class="d-none d-md-table-cell">Name</th>
                                <th class="d-none d-md-table-cell">Place</th>
                                <th class="d-none d-md-table-cell">Subject</th>
                                <th class="d-none d-md-table-cell">Review</th>
                                <th class="d-none d-xl-table-cell">Rate</th>
                                <th class="d-none d-xl-table-cell">Status</th>
                                <th style="width: 40px" class="d-none d-md-table-cell">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $rs)
                            <tr>
                                <td class="d-none d-md-table-cell">{{$rs->id}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->user->name}}</td>
                                <td class="d-none d-md-table-cell"><a href="{{route('place', ['id'=>$rs->place_id])}}">{{$rs->place->title}}</a></td>
                                <td class="d-none d-md-table-cell">{{$rs->subject}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->review}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->rate}}</td>
                                <td class="d-none d-md-table-cell">{{$rs->status}}</td>
                                <td><a href="{{route('userpanel.reviewdestroy', ['id'=>$rs->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none">
                                    <i class="align-middle" data-feather="trash-2"></i>Delete
                                </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <!-- End User Comments -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection

