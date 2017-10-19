@extends('layouts.app')

@section('content')

<div class="row px-5 pt-4">
    <!-- Center Picture on XS, SM but right align on MD up -->
    <div class="col-md-4 pb-4 text-md-right text-center">
		<a href="#">
			<img class="img" alt="User Picture" src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ height="200px">
		</a>
	</div>
	<div class="col-md-8">
		<table class="table table-responsive table-user-information">
            <thead>
                <tr>
                    <th class="border-top-0" colspan="3">
                        <h3>{{ Auth::user()->name }}</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>Username</td>
                    <td>
                        <input class="form-control input-sm" type="text" placeholder={{ Auth::user()->username }}/>
                    </td>
				</tr>
				<tr>
					<td>City</td>
					<td>
                        <input class="form-control input-sm" type="text" placeholder={{ Auth::user()->city }}/>
                    </td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
                        <input class="form-control input-sm" type="text" placeholder={{ Auth::user()->email }}/>
                    </td>
				</tr>
				<tr>
	                <td>Phone Number</td>
                    <td>
                        <input class="form-control input-sm" type="text" placeholder={{ Auth::user()->phoneNumber }}/>
                    </td>
				</tr>
				<tr>
	                <td colspan="3">Upload a New Profile Picture:</td>
				</tr>
                <tr>
                    <td colspan="3">
                        <input id="input-b1"  name="input-b1" type="file" class="file"/>
                    </td>
                </tr>
			</tbody>
		</table>
		<ul class="list-inline" >
  			<li class="list-inline-item p-1">
				<button type="submit" class="btn btn-success">Submit</button>
			</li>

			<li class="list-inline-item p-1">
				<a href="/profile" class="btn btn-danger"  role="button"> Cancel </a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST"
					style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
    </div>
</div>

@endsection
