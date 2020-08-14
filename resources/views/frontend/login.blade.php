@extends('frontendtemplate')

@section('content')

<div class="col-lg-9">
<div class="container">
	<div class="row">
		<div class="col">
			<div class="p-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Login Page!</h1>
				</div>
				<form action="" method="POST" enctype="multipart/form-data">
					
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter Email Address..." name="login_email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="login_password">
					</div>
					<button type="submit" class="btn btn-primary btn-user btn-block">
						Login
					</button>
				</form>
				<hr>
				<div class="text-center">
					<a class="small" href="">Forgot Password?</a>
				</div>
				<div class="text-center">
					<a class="small" href="">Create an Account!</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection