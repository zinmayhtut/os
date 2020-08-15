@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Category Edit (Form/old value)</h2>
		{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif --}}
		<form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">	
			@csrf
			@method('PUT')
			<div class="form-group">
				<table class="table-responsive">
					<tr>
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="{{$category->name}}">
					</tr>
					
					<tr>
						<label>photo</label>
						<input type="file" name="photo" class="form-control-file"><br>
					</tr>
					<tr>
						<img src="{{asset($category->photo)}}" width="50">
						<input type="hidden" name="oldphoto" value="{{$category->photo}}">
					</tr>
										
				</table>
			</div>
			<input type="submit" value="Update">
		</form>
	</div>

@endsection