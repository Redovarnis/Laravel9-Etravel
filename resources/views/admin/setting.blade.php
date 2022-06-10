@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')
            <!-- CONTENT START -->

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Settings</h1>

                    <!-- BREADCRUMB START -->
                    <nav aria-label="breadcrumb">
                        <ol class="nav mb-3" >
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('admin.index')}}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link disabled">/</a></li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Settings</a>
                            </li>
                        </ol>
                    </nav>
                    <!-- !BREADCRUMB END-->

                    <!-- SETTINGS START -->
                    <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Smtp Email</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Social Media</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Contact Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-6">References</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- TAB 1 -->
                                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Title</h5></label>
                                                <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{$data->title}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Keywords</h5></label>
                                                <input type="text" class="form-control form-control-lg" name="keywords" value="{{$data->keywords}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Description</h5></label>
                                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Company</h5></label>
                                                <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Address</h5></label>
                                                <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Phone</h5></label>
                                                <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Email</h5></label>
                                                <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                            </div>
                                            <div class="mb-3 form-control">
                                                <label class="" for="icon"><h5 class="card-title">Icon</strong></label>
                                                <input type="file" class="form-control form-control-lg" name="icon" value="{{$data->icon}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label><h5 class="card-title">Status</strong></label>
                                                <select class="form-select mb-3" name="status">
                                                    <option hidden selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- !TAB 1 -->
                                        <!-- TAB 2 -->
                                        <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Smtp Server</h5></label>
                                                <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Smtp Email</h5></label>
                                                <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="password"><h5 class="card-title">Password</h5></label>
                                                <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Smtp Port</h5></label>
                                                <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                            </div>
                                        </div>
                                        <!-- !TAB 2 -->
                                        <!-- TAB 3 -->
                                        <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Fax</h5></label>
                                                <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Facebook</h5></label>
                                                <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Instagram</h5></label>
                                                <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                            </div>
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Youtube</h5></label>
                                                <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                            </div>
                                        </div>
                                        <!-- !TAB 3 -->
                                        <!-- TAB 4 -->
                                        <div class="tab-pane fade" id="tab-4" role="tabpanel">
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">About Us</h5></label>
                                                <textarea class="form-control" id="aboutus" name="aboutus">
                                                    {{$data->aboutus}}
                                                </textarea>
                                            </div>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#aboutus' ) )
                                                    .then( editor => {
                                                            console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                            console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                        <!-- !TAB 4 -->
                                        <!-- TAB 5 -->
                                        <div class="tab-pane fade" id="tab-5" role="tabpanel">
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">Contact Page</h5></label>
                                                <textarea class="form-control" id="contact" name="contact">
                                                    {{$data->contact}}
                                                </textarea>
                                            </div>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#contact' ) )
                                                    .then( editor => {
                                                            console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                            console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                        <!-- !TAB 5 -->
                                        <!-- TAB 6 -->
                                        <div class="tab-pane fade" id="tab-6" role="tabpanel">
                                            <div class="mb-3 form-label">
                                                <label for="email"><h5 class="card-title">References</h5></label>
                                                <textarea class="form-control" id="references" name="references">
                                                    {{$data->references}}
                                                </textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#references' ) )
                                                        .then( editor => {
                                                                console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                                console.error( error );
                                                        } );
                                                </script>
                                            </div>
                                        </div>
                                        <!-- !TAB 6 -->
                                    </div>
                                    <div class="form-label">
                                        <button type="submit" class="btn btn-primary">Update
                                    </div>
                                </div>
                                <!-- Settings BODY END -->
                            </div>
                        </div>
                    </form>
                    <!-- Settings MAIN CONTENT END -->
				</div>
			</main>
            <!-- CONTENT END -->
@endsection
