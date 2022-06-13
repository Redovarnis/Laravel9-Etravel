@extends('layouts.frontbase')

@section('title', 'Order Complete')
@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">Order Complete</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    @include('home.messages')
                </div>
            </div>
        </div>
    </div>
@endsection

