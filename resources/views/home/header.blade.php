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
    <div id="pre-header" class="container" style="height:340px">
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
                            <a href="{{route('home')}}" class="fa-home">Home</a>
                        </li>
                        <li>
                            <span class="fa-gears">Categories</span>
                                <ul>
                                    @foreach ($mainCategories as $rs)
                                        @if (count($rs->children))
                                            <li class="parent">
                                        @else
                                            <li>
                                        @endif
                                        <span>{{ $rs->title }}</span>
                                        @if (count($rs->children))
                                            @include('home.categorytree', ['children' => $rs->children])
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                        </li>
                        <li>
                            <span class="fa-copy">Pages</span>
                            <ul>
                                <li>
                                    <a href="pages-about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="pages-services.html">Services</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">F.A.Q.</a>
                                </li>
                                <li>
                                    <a href="pages-about-me.html">About Me</a>
                                </li>
                                <li>
                                    <a href="pages-full-width.html">Full Width</a>
                                </li>
                                <li>
                                    <a href="pages-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-right-sidebar.html">Right Sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-login.html">Login</a>
                                </li>
                                <li>
                                    <a href="pages-sign-up.html">Sign-Up</a>
                                </li>
                                <li>
                                    <a href="pages-404.html">404 Error Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="fa-th">Portfolio</span>
                            <ul>
                                <li>
                                    <a href="portfolio-2-column.html">2 Column</a>
                                </li>
                                <li>
                                    <a href="portfolio-3-column.html">3 Column</a>
                                </li>
                                <li>
                                    <a href="portfolio-4-column.html">4 Column</a>
                                </li>
                                <li>
                                    <a href="portfolio-6-column.html">6 Column</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="fa-font">Blog</span>
                            <ul>
                                <li>
                                    <a href="blog-list.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Blog Single Item</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html" class="fa-comment">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->
    <div id="post_header" class="container" style="height:340px">
    </div>
    <div id="content-top-border" class="container">
    </div>
    <!-- === END HEADER === -->
