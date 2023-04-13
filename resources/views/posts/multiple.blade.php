@extends('layouts')

@section('title', 'Insert data by ajax')

@section('content')

<div class="container">
	<div class="row justify-content-md-center mt-5">
		<div class="col-md-6">
			<form action="{{url('/multiple_ajax')}}" method="POST" class="dropzone" id="myDropzone">
			    @csrf
			</form>
		</div>
	</div>
</div>


@endsection
