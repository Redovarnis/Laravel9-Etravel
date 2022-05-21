@extends('layouts.adminbase')

@section('title', 'Edit Place: ' .$data->title)

@section('content')

            <!-- MAIN CONTENT -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3 "> Edit Place: <div class="text-primary btn badge bg-white text-dark ms-2 " > {{$data->title}} </div> </h1>

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
                                        <form role="form" action=" {{route('admin.place.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">

                                                <div class="mb-3 form-label">
                                                    <label >Parent Place</label>

                                                    <select class="mb-3 form-select" name="category_id">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{ $rs->id }}"
                                                                @if ($rs->id == $data->category_id)
                                                                    selected="selected"
                                                                @endif>
                                                                {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Title</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="title" value="{{$data->title}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Keywords</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="keywords" value="{{$data->keywords}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Description</strong></label>
                                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>City</strong></label>
                                                    <input type="text" class="form-control" name="city" value="{{$data->city}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Country</strong></label>
                                                    <input type="text" class="form-control" name="country" value="{{$data->country}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Location</strong></label>
                                                    <input type="text" class="form-control" name="location" value="{{$data->location}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Detail</strong></label>
                                                    <input type="text" class="form-control" name="detail" value="{{$data->detail}}">
                                                </div>
                                                <div class="mb-3 form-control">
                                                    <label class="" for="image"><strong>Image</strong></label>
                                                    <input type="file" class="form-control form-control-lg" name="image" value="{{$data->image}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label><strong>Select</strong></label>
                                                    <select class="form-select mb-3" name="status">
                                                        <option hidden selected>{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.form-body -->

                                            <div class="card-footer">
                                                <button class="btn btn-warning">Update</button>
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
