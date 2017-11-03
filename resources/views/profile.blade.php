@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

    <div class="row px-5 pt-4">
        <!-- Center Picture on XS, SM but right align on MD up -->
        <div class="col-md-4 pb-4 text-md-right text-center">
            <a href="/profile/edit">
                <img class="img-thumbnail" alt="User Picture"
                     src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ width="200px">
            </a>
        </div>
        <div class="col-md-7 col-lg-5 col-xl-4">
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
                    <td>Name</td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{ Auth::user()->username }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>{{ Auth::user()->city }}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>{{ Auth::user()->phoneNumber }}</td>
                </tr>
                <tr>
                    <td>Member Since</td>
                    <td>{{ date('F jS, Y', strtotime(Auth::user()->created_at)) }}</td>
                </tr>
                <tr>
                    <td>Profile last modified</td>
                    <td>{{ date('F jS, Y', strtotime(Auth::user()->updated_at)) }}</td>
                </tr>
                </tbody>
            </table>
            <ul class="list-inline">
                <li class="list-inline-item p-1">
                    <a href="/profile/edit" class="btn btn-warning" role="button">Edit Profile</a>
                </li>
                <li class="list-inline-item p-1">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"
                       class="btn btn-danger" role="button">
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
