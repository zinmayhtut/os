@extends('frontendtemplate')

@section('content')

<div class="col-lg-9">
{{-- <div class="container-fluid mb-3"> --}}
	<h2>Detail (Your UI)</h2>
	<form action="" method="POST" enctype="multipart/form-data">	
		@csrf
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="{{asset($items->photo)}}" width="100" height="100"> 

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<table>

							<tr>
								<td>Name</td>
								<td>{{$items->name}}</td>
							</tr>
							<tr>
								<td>Price</td>
								<td>{{$items->codeno}}</td>
							</tr>

							<tr>
								<td>Description</td>
								<td>{{$items->price}}</td>
							</tr>
						</table>
					</div>

				</form>
			{{-- </div> --}}
</div>
@endsection

@section('script')

	<script type="text/javascript" src="frontend/js/script.js"></script>

@endsection