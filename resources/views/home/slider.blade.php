        <!-- === BEGIN SLIDER === -->
        <div class="container no-padding">
            <div class="row">
                <!-- Carousel Slideshow -->
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <!-- Carousel Indicators -->
                    <ol class="carousel-indicators">
                        @foreach ($sliderdata as $rs)
                            <li data-target="#carousel-example" data-slide-to="{{$rs['id']-1}}" class="{{$rs['id']==1?'active':''}}"></li>
                        @endforeach
                    </ol>
                    <div class="clearfix"></div>
                    <!-- End Carousel Indicators -->
                    <!-- Carousel Images -->
                    <div class="carousel-inner">
                        @foreach ($sliderdata as $rs)
                            <div class="item {{$rs['id']==1?'active':''}}">
                                <img src="{{Storage::url($rs->image)}}" style="width: 1080px; height: 540px">
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
