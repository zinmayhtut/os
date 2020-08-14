@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Item Detail (Your UI)</h2>
		<form action="" method="POST" enctype="multipart/form-data">	
			@csrf
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="{{asset($item->photo)}}" width="100" height="100"> 
						
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<table>
								
								<tr>
									<td>Product Name</td>
									<td>{{$item->name}}</td>
								</tr>
								<tr>
									<td>Product Code</td>
									<td>{{$item->codeno}}</td>
								</tr>

								<tr>
									<td>Product Price</td>
									<td>{{$item->price}}</td>
								</tr>
								<tr>
									<td>Description</td>
									<td>{{$item->description}}</td>
								</tr>
								<tr>
									<td>Brand</td>
									<td>{{$item->brand->name}}</td>
								</tr>
								<tr>
									<td>Subcategory</td>
									<td>{{$item->subcategory->name}}</td>
								</tr>
								

							</table>
						</div>
						
					</form>
				</div>
			</div>
				</div>
			</div>
			

@endsection