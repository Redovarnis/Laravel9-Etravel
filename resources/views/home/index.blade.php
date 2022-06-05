@extends('layouts.frontbase')

@section('title', 'E-travel')

@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <!-- === BEGIN 3,474.5 === -->
    <div class="container background-gray-lighter">
        <div class="row margin-vert-40">
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-clock-o fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-tachometer fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-users fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div>
        </div>
    </div>
    <!-- === END 3,474.5 === -->
    <!-- === BEGIN Welcome to Lifestyle === -->
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Text -->
            <div class="col-md-12">
                <h2 class="text-center">Welcome to LifeStyle</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                    lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p class="text-center">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                    augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur eget nisl
                    a risus.</p>
            </div>
            <!-- End Main Text -->
        </div>
        <div id="carousel-example-2" class="carousel slide alternative" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @while ($i < $imgcnt)
                    <li data-target="#carousel-example-2" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
                    @php $i++ @endphp
                    @break($i == (int)ceil($imgcnt / $sliderchunk))
                @endwhile
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($placelist2 as $rs)
                    @if ($loop->first)
                        <div class="item active">
                    @else
                        <div class="item">
                    @endif
                    <div class="row">
                        @foreach ($rs as $singlers)
                            <div class="col-md-{{(int)floor(12 / $sliderchunk)}}">
                                <img src="{{Storage::url($singlers->image)}}" style="max-width:100%;">
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-2" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-2" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <!-- === END Welcome to Lifestyle === -->
    <!-- BEGIN Portfolio Wrapper-->
    <div class="container background-gray-lighter">

        <div class="row padding-vert-20">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!-- Portfolio -->
                <ul class="portfolio-group">
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image1" src="{{asset('assets')}}/img/frontpage/image1.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image2" src="{{asset('assets')}}/img/frontpage/image2.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image3" src="{{asset('assets')}}/img/frontpage/image3.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image4" src="{{asset('assets')}}/img/frontpage/image4.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image5" src="{{asset('assets')}}/img/frontpage/image5.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image6" src="{{asset('assets')}}/img/frontpage/image6.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                </ul>
                <!-- End Portfolio -->
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    <!-- END Portfolio Wrapper-->
    <!-- === BEGIN WE'RE HIRING === -->
    <div class="container background-white">
        <div class="row padding-vert-40">
            <div class="col-md-12">
                <h2 class="animate fadeIn text-center">WE ARE CURRENTLY HIRING!</h2>
                <p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>
                <p class="animate fadeInUp text-center">
                    <button class="btn btn-primary btn-lg" type="button">View Details</button>
                </p>
            </div>
        </div>
    </div>
    <!-- === END WE'RE HIRING === -->
</div>
<!-- === END CONTENT === -->
@endsection

