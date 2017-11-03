@extends('layouts.app')

@section('title', 'Profile Edit')

@section('content')


    <div class="row px-5 pt-4 justify-content-center">

        <a href="#"><img class="img-thumbnail" alt="User Picture"
                         src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ width="140px"></a>

        <form method="POST" enctype="multipart/form-data" action="{{ route('updateProfile') }}">
            <table class="table table-user-information">
                <tbody>
                {{ csrf_field() }}
                <tr>
                    <td>Name</td>
                    <td><input class="form-control input-sm" type="text"
                               value="{{ old('name') == null ? Auth::user()->name : old('name') }}" name="name"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input class="form-control input-sm" type="text"
                               value="{{ old('username') == null ? Auth::user()->username : old('username') }}"
                               name="username"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control input-sm" type="text"
                               value="{{ old('email') == null ? Auth::user()->email : old('email') }}" name="email">
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input class="form-control input-sm" type="text"
                               value="{{ old('city') == null ? Auth::user()->city : old('city') }}" name="city"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input class="form-control input-sm" type="text"
                               value="{{ old('name') == null ? Auth::user()->phoneNumber : old('phoneNumber') }}"
                               name="phoneNumber"></td>
                </tr>
                <!-- <tr>
                              <td>Upload an image of your profile picture: </td>
                              <td><input id="input-b1"  name="input-b1" type="file" class="file" name"icon"><img class="img" alt="User Picture" src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png"/ height="50px"></td>
                          </tr> -->
                </tbody>
            </table>
            <ul class="list-inline">
                <li class="list-inline-item p-1">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </li>
                <li class="list-inline-item p-1">
                    <a href="/profile" class="btn btn-danger" role="button">Cancel</a>
                </li>
            </ul>
        </form>
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
