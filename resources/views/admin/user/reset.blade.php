@extends('layouts.master_admin')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data User</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ route('dashboard') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.reset', $user->id) }}">Ubah Password</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Ubah Password {{ $user->nama }}</div>
            </div>
            <form action="{{ route('user.resetpassword', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group @if (session()->has('error')) has-error has-feedback @endif">
                        <label for="oldpassword">Password Lama</label>
                        <input type="password" class="form-control" id="oldpassword" name="oldpassword" required>
                        @if (session()->has('error'))
                            <small class="form-text text-danger">{{ session()->get('error') }} Ulangi sekali lagi!</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="newpassword">Password Baru</label>
                        <input type="password" class="form-control" id="newpassword" name="newpassword" required>
                    </div>
                </div>
                <div class="card-action text-right">
                    <a href="{{ route('dashboard') }}" class="btn btn-default mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection