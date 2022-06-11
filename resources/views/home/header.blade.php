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
    <div id="pre-header" class="container" style="@if ($spacing) height:40px; @else height:340px; @endif">
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
                            <span class="fa-gears noselect">Categories</span>
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
                        <li><a href="{{route('about')}}" class="fa-comment noselect">About</a></li>
                        <li><a href="{{route('contact')}}" class="fa-comment noselect">Contact</a></li>
                        <li><a href="{{route('references')}}" class="fa-comment noselect">References</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->
    <div id="post_header" class="container" style="@if ($spacing) height:40px; @else height:340px; @endif">
    </div>
    <div id="content-top-border" class="container">
    </div>
    <!-- === END HEADER === -->
