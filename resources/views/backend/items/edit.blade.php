@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Item Edit (Form/old value)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">	
			@csrf
			@method('PUT')
			<div class="form-group">
				<table class="table-responsive">
					<tr>
						<label>Codeno</label>
						<input type="number" name="codeno" class="form-control" value="{{$item->codeno}}" readonly="">
					</tr>
					<tr>
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="{{$item->name}}">
					</tr>
					<tr>
						<label>Price</label>
						<input type="number" name="price" class="form-control" value="{{$item->price}}">
					</tr>
					<tr>
						<label>Discount</label>
						<input type="number" name="discount" class="form-control" value="{{$item->discount}}">
					</tr>
					<tr>
						<label>Photo</label>
						<input type="file" name="photo" class="form-control-file">

					</tr>
					<tr>
						<img src="{{asset($item->photo)}}" width="50" height="50"><br> 
						<input type="hidden" name="oldphoto" value="{{$item->photo}}">
					</tr>
					<tr>
						<label>Description</label>
						<textarea class="form-control" name="description">{{$item->description}}</textarea>
					</tr>
					<tr>
						<label>Brand</label>
						<select class="form-control" name="brand">
							@foreach($brands as $brand)
							<option value="{{$brand->id}}"
								@if($brand->id == $item->brand_id)
									{{'selected'}}
								@endif
								>{{$brand->name}}</option>
							@endforeach
						</select>
					</tr>
					<tr>
						<label>Subcategory</label>
						<select class="form-control" name="subcategory">
							@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}"
								@if($subcategory->id == $item->subcategory_id)
									{{'selected'}}
								@endif
								>{{$subcategory->name}}</option>
							@endforeach
						</select>
					</tr>
					
				</table>
			</div>
			<input type="submit" value="Update">
		</form>
	</div>

@endsection