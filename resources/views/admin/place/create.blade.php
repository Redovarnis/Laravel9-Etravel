@extends('layouts.adminbase')

@section('title', 'Add Place')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')

            <!-- MAIN CONTENT -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Add Place</h1>

					<div class="row">
						<div class="col-12">

                            <!-- Cardholder START -->
							<div class="card">
								<div class="card-body">
                                    <!-- card -->
                                    <div class="card ">
                                        <!-- card-header -->
                                        <div class="card-header">
                                            <strong class="card-title mb-0">Place Elements</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin.place.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">

                                                <div class="form-label">
                                                    <label >Parent Place </label>

                                                    <select class="form-control" name="category_id">
                                                        @foreach ($data as $rs)
                                                            <option value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Title</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="title" placeholder="Title">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Keywords</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="keywords" placeholder="Keywords">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Description</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="description" placeholder="Description">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>City</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="city" placeholder="city">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Country</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="country" placeholder="country">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Location</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="location" placeholder="location">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Detail</strong></label>
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
                                                <div class="mb-3 form-control">
                                                    <label class="" for="image"><strong>Image</strong></label>
                                                    <input type="file" class="form-control form-control-lg" name="image">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label><strong>Select</strong></label>
                                                    <select class="form-select mb-3" name="status">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.form-body -->

                                            <div class="card-footer">
                                                <button class="btn btn-primary">Save</button>
                                            </div>
                                            <!-- /.card-footer -->
                                        </form>
								    </div>
                                </div>
							</div>
                            <!-- /.card-body -->
						</div>
					</div>
				</div>
			</main>
            <!-- CONTENT END -->
@endsection
