@extends('layouts.master_admin')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data Sampel</h4>
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
                <a href="{{ route('sampel.index') }}">Data Sampel</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('sampel.index') }}">Tambah Data</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Data Sampel</div>
            </div>
            <form action="{{ route('sampel.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kecamatan_id">Kecamatan</label>
                        <select class="form-control" id="kecamatan_id" name="kecamatan_id">
                            @foreach ($kecamatans as $kecamatan)
                                <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                        <small class="form-text text-muted">Gunakan angka sesuai atribut SHP, contoh: 1</small>
                    </div>
                    <div class="form-group">
                        <label for="ph_air">pH Air</label>
                        <input type="number" class="form-control" id="ph_air" name="ph_air" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="salinitas">Salinitas Air</label>
                        <input type="number" class="form-control" id="salinitas" name="salinitas" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="kadar_air">Kadar Air</label>
                        <input type="number" class="form-control" id="kadar_air" name="kadar_air" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="nitrogen">Nitrogen</label>
                        <input type="number" class="form-control" id="nitrogen" name="nitrogen" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="pasir">Pasir</label>
                        <input type="number" class="form-control" id="pasir" name="pasir" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="lanau">Lanau</label>
                        <input type="number" class="form-control" id="lanau" name="lanau" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="lempung">Lempung</label>
                        <input type="number" class="form-control" id="lempung" name="lempung" min="0" step="any" required>
                    </div>
                </div>
                <div class="card-action text-right">
                    <a href="{{ route('sampel.index') }}" class="btn btn-default mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection