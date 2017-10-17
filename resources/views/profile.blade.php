@extends('layouts.app')

@section('content')

<div class="row px-5 pt-4">
    <div class="col-md-4 pb-4 text-center">
		<a href="#">
			<img class="img" alt="User Picture" src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ height="200px">
		</a>
	</div>
	<div class="col-md-7 col-lg-5 col-xl-4">
		<table class="table table-user-information">
			<h3>{{ Auth::user()->name }}</h3>
			<tbody>
				<tr>
					<td>Username</td>
					<td>{{ Auth::user()->username }}</td>
				</tr>
				<tr>
					<td>Member Since</td>
					<td>{{ date('F jS, Y', strtotime(Auth::user()->created_at)) }}</td>
				</tr>
				<tr>
					<td>City</td>
					<td>{{ Auth::user()->city }}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
				<td>Phone Number</td>
					<td>{{ Auth::user()->phoneNumber }}</td>
				</tr>
			</tbody>
		</table>
		<ul class="list-inline">
  			<li class="list-inline-item p-1">
				<a href="/editprofile" class="btn btn-success"  role="button">Edit Profile</a>
			</li>
			<li class="list-inline-item p-1">
				<a href="/wishlist" class="btn btn-info"  role="button">Wish List</a>
			</li>
			<li class="list-inline-item p-1">
				<a href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"
				class="btn btn-danger"  role="button">
					Logout
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST"
					style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
	</div>
</div>

@endsection
