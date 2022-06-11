@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-9">
                    <div class="blog-post">
                        <div class="blog-item-header">
                            <h2>
                                <a href="#">
                                    {{$data->title}}
                                </a>
                            </h2>
                        </div>
                        <div class="blog-post-details">
                            <!-- Author Name -->
                            <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                <i class="fa fa-user color-gray-light"></i>
                                <a href="#">{{$data->user_id}}-User_Name_Sample</a>
                            </div>
                            <!-- End Author Name -->
                            <!-- Category -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                <a href="">
                                    <i class="fa fa-comments color-gray-light"></i>
                                    {{$data->category->title}}
                                </a>
                            </div>
                            <!-- End Category -->
                            <!-- # of Comments -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                <a href="">
                                    <i class="fa fa-comments color-gray-light"></i>
                                    3 Comments
                                </a>
                            </div>
                            <!-- End # of Comments -->
                            <!-- Date -->
                            <div class="blog-post-details-item blog-post-details-item-left">
                                <i class="fa fa-calendar color-gray-light"></i>
                                <a href="#">{{$data->created_at}}</a>
                            </div>
                            <!-- End Date -->
                        </div>
                        <div class="blog-item">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                @include('home.messages')
                                <!-- === BEGIN SLIDER === -->
                                <div class="container no-padding">
                                    <div class="row">
                                        <!-- Carousel Slideshow -->
                                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel Indicators -->
                                            <ol class="carousel-indicators">
                                                @foreach ($images as $rs)
                                                    @if ($loop->first)
                                                        <li data-target="#carousel-example" data-slide-to="{{$rs->id-1}}" class="active"></li>
                                                    @else
                                                        <li data-target="#carousel-example" data-slide-to="{{$rs->id-1}}"></li>
                                                    @endif

                                                @endforeach
                                            </ol>
                                            <div class="clearfix"></div>
                                            <!-- End Carousel Indicators -->
                                            <!-- Carousel Images -->
                                            <div class="carousel-inner">
                                                @foreach ($images as $rs)
                                                    @if ($loop->first)
                                                        <div class="item active">
                                                    @else
                                                        <div class="item">
                                                    @endif
                                                        <img src="{{Storage::url($rs->image)}}" style="width:1080px; height:540px;">
                                                    </div>
                                                @endforeach

                                            </div>
                                            <!-- End Carousel Images -->
                                            <!-- Carousel Controls -->
                                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                            <!-- End Carousel Controls -->
                                        </div>
                                        <!-- End Carousel Slideshow -->
                                    </div>
                            </div>
                            <!-- === END SLIDER === -->
                            <div id="pre-header" class="container" style="height: 40px">
                                <!-- Spacing below slider -->
                            </div>
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="{{Storage::url($data->image)}}" alt="image1" style="width:300px; height:165.38px;">
                                </div>
                                <div class="col-md-7">
                                    <p>{{$data->description}}</p>

                                </div>
                                <div class="col-md-12">
                                    <p>
                                        {!! $data->detail !!}</p>
                                    <blockquote class="primary">
                                        <p>
                                            <em>"{{$data->description}}"</em>
                                        </p>
                                        <small>
                                            Someone famous in
                                            <cite title="Source Title">Source Title</cite>
                                        </small>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="blog-item-footer">
                                <!-- About the Author -->
                                <div class="blog-author panel panel-default margin-bottom-30">
                                    <div class="panel-heading">
                                        <h3>About the Author</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img class="pull-left" src="assets/img/profiles/87.jpg" alt="image1">
                                            </div>
                                            <div class="col-md-10">
                                                <label>John Doe</label>
                                                <p>Lorem ipsum dolor sit amet, in pri offendit ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui. Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur discere eos, nam an feugiat
                                                    voluptua.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End About the Author -->
                                <!-- Comments -->
                                <div class="blog-recent-comments panel panel-default margin-bottom-30">
                                    <div class="panel-heading">
                                        <h3>Comments</h3>
                                    </div>
                                    <ul class="list-group">
                                        @foreach ($reviews as $rs)
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-md-2 profile-thumb">
                                                        <a href="#">
                                                            <img class="media-object" src="{{asset('assets')}}/img/profiles/avatar.png" alt="{{$rs->user->name}}">
                                                            <div style="text-align: center;" ><label>{{$rs->user->name}}</label></div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="pull-left"><h4>{{$rs->subject}}</h4></div>
                                                        <div class="pull-right"><span class="date"><i class="fa fa-clock-o color-gray-light"></i> {{$rs->created_at}}</span></div>
                                                        <div class="clearfix"></div>
                                                        <br>
                                                        <p>{!!$rs->review!!}</p>
                                                        <div class="clearfix"></div>
                                                        <div class="rating pull-right">
                                                            <i class="fa fa-star @if ($rs->rate<5) color-gray-light @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<4) color-gray-light @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<3) color-gray-light @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<2) color-gray-light @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<1) color-gray-light @endif"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                        <!-- Comment Form -->
                                        <li class="list-group-item">
                                            <div class="blog-comment-form">
                                                <div class="row margin-top-20">
                                                    <div class="col-md-12">
                                                        <div class="pull-left">
                                                            <h3>Leave a Comment</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-top-20">
                                                    <div class="col-md-12">
                                                        <form action="{{route('storecomment')}}" method="post">
                                                            @csrf
                                                            <input class="form-control" type="hidden" name="place_id" value="{{$data->id}}">
                                                            <label>Subject</label>
                                                            <div class="row margin-bottom-20">
                                                                <div class="col-md-7 col-md-offset-0">
                                                                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                                                                </div>
                                                            </div>
                                                            <label>Review</label>
                                                            <div class="row margin-bottom-20">
                                                                <div class="col-md-11 col-md-offset-0">
                                                                    <textarea class="form-control" name="review" rows="8" placeholder="Your review"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row margin-bottom-20">
                                                                <div class="col-md-3 col-md-offset-0">
                                                                    <label>Your Rating: </label>
                                                                </div>
                                                                <div class="col-md-1 col-md-offset-0">
                                                                    <div class="rating">
                                                                        <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label>
                                                                        <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                                                                        <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
                                                                        <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
                                                                        <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                            @auth
                                                                <p><button class="btn btn-primary" type="submit">Send Message</button></p>
                                                            @else
                                                                <p><a href="/login" class="btn btn-primary btn-red"> For Submit Your Review Please Login </a></p>
                                                            @endauth
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Comment Form -->
                                    </ul>
                                </div>
                                <!-- End Comments -->
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Post -->
                </div>
                <!-- End Main Column -->
                <!-- Side Column -->
                <div class="col-md-3">
                    <!-- Blog Tags -->
                    <div class="blog-tags">
                        <h3>Keywords</h3>
                        <ul class="blog-tags">
                            @foreach ($keywords as $rs)
                                <li>
                                    <a href="#" class="blog-tag">{{$rs->keywords}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- End Blog Tags -->
                    <!-- Recent Posts -->
                    <div class="recent-posts">
                        <h3>Recent Posts</h3>
                        <ul class="posts-list margin-top-10">
                            <li>
                                @foreach ($posts as $rs)
                                    @if ($rs->id == $data->id)
                                        @continue
                                    @endif
                                    <div class="recent-post">
                                        <a href="{{route('place', ['id'=>$rs->id])}}">
                                            <img class="pull-left" src="{{Storage::url($rs->image)}}" alt="thumb1" style="width:54px; height:54px;">
                                        </a>
                                        <a href="{{route('place', ['id'=>$rs->id])}}" class="posts-list-title">{{$rs->title}}</a>
                                        <br>
                                        <span class="recent-post-date">
                                            {{$rs->created_at}}
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <!-- End Recent Posts -->
                <!-- End Side Column -->
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->


@endsection

