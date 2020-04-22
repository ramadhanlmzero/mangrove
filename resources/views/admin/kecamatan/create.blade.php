@extends('layouts.master_admin')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data Kecamatan</h4>
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
                <a href="{{ route('kecamatan.index') }}">Data Kecamatan</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('kecamatan.create') }}">Tambah Data</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Data Kecamatan</div>
            </div>
            <form action="{{ route('kecamatan.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kecamatan">Nama Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                        <small class="form-text text-muted">Gunakan huruf kapital sesuai atribut SHP, contoh: GRESIK</small>
                    </div>
                </div>
                <div class="card-action text-right">
                    <a href="{{ route('kecamatan.index') }}" class="btn btn-default mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection