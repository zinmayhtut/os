@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="pt-3 text-success">Check Out</h3>
				<hr class="codiv">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead class="bg-light">
							<tr>
								<th>No.</th>
								<th>Item Name</th>
								<th>Photo</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>

					<textarea class="form-control d-inline note" placeholder="Your note Here!"></textarea>

					<a href="{{route('homepage')}}" class="btn btn-success mb-3">Continue Shopping</a>

					@auth

					<a href="#" class="btn btn-success mb-3 float-right buy_now">Checkout</a>

					@else

					<a href="{{route('login')}}" class="btn btn-success mb-3 float-right buy_now">Login in Checkout</a>

					@endauth	

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')

	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

@endsection