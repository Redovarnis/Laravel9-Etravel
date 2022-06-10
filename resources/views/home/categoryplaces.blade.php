@extends('layouts.frontbase')

@section('title', $category->title . ' Places')

@section('content')

    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">{{$category->title}}</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
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
                                    <div class="recent-post">
                                        <a href="{{route('place', ['id'=>$rs->id])}}">
                                            <img class="pull-left" src="{{Storage::url($rs->image)}}" alt="{{$rs->title}}" style="width:54px; height:54px;">
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
                </div>
                <!-- End Side Column -->
                <!-- Main Column -->
                <div class="col-md-9">
                    @foreach ($places as $rs)
                        <!-- Blog Post -->
                        <div class="blog-post padding-bottom-20">
                            <!-- Blog Item Header -->
                            <div class="blog-item-header">
                                <!-- Title -->
                                <h2><a href="{{route('place', ['id'=>$rs->id])}}">{{$rs->title}}</a></h2>
                                <div class="clearfix"></div>
                                <!-- End Title -->
                            </div>
                            <!-- End Blog Item Header -->
                            <!-- Blog Item Details -->
                            <div class="blog-post-details">
                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">{{$rs->created_at}}</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <a href="#">{{$rs->keywords}}</a>
                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        7 Comments
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <!-- End Blog Item Details -->
                            <!-- Blog Item Body -->
                            <div class="blog">
                                <div class="clearfix"></div>
                                <div class="blog-post-body row margin-top-15">
                                    <div class="col-md-5">
                                        <img class="margin-bottom-20" src="{{Storage::url($rs->image)}}" alt="{{$rs->title}}">
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$rs->description}}</p>
                                        <!-- Read More -->
                                        <a href="{{route('place', ['id'=>$rs->id])}}" class="btn btn-primary">
                                            Read More
                                            <i class="icon-chevron-right readmore-icon"></i>
                                        </a>
                                        <!-- End Read More -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Item Body -->
                        </div>
                        <!-- End Blog Item -->
                    @endforeach

                    <!-- Pagination -->
                    <div class="text-center">
                        <ul class="pagination pagination-sm">
                            <li>
                                <a href="#">«</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">»</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection
