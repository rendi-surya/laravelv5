@extends('layouts.app')

@section('content')
	<form method="post" action="{{ url('insert-data') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table>
		  <tr>
		    <th>Item Code</th>
		    <th><input type="text" name="itemCode"></th> 
		  </tr>
		  <tr>
		    <th>Item Brand</th>
		    <th><input type="text" name="itemBrand"></th> 
		  </tr>
		  <tr>
		    <th>Item Sku</th>
		    <th><input type="text" name="itemSku"></th> 
		  </tr>
		  <tr>
		    <th>Item Name</th>
		    <th><input type="text" name="itemName"></th> 
		  </tr>
		  <tr>
		    <th>Item Category</th>
		    <th><input type="text" name="itemCategory"></th> 
		  </tr>
		  <tr>
		    <th>Supplier ID</th>
		    <th><input type="text" name="supplierId"></th> 
		  </tr>
		  <tr>
		    <th>Item Quantity</th>
		    <th><input type="text" name="itemQty"></th>
		  </tr>
		  <tr>
		    <th>Item Min Quantity</th>
		    <th><input type="text" name="itemMinQty"></th> 
		  </tr>
		</table>
		<button type="submit">Insert</button>
	</form>
@endsection