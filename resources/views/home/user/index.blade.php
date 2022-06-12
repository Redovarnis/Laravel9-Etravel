@extends('layouts.frontbase')

@section('title', 'User Panel')

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">User Panel</a></li>
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
                        <h2>User Profile</h2>
                    </div>
                    @include('profile.show')
                    <br>
                    <!-- User Menu -->

                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection

