@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')

            <!-- MAIN CONTENT -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Add Category</h1>

					<div class="row">
						<div class="col-12">

                            <!-- Cardholder START -->
							<div class="card">
								<div class="card-body">
                                    <!-- card -->
                                    <div class="card ">
                                        <!-- card-header -->
                                        <div class="card-header">
                                            <strong class="card-title mb-0">Category Elements</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">

                                                <div class="form-label">
                                                    <label >Parent Category </label>

                                                    <select class="form-control" name="parent_id">
                                                        <option value="0" selected="selected">Main Category</option>
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
