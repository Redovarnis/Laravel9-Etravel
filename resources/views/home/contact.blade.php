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
                <div class="col-md-9">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>Contact Form</h2>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor
                        sit amet, consectetur adipiscing elit landitiis.</p>
                    <br>
                    <!-- Contact Form -->
                    <form >
                        <label>Name</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <label>Email
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <label>Message</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </p>
                    </form>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
                <!-- Side Column -->
                <div class="col-md-3">
                    <!-- Recent Posts -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contact Info</h3>
                        </div>
                        <div class="panel-body">
                            {!! $setting->contact !!}
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa-phone color-primary"></i>+353-44-55-66</li>
                                <li>
                                    <i class="fa-envelope color-primary"></i>info@example.com</li>
                                <li>
                                    <i class="fa-home color-primary"></i>http://www.example.com</li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="color-primary">Monday-Friday:</strong>9am to 6pm</li>
                                <li>
                                    <strong class="color-primary">Saturday:</strong>10am to 3pm</li>
                                <li>
                                    <strong class="color-primary">Sunday:</strong>Closed</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End recent Posts -->
                    <!-- About -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">About</h3>
                        </div>
                        <div class="panel-body">
                            Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                        </div>
                    </div>
                    <!-- End About -->
                </div>
                <!-- End Side Column -->
            </div>
        </div>
    </div>
@endsection

