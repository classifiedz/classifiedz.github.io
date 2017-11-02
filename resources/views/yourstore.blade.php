@extends('layouts.app')

@section('content')

<div class="row px-5 pt-4 justify-content-center">

	

	<form method="POST"  enctype="multipart/form-data" action="{{ route('updateProfile') }}">
	<tr>
	<img class="img-thumbnail" alt="User Picture" src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ width="70px">
	</tr>
	<ul>{{ old('name') == null ? Auth::user()->name : old('name') }}</ul>
	<td>Ad Posted</td>	
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
