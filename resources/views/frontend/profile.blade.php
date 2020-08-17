@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<div class="container">
		<h2>Your Profile</h2>
		<div class="row">
			
			<div class="col-lg-6my-3">
				<img src="b3.jpeg" width="100" height="100"> 
			</div>
			<div class="col-lg-6">
				<div class="row">
				<div class="col-lg-6">
					Name    :
				</div>
				<div class="col-lg-6">
					{{Auth::user()->name}}
				</div>
				<div class="col-lg-6">
					Email   :
				</div>
				<div class="col-lg-6">
					{{Auth::user()->email}}
				</div>
			</div>
			</div>
		</div>
		<center>
		<a href="" class="btn btn-primary my-5">Close</a>
		</center>
	</div>
</div>
@endsection