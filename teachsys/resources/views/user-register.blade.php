@extends('layouts.app')



@section('content')


<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<div id="container" class="cls-container">


    <div id="bg-overlay"></div>


    <div class="cls-content">
        <div class="cls-content-lg panel">
            <div class="panel-body">
                @if ( $type == 'student')
                @section('title','student-register')
                <div class="mar-ver pad-btm">
                    <h1 class="h3">Create a New Account For Student</h1>
                    <p>Come join the teachsys community! Let's set up your account.</p>
                </div>
                    @if (count($errors) > 0 )
                        <div clss="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li style="color:#F00;">{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif
                <form action="/registerStudent" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full name" name="name">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-mail" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="checkbox pad-btm text-left">
                        <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="protocol">
                        <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and Conditions</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                </form>
                @elseif ( $type == 'teacher')
                        @section('title','teacher-register')
                    <div class="mar-ver pad-btm">
                        <h1 class="h3">Create a New Account For Teacher</h1>
                        <p>Come join the teachsys community! Let's set up your account.</p>
                    </div>
                    @if (count($errors) > 0 )
                        <div clss="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li style="color:#F00;">{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif
                    <form action="/registerTeacher" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full name" name="name">

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="checkbox pad-btm text-left">
                            <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="protocol">
                            <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and Conditions</a></label>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                    </form>
                @else
                    <h1>False 请从右上角点击注册 </h1>
                @endif
            </div>
            <div class="pad-all">
                {{--Already have an account ? <a href="/login" class="btn-link mar-rgt text-bold">Sign In</a>--}}

                <div class="media pad-top bord-top">
                    <div class="pull-right">
                        <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                        <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                        <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
                    </div>
                    <div class="media-body text-left text-main text-bold">
                        Sign Up with
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>

@endsection