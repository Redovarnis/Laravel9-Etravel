@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <h2>F.A.Q.</h2>
                    <p>Te lorem dolorum sadipscing vel, has in ullum dicunt, ea eos appetere placerat probatus. Vis eu movet elaboraret, eu scaevola tacimates sed, sint laoreet ex pri. Est dicat consetetur ei, quo mazim debet elitr ad. Vim indoctum
                        expetendis ut, ut nostrud maluisset est. Ignota nemore cum an, voluptua expetenda dignissim eu mei. Pellentesque nec eros nulla. Vivamus nec ligula dolor. In facilisis suscipit gravida. Nunc malesuada.</p>
                    <hr class="margin-vert-40">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane active in fade" id="faq">
                                    <div class="panel-group" id="accordion">
                                        @foreach ($datalist as $key=>$rs)
                                            <!-- FAQ Item -->
                                            <div class="panel panel-default panel-faq">
                                                <div class="panel-heading">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-{{$key}}">
                                                        <h4 class="panel-title">
                                                            {!! $rs->question !!}
                                                            <span class="pull-right">
                                                                <i class="glyphicon glyphicon-plus"></i>
                                                            </span>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="faq-sub-{{$key}}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        {!! $rs->answer !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End FAQ Item -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 class="margin-bottom-10">Could not find the answer?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in mauris tempor purus accumsan dignissim. Morbi risus nisl, adipiscing vel sagittis sit amet, condimentum vitae lectus. Pellentesque nec eros nulla. Vivamus
                                nec ligula dolor. In facilisis suscipit gravida. Nunc malesuada.</p>
                            <button type="button" class="btn btn-primary btn-sm">ASK A QUESTION</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

