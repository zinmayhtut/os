@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Item Create (Form)</h2>
		{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif --}}
		<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">	
			@csrf
			<div class="form-group">
				<table class="table-responsive">
					
					<tr>
						<label>Brand Name</label>
						<input type="text" name="bname" class="form-control">
						<span style="color: red">{{$errors->first('bname')}}</span><br>
					</tr>
					
					<tr>
						<label>Photo</label>
						<input type="file" name="bphoto" class="form-control-file">
						<span style="color: red">{{$errors->first('bname')}}</span><br>
					</tr>
					
					
				</table>
			</div>
			<input type="submit" value="Save">
		</form>
	</div>

@endsection