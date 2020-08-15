@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Category Create (Form)</h2>
		{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif --}}
		<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">	
			@csrf
			<div class="form-group">
				<table class="table-responsive">
					
					<tr>
						<label>Category Name</label>
						<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border-danger' : ''}}">
						<span style="color: red">{{$errors->first('name')}}</span><br>
					</tr>
					
					<tr>
						<label>Photo</label>
						<input type="file" name="photo" class="form-control-file {{ $errors->has('photo') ? 'border border-danger' : ''}}">
						<span style="color: red">{{$errors->first('photo')}}</span><br>
					</tr>
					
					
				</table>
			</div>
			<input type="submit" value="Save">
		</form>
	</div>

@endsection