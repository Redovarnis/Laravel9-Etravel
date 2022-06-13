@extends('layouts.frontbase')

@section('title', 'Add Place')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">Add Listing</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-12">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>Add Listing</h2>
                    </div>
                    <!-- Contact Form -->
                    @include('home.messages')
                    <form action="{{route("storeplace")}}" method="post">
                        @csrf
                        <label >Parent Place </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <select class="form-control" name="category_id">
                                    @foreach ($data as $rs)
                                        <option value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label>Title</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input type="text" class="form-control form-control-lg" name="title" placeholder="Title">
                            </div>
                        </div>
                        <label>Keywords</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input type="text" class="form-control form-control-lg" name="keywords" placeholder="Keywords">
                            </div>
                        </div>
                        <label>Description</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input type="text" class="form-control form-control-lg" name="description" placeholder="Description">
                            </div>
                        </div>
                        <label>City</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input type="text" class="form-control form-control-lg" name="city" placeholder="city">
                            </div>
                        </div>
                        <label>Country</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input type="text" class="form-control form-control-lg" name="country" placeholder="country">
                            </div>
                        </div>
                        <label>Location</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input type="text" class="form-control form-control-lg" name="location" placeholder="location">
                            </div>
                        </div>
                        <label>Detail
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <textarea class="form-control" id="detail" name="detail"></textarea>
                                <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                                </script>
                            </div>
                        </div>
                        <label>Image</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <input type="file" class="form-control form-control-lg" name="image">
                            </div>
                        </div>
                        <label>Select</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <select class="form-select mb-3" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
@endsection

