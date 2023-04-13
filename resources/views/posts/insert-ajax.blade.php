
@extends('layouts')

@section('title', 'Insert data by ajax')

@section('content')
    


  	<div class="container mt-5 mb-5">

		<form method="POST" action="{{url('/insert_ajax')}}" enctype="multipart/form-data" id="insert-form" name="insert_ajax" class="mb-5">
		    @csrf

		    <input type="hidden" name="id" id="id" value="" class="form-control" required>
		    <div class="row">
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Title</label>
				        <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" required>
				    </div>
		    	</div>
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Files</label>
				        <input type="file" name="img" id="img" class="form-control">
				    </div>
		    	</div>
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Condition</label>
				        <div class="form-check">
						  <input class="form-check-input" type="checkbox" name="checkbox[]" value="condition-1" id="chk_1">
						  <label class="form-check-label" for="chk_1">
						    Condition 1
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" name="checkbox[]" value="condition-2" id="chk_2" > <!-- checked -->
						  <label class="form-check-label" for="chk_2">
						    Condition 2
						  </label>
						</div>
				    </div>
		    	</div>
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Yes / No</label>
				        <div class="form-check">
						  <input class="form-check-input" type="radio" name="yes_no" value="Yes" id="yes">
						  <label class="form-check-label" for="yes">
						    Yes
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="yes_no" value="No" id="no">
						  <label class="form-check-label" for="no">
						    No
						  </label>
						</div>
				    </div>
		    	</div>
		    	<!-- <div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Multiple Files</label>
				        <input type="file" name="multiple_img[]" id="img" class="form-control" multiple >
				    </div>
		    	</div> -->
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="body">Body</label>
				        <textarea name="body" id="body" class="form-control" required>{{ old('body') }}</textarea>
				    </div>
		    	</div>
		    	<div class="col-md-12 mt-2">
		    		<div class="form-group mt-2 add_class">
				        <button type="submit" class="btn btn-primary">Submit</button>
				    </div>
		    	</div>
		    </div>
		    
		    
		    
		</form>

		@if (Session::has('success'))
		    <div class="alert alert-success text-center">
		        {{ Session::get('msg') }}
		    </div>
		@endif

		<table class="table mt-5" id="example">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Title</th>
		            <th>Img</th>
		            <th>Text</th>
		            <th>Action</th>
		        </tr>
		    </thead>
		    <tbody>
		    	
		    </tbody>
		</table>

</div>


@endsection