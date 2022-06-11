@extends('layouts.adminbase')

@section('title', 'Edit Faq: ' .$data->id)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')

            <!-- MAIN CONTENT -->
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"> Edit Faq: <div class="text-primary btn badge bg-white text-dark ms-2 " > {{$data->id}} </div> </h1>

					<div class="row">
						<div class="col-12">
                            <!-- Cardholder START -->
							<div class="card">
								<div class="card-body">
                                    <!-- card -->
                                    <div class="card ">
                                        <!-- card-header -->
                                        <div class="card-header">
                                            <strong class="card-title mb-0">Faq Elements</strong>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin.faq.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Question</strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="question" value="{{$data->question}}">
                                                </div>
                                                <div class="mb-3 form-label">
                                                    <label for="email"><strong>Answer</strong></label>
                                                    <textarea class="form-control" id="answer" name="answer">
                                                        {{$data->answer}}
                                                    </textarea>
                                                    <script>
                                                        ClassicEditor
                                                                .create( document.querySelector( '#answer' ) )
                                                                .then( editor => {
                                                                        console.log( editor );
                                                                } )
                                                                .catch( error => {
                                                                        console.error( error );
                                                                } );
                                                    </script>
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
