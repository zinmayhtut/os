@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Subcategory Create (Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">	
			@csrf
			<div class="form-group">
				<table class="table-responsive">
					
					<tr>
						<label>Subcategory Name</label>
						<input type="text" name="sname" class="form-control">
					</tr>
					
					<tr>
						<label>Category</label>
						<select class="form-control" name="scid">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</select>
					</tr>
					
					
				</table>
			</div>
			<input type="submit" value="Save">
		</form>
	</div>

@endsection