@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Order Detail (Your UI)</h2>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Voucherno</th>
					<th>User Name</th>
					<th>OrderDate</th>
					<th>Notes</th>
					<th>Total</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php
					$i=1;
				@endphp
				@foreach($orders as $order)
				<tr>
					<th>{{$i++}}</th>
					<th>{{$order->voucherno}}</th>
					<th>{{$order->user->name}}</th>
					<th>{{$order->orderdate}}</th>
					<th>{{$order->note}}</th>
					<th>{{$order->total}}</th>
					<th>
						<a href="{{route('orders.show',$order->id)}}" class="btn btn-warning">Detail</a>
						<a href="#" class="btn btn-danger">Confirm</a>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection