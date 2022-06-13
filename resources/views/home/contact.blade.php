@extends('layouts.frontbase')

@section('title', 'Contact ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-8">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>Contact Form</h2>
                    </div>
                    <p>If you want to work with us, just want to simply state your opinion or thanking us
                        for what we are doing you can use the form below to get in contact and speak <a href="https://play-lh.googleusercontent.com/8ddL1kuoNUB5vUvgDVjYY3_6HwQcrg1K2fd_R8soD-e2QYj8fT9cfhfh3G0hnSruLKec"><i class="text-danger">among us</i></a>.</p>
                    <br>
                    <!-- Contact Form -->
                    @include('home.messages')
                    <form action="{{route("storemessage")}}" method="post">
                        @csrf
                        <label>Name</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="name" placeholder="Name & Surname">
                            </div>
                        </div>
                        <label>Phone</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="tel" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <label>Email
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <label>Subject</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <label>Message</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" type="text" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <p><button type="submit" class="btn btn-primary">Send Message</button></p>
                    </form>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
                <!-- Side Column -->
                <div class="col-md-4">
                    <!-- Recent Posts -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contact Info</h3>
                        </div>
                        <div class="panel-body">
                            {!! $setting->contact !!}
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa-phone color-primary"></i>{{$setting->phone}}</li>
                                <li>
                                    <i class="fa-envelope color-primary"></i><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                                <li>
                                    <i class="fa-home color-primary"></i><a href="{{$setting->smtpserver}}">{{$setting->smtpserver}}</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="color-primary">Monday-Friday:</strong> 9am to 6pm</li>
                                <li>
                                    <strong class="color-primary">Saturday:</strong> 10am to 3pm</li>
                                <li>
                                    <strong class="color-primary">Sunday:</strong> Closed</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End recent Posts -->
                    <!-- About -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{route('about')}}"><h3 class="panel-title">About Us</h3></a>
                        </div>
                        <div class="panel-body">
                            {!! $setting->description !!}
                        </div>
                    </div>
                    <!-- End About -->
                </div>
                <!-- End Side Column -->
            </div>
        </div>
    </div>
@endsection

