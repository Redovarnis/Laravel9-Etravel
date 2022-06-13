@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

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
                    <h2 class="margin-top-5 margin-bottom-0">INFINITE</h2>
                    <p>PERFORMANCE</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-users fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">10,000+</h2>
                    <p>People</p>
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
                <h2 class="text-center">Welcome to E-Travel</h2>
                <p class="text-center">In this site you can find fantastic places to visit,
                    and eat the cultural foods of the place you're visiting. Not only that
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, minus!</p>
                <p class="text-center">Traveling soon? Save your amazing ideas all in one place with Trips. Save traveler-recommended places for your trip
                    View the things to do, restaurants and hotels you saved on a map
                    Easily access all your saves while traveling, wherever you go..</p>
            </div>
            <!-- End Main Text -->
        </div>
        <div id="carousel-example-2" class="carousel slide alternative" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @while ($i < $imgcnt)
                    <li data-target="{#carousel-example-2}" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
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
                                <a href="{{route('place', ['id'=>$singlers->id])}}">
                                    <img src="{{Storage::url($singlers->image)}}" style="max-width:100%;">
                                    <div style="text-align:center;">
                                        <a href="{{route('place', ['id'=>$singlers->id])}}">
                                            {{$singlers->title}}
                                        </a>
                                    </div>

                                    <div class="noselect" style="text-align: center;">
                                        @php
                                            $average = $singlers->comment->avg('rate');
                                        @endphp
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < (int) $average)
                                                <i class="fa fa-star color-yellow"></i>
                                            @else
                                                <i class="fa fa-star color-gray-light"></i>
                                            @endif
                                        @endfor
                                         ({{$singlers->comment->count('id')}})
                                    </div>
                                    <a href="{{route('shopcart.add', ['id'=>$singlers->id])}}" class="center2 btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </a>
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
                    @foreach ($placelist2 as $rs)
                        @foreach ($rs as $singlers)


                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInLeft">
                                    <img alt="image1" src="{{Storage::url($singlers->image)}}" style="height: 210px; width: 397px;">
                                    <figcaption style="height:200px;">
                                        <h3>{{$singlers->title}}</h3>
                                        <span>{{$singlers->description}}</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>

                        <!-- //Portfolio Item// -->
                        @endforeach
                    @endforeach
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
                    <a href="{{route('contact')}}"><button class="btn btn-primary btn-lg" type="button">View Details</button></a>
                </p>
            </div>
        </div>
    </div>
    <!-- === END WE'RE HIRING === -->
</div>
<!-- === END CONTENT === -->
@endsection

