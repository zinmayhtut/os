@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Brand Edit (Form/old value)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="{{route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">	
			@csrf
			@method('PUT')
			<div class="form-group">
				<table class="table-responsive">
					<tr>
						<label>Brand Name</label>
						<input type="text" name="bname" class="form-control" value="{{$brand->name}}">
					</tr>

					<tr>
						<label>Photo</label>
						<input type="file" name="bphoto" class="form-control-file">

					</tr>
					
					<tr>
						<img src="{{asset($brand->photo)}}" width="50" height="50"><br> 
						<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
					</tr>
					
										
				</table>
			</div>
			<input type="submit" value="Update">
		</form>
	</div>

@endsection