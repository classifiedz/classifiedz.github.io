@extends('layouts.app')

@section('content')

<div class="row px-5 pt-4">
   
	
		<table class="table table-user-information">
			<tbody>
				
				<tr>
					<td><span >Username</td>
					<td><input class="form-control input-sm" type="text" placeholder={{ Auth::user()->username }}></td>
				</tr>
				<tr>
					<td>City</span></td>
					<td><input class="form-control input-sm" type="text" placeholder={{ Auth::user()->city }}></td>
				</tr>
				<tr>
					<td><span style="vertical-align:middle">Email</span></td>
					<td><input class="form-control input-sm" type="text" placeholder={{ Auth::user()->email }}></td>
				</tr>
				<tr>
				<td>Phone Number</td>
				<td><input class="form-control input-sm" type="text" placeholder={{ Auth::user()->phoneNumber }}></td>
				</tr>
				<tr>
				<td>Upload an image of your profile picture: </td>
					<td><input id="input-b1"  name="input-b1" type="file" class="file"><img class="img" alt="User Picture" src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ height="50px"></td>
				</tr>
			</tbody>
		</table>
		<ul class="list-inline" >
  			<li class="list-inline-item p-1">
				<button type="submit" class="btn btn-success">Submit</button>
			</li>
			
			<li class="list-inline-item p-1">
				<a href="/profile"
				class="btn btn-danger"  role="button">
					Cancel
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST"
					style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
	
</div>

@endsection
