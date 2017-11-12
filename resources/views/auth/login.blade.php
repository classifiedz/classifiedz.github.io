@extends('layouts.app')

@section('content')
<div class="container authenticationContainer">
    <div class="row">
        <div class="col-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-box">
                <div class ="form-top">
                    <div class ="form-top-left">
                        <h3> Login </h3>
                        <p>Enter E-mail and password to log on:</p>
                    </div>
                    <div class = "form-top-right">
                        <i class = "fa fa-lock"></i>
                    </div>
                </div>

                <div class="form-bottom">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="sr-only">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder ="E-mail Address...." class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="sr-only">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder = "Password...." 
                                class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
<!--                                 <br /><br /> Not Registered yet?
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Create an Account
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-box">
                <div class ="form-top">
                    <div class ="form-top-left">
                     <h3> Sign up now </h3>
                     <p>Fill in the form below:</p>
                    </div>
                    <div class = "form-top-right">
                        <i class = "fa fa-pencil"></i>
                    </div>
                </div>

                <div class="form-bottom">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="sr-only">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder = "Name...." class="form-control" 
                                name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="sr-only">Username</label>

                            <div class="col-md-12">
                                <input id="username" type="text" placeholder = "Username...."class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emailRegister') ? ' has-error' : '' }}">
                            <label for="emailRegister" class="sr-only">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="emailRegister" type="email" placeholder = "E-Mail Address"class="form-control" name="emailRegister" value="{{ old('emailRegister') }}" required>

                                @if ($errors->has('emailRegister'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailRegister') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('passwordRegister') ? ' has-error' : '' }}">
                            <label for="passwordRegister" class="sr-only">Password</label>

                            <div class="col-md-12">
                                <input id="passwordRegister" type="password" placeholder = "Password...."class="form-control" name="passwordRegister" required>

                                @if ($errors->has('passwordRegister'))
                                    <span class="help-block"
                                        <strong>{{ $errors->first('passwordRegister') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="passwordRegister-confirm" class="sr-only">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="passwordRegister-confirm" type="password" placeholder="Confirm Password...." class="form-control" name="passwordRegister_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign me up!
                                </button>
<!--                                 <br /><br />Already have an account?
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Sign in here
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
