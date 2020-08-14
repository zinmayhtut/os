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
		<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">	
			@csrf
			<div class="form-group">
				<table class="table-responsive">
					<tr>
						<label>Codeno</label>
						<input type="number" name="codeno" class="form-control">
						<span style="color: red">{{$errors->first('name')}}</span><br>
					</tr>
					<tr>
						<label>Name</label>
						<input type="text" name="name" class="form-control">
						<span style="color: red">{{$errors->first('name')}}</span><br>
					</tr>
					<tr>
						<label>Price</label>
						<input type="number" name="price" class="form-control">
						<span style="color: red">{{$errors->first('price')}}</span><br>
					</tr>
					<tr>
						<label>Discount</label>
						<input type="number" name="discount" class="form-control">
						<span style="color: red">{{$errors->first('name')}}</span><br>
						
					</tr>
					<tr>
						<label>Photo</label>
						<input type="file" name="photo" class="form-control-file">
						<span style="color: red">{{$errors->first('name')}}</span><br>
					</tr>
					<tr>
						<label>Description</label>
						<textarea class="form-control" name="description"></textarea>
						<span style="color: red">{{$errors->first('name')}}</span><br>
					</tr>
					<tr>
						<label>Brand</label>
						<select class="form-control" name="brand">
							@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
							@endforeach
						</select>
					</tr>
					<tr>
						<label>Subcategory</label>
						<select class="form-control" name="subcategory">
							@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
							@endforeach
						</select>
					</tr>
					
				</table>
			</div>
			<input type="submit" value="Save">
		</form>
	</div>

@endsection