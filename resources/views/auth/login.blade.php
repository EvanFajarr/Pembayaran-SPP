@extends('layouts.auth')

@section('content')
    <form class="login100-form flex-sb flex-w" action="{{ route('login.authenticate') }}" method="POST">
        @csrf
        <img src="/assets/img/logo-full.png" alt="Logo" class="w-100 img-fluid">
        <span class="login100-form-title">
            Masuk
        </span>

        <div class="p-t-31 p-b-9">
            <span class="txt1">
                Username
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="text" placeholder="Username" name="username_15483" required autofocus>
            <span class="focus-input100"></span>
        </div>

        <div class="p-t-13 p-b-9">
            <span class="txt1">
                Password
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="password" placeholder="Password" name="password_15483" required>
            <span class="focus-input100"></span>
        </div>

        <div class="p-t-13 p-b-9">
            <span class="txt1">
                Password
            </span>
        </div>
        <div class="wrap-input100">
            <select class="input100" name="role" placeholder="Role" required>
                <option value="admin">admin</option>
                <option value="petugas">petugas</option>
            </select>
        </div>

        <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn">
                Masuk
            </button>
        </div>
    </form>
@endsection
