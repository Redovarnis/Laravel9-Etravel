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
                                            <strong class="card-title mb-0">ID: {{$data->id}} Details </strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table>
                                                        <ul class="list-group list-group-flush">
                                                            <tr>
                                                                <th>Image:
                                                                    <li class="list-group-item">
                                                                        @if ($data->image)
                                                                        <img src="{{Storage::url($data->image)}}" alt="{{$data->title}}" style="height: 500px" class="img-fluid">
                                                                        @endif
                                                                        </li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Category:
                                                                    <li class="list-group-item">
                                                                        {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}
                                                                    </li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Title:
                                                                    <li class="list-group-item"> {{$data->title}}</li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Keywords:
                                                                    <li class="list-group-item"> {{$data->keywords}} </li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Description:
                                                                    <li class="list-group-item"> {{$data->description}}</li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Country:
                                                                    <li class="list-group-item"> {{$data->country}}</li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>City:
                                                                    <li class="list-group-item"> {{$data->city}}</li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Location:
                                                                    <li class="list-group-item"> {{$data->location}}</li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Detail:
                                                                    <li class="list-group-item"> {{$data->detail}}</li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Status:
                                                                    <li class="list-group-item"> {{$data->status}}</li>
                                                                </th>
                                                            </tr>
                                                        </ul>
                                                    </table>
                                                </div>
                                                <div>
                                                    <a href="{{route('admin.place.edit', ['id'=>$data->id])}}">
                                                        <i class="align-middle">
                                                            <button class="btn btn-warning">Edit</button>
                                                        </i>
                                                    </a>
                                                    <a href="{{route('admin.place.destroy', ['id'=>$data->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none"
                                                        onclick="return confirm('Deleting !! Are you sure ?')">
                                                        <i class="align-middle" data-feather="trash-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
