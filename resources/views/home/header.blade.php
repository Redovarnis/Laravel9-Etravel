<div id="body-bg">
    <ul class="social-icons pull-right hidden-xs">
        <li class="social-youtube">
            <a href="https://www.youtube.com/" target="_blank" title="Youtube"></a>
        </li>
        <li class="social-twitter">
            <a href="https://www.twitter.com/" target="_blank" title="Twitter"></a>
        </li>
        <li class="social-facebook">
            <a href="https://www.facebook.com/" target="_blank" title="Facebook"></a>
        </li>
        <li class="social-googleplus">
            <a href="https://www.google.com/" target="_blank" title="GooglePlus"></a>
        </li>
    </ul>
    <div id="pre-header" class="container" style="@if (1) height:40px; @else height:340px; @endif">
    </div>
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{route('home')}}" title="">
                        <img src="{{asset('assets')}}/img/logo.png" alt="Logo" />
                    </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- Top Menu -->
    <div id="hornav" class="container no-padding">
        <div class="row">
            <div class="col-md-12 no-padding">
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                @endphp
                <div class="text-center visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="{{route('home')}}" class="fa-home noselect">Home</a>
                        </li>
                        <li>
                            <span class="fa-gears noselect">Cat.</span>
                            <ul>
                                @foreach ($mainCategories as $rs)
                                    <li class="@if (count($rs->children)) parent @endif"><a class="noselect">{{ $rs->title }}</a>
                                        @if (count($rs->children))
                                            @include('home.categorytree', ['children' => $rs->children])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('faq')}}" class="fa-comment noselect">FAQ</a></li>
                        <li><a href="{{route('about')}}" class="fa-comment noselect">About</a></li>
                        <li><a href="{{route('contact')}}" class="fa-comment noselect">Cont.</a></li>
                        <li><a href="{{route('references')}}" class="fa-comment noselect">Refs.</a></li>
                        <li>
                            <a href="{{route('shopcart.index')}}"> <span class="fa fa-gift bigicon"></span>My Cart ({{
                                \App\Http\Controllers\ShopCartController::countshopcart()
                            }})</a>
                        <li class="pull-right">
                            @auth
                                <a class="fa-user noselect">{{Auth::user()->name}}</a>
                                <ul>
                                    <li><a href="{{route('userpanel.index')}}" class="noselect">Dashboard</a></li>
                                    <li><a href="{{route('userpanel.reviews')}}" class="noselect">My Reviews</a></li>
                                    <li><a href="/logoutuser" class="noselect">Logout</a></li>
                                </ul>
                            @endauth
                            @guest
                                <a class="fa-user noselect">User</a>
                                <ul>
                                    <li><a href="/loginuser" class="noselect">Login</a></li>
                                    <li><a href="/registeruser" class="noselect">Register</a></li>
                                </ul>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->
    <div id="post_header" class="container" style="@if (1) height:40px; @else height:340px; @endif">
    </div>
    <div id="content-top-border" class="container">
    </div>
    <!-- === END HEADER === -->
