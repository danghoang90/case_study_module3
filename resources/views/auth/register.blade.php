@extends('auth.playouts.master')
@section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="{{ route('auth.formRegister') }}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name">
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Email" name="email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="number" placeholder="Phone Number" name="phone">
                        </div>
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Address" name="address">
                        </div>
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="password">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="role">
                                    <option disabled="disabled" selected="selected">Role</option>
                                    <option value="collaborator">Collaborator</option>
                                    <option value="customer">Customer</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">SIGN UP</button>
                        </div>

                        <div class="p-t-30">
                            <a href="{{ route('auth.formLogin') }}">
                                <p class="text-center m-0">Already an account? Sign in</p>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
