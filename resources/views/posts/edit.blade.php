@extends('layouts')

@section('title', 'Insert data by ajax')

@section('content')

  	<div class="container mt-5 mb-5">

		<form method="POST" action="{{url('/update',$post->id)}}">
		    @csrf
		    @method('PUT')

		    <div class="row">
		    	<div class="col-md-6 mt-2">
		    <div class="form-group mt-1">
			    <label for="title">Title:</label>
			    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
		    </div>
		  </div>
		    <div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Files</label>
				        <input type="file" name="img" id="img" class="form-control">
				    </div>
		    	</div>

		    	<?php $chk = explode('_',$post->checkbox); ?>
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Condition</label>
				        <div class="form-check">
						  <input class="form-check-input" type="checkbox" name="checkbox[]" value="condition-1" id="con-1" <?php if(in_array('condition-1',$chk)){ echo "checked"; }?>>
						  <label class="form-check-label" for="con-1">
						    Condition 1
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" name="checkbox[]" value="condition-2" id="con-2" <?php if(in_array('condition-2',$chk)){ echo "checked"; }?>> <!-- checked -->
						  <label class="form-check-label" for="con-2">
						    Condition 2
						  </label>
						</div>
				    </div>
		    	</div>
		    	<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <label for="title">Yes / No</label>
				        <div class="form-check">
						  <input class="form-check-input" type="radio" name="yes_no" value="Yes" id="yes" <?php if($post->yes_no =='Yes'){ echo "checked"; }?>>
						  <label class="form-check-label" for="yes">
						    Yes
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="yes_no" id="no"  <?php if($post->yes_no =='No'){ echo "checked"; }?>>
						  <label class="form-check-label" value="No" for="no">
						    No
						  </label>
						</div>
				    </div>
		    	</div>
		    	<div class="col-md-6 mt-2">
		    <div class="form-group mt-1">
			    <label for="body">Body:</label>
			    <textarea name="body" class="form-control">{{ $post->body }}</textarea>
			</div>
		</div>
			<div class="col-md-12 mt-2">
				<div class="col-md-6 mt-2">
		    		<div class="form-group mt-2">
				        <button type="submit" class="btn btn-primary">Submit</button>
				    </div>
				  </div>
		    	</div>
			</div>
		</form>

</div>

@endsection
