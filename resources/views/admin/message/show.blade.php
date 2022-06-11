@extends('layouts.adminwindow')

@section('title', 'Edit Message: ' .$data->title)

@section('content')

            <!-- MAIN CONTENT -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3 "> Edit Message: <div class="text-primary btn badge bg-white text-dark ms-2 " > {{$data->title}} </div> </h1>

					<div class="row">
						<div class="col-12">

                            <!-- Cardholder START -->
							<div class="card">
                                <!-- card-header -->
                                <div class="card-header">
                                    <strong class="card-title mx-3 mt-5">ID: {{$data->id}} Detail Message Data </strong>
                                </div>
                                <!-- /.card-header -->
								<div class="card-body">
                                    <!-- card -->
                                    <div class="card">
                                        <div class="card-body">
                                        <!-- form start -->
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <table>
                                                    <ul class="list-group list-group-flush">
                                                        <tr><th>Name & Surname:<li class="list-group-item"> {{$data->name}} </li></th></tr>
                                                        <tr><th>Phone:<li class="list-group-item"> {{$data->phone}}</li></th></tr>
                                                        <tr><th>Email:<li class="list-group-item"> {{$data->email}} </li></th></tr>
                                                        <tr><th>Subject:<li class="list-group-item"> {{$data->subject}}</li></th></tr>
                                                        <tr><th>Message:<li class="list-group-item"> {{$data->message}}</li></th></tr>
                                                        <tr><th>IP Number:<li class="list-group-item"> {{$data->ip}}</li></th></tr>
                                                        <tr><th>Status:<li class="list-group-item"> {{$data->status}}</li></th></tr>
                                                        <tr><th>Created At:<li class="list-group-item"> {{$data->created_at}}</li></th></tr>
                                                        <tr><th>Updated At:<li class="list-group-item"> {{$data->updated_at}}</li></th></tr>
                                                        <tr>
                                                                <th>Admin Note:
                                                                    <form role="form" action="{{ route('admin.message.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <textarea cols="100" class="textarea" id="note" name="note">{{$data->note}}</textarea>
                                                                        <div class="card-footer">
                                                                            <button type="submit "class="btn btn-primary">Update the Note</button>
                                                                        </div>
                                                                    </form>
                                                                </th>

                                                        </tr>
                                                    </ul>
                                                </table>
                                            </div>
                                        </div>
                                        <a href="{{route('admin.message.destroy', ['id'=>$data->id])}}" class="btn  btn-sm btn-danger" style="text-decoration: none"
                                            onclick="return confirm('Deleting !! Are you sure ?')">
                                            <i class="align-middle" data-feather="trash-2"></i>Delete
                                        </a>
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
