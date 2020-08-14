@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
<div class="container">
	<h2>Register</h2>
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" class="form-control-file" name="userphoto">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter Your Name..." name="username">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Enter Email Address..." name="useremail">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="userpassword">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Enter Confirm Password..." name="usercomfirm">
		</div>
		<div class="form-group">
			<textarea class="form-control" placeholder="Enter Address..." name="useraddress"></textarea>
		</div>
		<button type="submit" class="btn btn-primary btn-block mb-3">
			Register Account
		</button>
	</form>
</div>
</div>
@endsection