@extends('layouts.app')

@section('content')

<div class="row px-5 pt-4">
   
	
		<table class="table table-user-information">
			<tbody>
				<h3>{{ Auth::user()->name }}'s Wish List</h3>
				<tr>
					<td><b>Category</b></td>
					<td><b>Details</b></td>
				</tr>
				<tr>
					<td>Electronics</td>
					<td>iPhoneX</td>
				</tr>
				<tr>
					<td>Home</td>
					<td>IKEA Daybed</td>
				</tr>
				<tr>
				<td>Cloth</td>
				<td>H&M gloves</td>
				</tr>
				
			</tbody>
			<table class="table table-user-information">
			<tbody>
			<h3>Add New</h3>
				<tr>
					<td>
					<div class="form-group">
						<select class="form-control" id="category_id"  name="category_id">
                        <option value="1"> Clothing</option>
                        <option value="2"> Electronics</option>
                        <option value="3"> Home</option>
                        <option value="4"> Vehicles</option>
                        <option value="5"> Others (General)</option>
                        </select>
					</div>
					</td>
					<td><input class="form-control input-sm" type="text" placeholder=Details...></td>
					<td><a href="privacy" class="btn btn-info"  role="button">Add</a></td>
				</tr>
			</tbody>
		</table>
	
</div>

@endsection
