@extends('login-layout')

@section('auth-section')
    <div id="login-page">
        <div class="container">

            <form class="form-login" method="POST" action="/auth/login ">
                {!! csrf_field() !!}

                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="email" name="email" class="form-control" placeholder="email@email.com" autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password">


                    <br>
                    <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>

                    <hr>

                    {{--<div class="login-social-link centered">--}}
                        {{--<p>or you can sign in via your social network</p>--}}
                        {{--<button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>--}}
                        {{--<button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>--}}
                    {{--</div>--}}
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="btn btn-theme03 btn-block " href="{{url('auth/register')}}">
                            Create an account
                        </a>
                    </div>

                </div>



            </form>




        </div>
    </div>


    <!-- resources/views/auth/login.blade.php -->


@stop