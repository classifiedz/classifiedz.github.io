@extends('layouts.app')

@section('content')

<div class="row-fluid pt-3">
	<!-- BREADCRUMB -->
	<ol class="breadcrumb">
		<span class="h3">&nbsp;{{ Auth::user()->username }}'s Store<span class="badge badge-default">0 items</span></span>
	</ol>
	<!-- items should be count of product-->
	<!-- END BREADCRUMB -->
</div>

<!--contact info here-->

	<table class="table">
  <tbody>
    <tr>
      <th scope="row">	<span class="badge badge-primary">Contact</span></th>
      <td>{{ Auth::user()->email }}</td>
      <td>{{ Auth::user()->phoneNumber }}</td>
    </tr>
</tbody>
</table>

	

<!-- ads here-->
<div class="row px-5 pt-4>

	<form method="POST"  enctype="multipart/form-data" action="{{ route('updateProfile') }}">
	<td><h4>Ad Posted</h4></td>	
	</form>
	<table class="table table-user-information">
			<tbody>
					{{ csrf_field() }}
					<tr>
						<td>Add the ad here</td>
						
					</tr>
					
			</tbody>
		</table>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
@endsection
