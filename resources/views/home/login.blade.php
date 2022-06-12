@extends('layouts.frontbase')

@section('title', 'User Login ')
@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">User Login</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <div id="content">
                        <div class="container background-white">
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        <form class="login-page" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="login-header margin-bottom-30">
                                                <h2>Login to your account</h2>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <div>
                                                    <x-jet-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                                </div>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                <div class="mt-4">
                                                    <x-jet-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="remember_me" class="checkbox flex items-center">
                                                        <x-jet-checkbox id="remember_me" name="remember" />
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href=""><button class="btn btn-primary pull-right" type="submit">Login</button></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <h4>Forget your Password ?</h4>
                                            <p>
                                                <a href="#">Click here </a>to reset your password.</p>
                                        </form>
                                    </div>
                                    <!-- End Login Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

