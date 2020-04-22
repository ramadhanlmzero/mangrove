@extends('layouts.master_login')

@section('content')
<div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn" style="display: block;">
        <h3 class="text-center">Halaman Admin</h3>
        @error('email')
            <div class="alert alert-danger">
                <span>Pastikan email / password anda benar !</span>
            </div>
        @enderror
        <div class="login-form mt-4">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group form-floating-label">
                    <input id="email" name="email" type="email" class="form-control input-border-bottom" required="">
                    <label for="email" class="placeholder">Email</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom" required="">
                    <label for="password" class="placeholder">Password</label>
                </div>
                <div class="form-action mb-3">
                    <button type="submit" class="btn btn-primary btn-rounded btn-login">Login</button>
                </div>
                <div class="text-center">
                    <a href="{{ route('index') }}">Kembali ke Web</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection