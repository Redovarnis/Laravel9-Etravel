@extends('layouts.frontbase')

@section('title', 'Order Page')

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">Order</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-6">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>Shipping Information</h2>
                        <br>
                    </div>
                    <!-- Contact Form -->
                    @include('home.messages')
                    <form action="{{route("shopcart.storeorder")}}" method="post">
                        @csrf
                        <label>Name</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" placeholder="Name & Surname" required>
                            </div>
                        </div>
                        <label>Phone</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="tel" name="phone" placeholder="Phone Number" required>
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
                        <label>Address</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="address" placeholder="Address" required>
                            </div>
                        </div>
                        <p><button type="submit" class="btn btn-primary">Send Message</button></p>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
                <!-- Side Column -->
                <div class="col-md-6">
                    @include('home.messages')
                        <!-- Main Content -->
                        <div class="headline">
                            <h2>Payment Information [{{$total}}$]</h2>
                        </div>
                        <br>
                        <!-- Contact Form -->
                        <label>Total</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" type="hidden" name="total" value="{{$total}}">
                            </div>
                        </div>
                        <label>Holder</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="tel" name="holder" placeholder="Card Holder">
                            </div>
                        </div>
                        <label>Card Number
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="number" placeholder="Card Number">
                            </div>
                        </div>
                        <label>Exp. Date</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="date" placeholder="Exp. Date">
                            </div>
                        </div>
                        <label>Security Code</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <input class="form-control" type="text" name="code" placeholder="Security Code">
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Order</button>
                        </div>

                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                    </form>
                <!-- End Side Column -->
            </div>
        </div>
    </div>
@endsection

