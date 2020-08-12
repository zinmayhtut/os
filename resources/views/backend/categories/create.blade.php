@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Category Create (Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">	
			@csrf
			<div class="form-group">
				<table class="table-responsive">
					
					<tr>
						<label>Category Name</label>
						<input type="text" name="cname" class="form-control">
					</tr>
					
					<tr>
						<label>Photo</label>
						<input type="file" name="cphoto" class="form-control-file">
					</tr>
					
					
				</table>
			</div>
			<input type="submit" value="Save">
		</form>
	</div>

@endsection