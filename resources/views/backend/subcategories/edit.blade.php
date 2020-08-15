@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Subcategories Edit (Form/old value)</h2>
		<form action="{{route('subcategories.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">	
			@csrf
			@method('PUT')
			<div class="form-group">
				<table class="table-responsive">
					<tr>
						<label>Category Name</label>
						<input type="text" name="sname" class="form-control" value="{{$subcategory->name}}">
					</tr>
					
					<tr>
						<label>Subcategory Name</label>
						<select class="form-control" name="scid">
							@foreach($categories as $category)
							<option value="{{$category->id}}">
								{{$category->name}}
							</option>
							@endforeach
					</tr>
										
				</table>
			</div>
			<input type="submit" value="Update">
		</form>
	</div>

@endsection