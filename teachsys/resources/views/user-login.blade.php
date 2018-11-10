
@extends('layouts.app')
@section('title', 'login')

@section('content')
<div id="container" class="cls-container">

    <div id="bg-overlay"></div>


    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h1 class="h3">Account Login</h1>
                    <p>Sign In to your account</p>
                </div>
                @if (count($errors) > 0)
                    @foreach($errors -> all() as $error)
                        <p style="color:#F00;">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="/users/login" method ="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
                    </div>
                    <div class="checkbox pad-btm text-left">
                        <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name = "remeberbox" value="{{ old('remeberbox') }}">
                        <label for="demo-form-checkbox">Remember me</label>
                    </div>
                    <button id="login_button" class="btn btn-primary btn-lg btn-block" type="submit" onclick="loginButtonClick()">Sign In</button>
                </form>
            </div>

            <div class="pad-all">
                {{--<a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>--}}
                <a href="pages-register.html" class="btn-link mar-lft">Create a new account</a>
            </div>
        </div>
    </div>



</div>
@endsection