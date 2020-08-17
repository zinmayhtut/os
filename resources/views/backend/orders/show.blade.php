@extends('backendtemplate')

@section('content')

	<div class="container table-responsive">
	 	<div class="row border border-dark">
	 		<div class="col-md-12 text-center text-success">
	 			<h3 class="mt-3">OS Laravel</h3>
	 			<h5>Mandalay</h5><br>
	 			<p>Tel: 09 123456789</p>

	 		</div>
	 		<div class="col-md-6 text-dark">
	 			<div class="row">
	 			<div class="col-md-6">
	 				<p>Casher</p>
	 				<p>Voucher</p>
	 			</div>
	 			<div class="col-md-6">
	 				<p>: Zu Zu</p>
	 				<p>: {{$order->voucherno}} </p>
	 			</div>
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="row">
	 			<div class="col-md-6">
	 				<p>Date</p>
	 				<p>Order Time</p>
	 			</div>
	 			<div class="col-md-6">
	 				<p>:  {{date('Y-m-d')}} </p>
	 				<p>:  {{date('h:m:s A')}} </p>
	 			</div>
	 			</div>
	 		</div>
	 	</div>
	 	<div class="row text-dark">
	 		<table border="border-dark" width="100%" cellspacing="8" class="text-center">
	 			<thead class="text-warning">
	 				<th>Item Name</th>
	 				<th>Price</th>
	 				<th>Qty</th>
	 				<th>Amount</th>
	 			</thead>
	 			<tbody>

	 				@php 
	 					$total=0;
	 					$amount=0;
	 					$tprice=0;
	 				@endphp
	 				
	 				@foreach ($order->items  as $item) 
	 				 				 						
	 				<tr>

	 				<td>{{$item->name}}</td>
                   @if($item->discount)
                   <td>
	 				 	{{$tprice= $item->discount}}
	 				</td>

	 				@else
	 				<td>
	 					 {{$tprice= $item->price}}
	 				</td>
	 				@endif
                    <td>
                    	{{$item->getRelationValue('pivot')->qty}}
                    </td>
                    <td>
                    	
                    {{$amount=$tprice* $item->getRelationValue('pivot')->qty}}
                    	

                    </td>
                     <tr>
	 				@php
	 					$total+=$amount;
	 					
	 				@endphp
	 				 @endforeach
	 			</tbody>
	 			<tfoot>
	 				<tr>
	 					<td colspan="3">Total</td>
	 					<td>
	 						{{$total}}
	 					</td>
	 				</tr>
	 			</tfoot>
	 		</table>
	 	</div>
	 </div>
			

@endsection