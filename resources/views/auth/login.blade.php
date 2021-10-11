@extends('auth.playouts.master')
@section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login</h2>
                    <form method="POST" action="{{ route('auth.login') }}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Enter email" name="email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Enter password" name="password">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">SIGN IN</button>
                        </div>
                        @if(session()->has('error-login'))
                            <div class="alert alert-warning">{{ session()->get('error-login') }}</div>
                        @endif
                        <div class="p-t-30">
                                <a href="{{ url('/auth/redirect/google') }}" class="alert alert-danger"><i class="fa fa-google"></i> Google</a>
                        </div>
                        <div class="p-t-30">
                            <a href="{{ route('auth.register') }}">
                                <p class="text-center m-0">Don't have an account? Sign up</p>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
