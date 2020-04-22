@extends('layouts.master_admin')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data Mangrove</h4>
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
                <a href="{{ route('mangrove.index') }}">Data Mangrove</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('mangrove.index') }}">Ubah Data</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Ubah Data Mangrove {{ $mangrove->kecamatan->kecamatan }} {{ $mangrove->tahun }}</div>
            </div>
            <form action="{{ route('mangrove.update', $mangrove->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="kecamatan_id">Kecamatan</label>
                        <select class="form-control" id="kecamatan_id" name="kecamatan_id">
                            <option value="{{ $mangrove->kecamatan_id }}">{{ $mangrove->kecamatan->kecamatan }}</option>
                            @foreach ($kecamatans as $kecamatan)
                                @if ($kecamatan->id != $mangrove->kecamatan_id)  
                                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $mangrove->tahun }}" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="luas">Luas Mangrove Kondisi Baik (ha)</label>
                        <input type="number" class="form-control" id="luas" name="luas" value="{{ $mangrove->luas }}" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="persentase_luas">Persentase Luas Mangrove Kondisi Baik (ha)</label>
                        <input type="number" class="form-control" id="persentase_luas" name="persentase_luas" value="{{ $mangrove->persentase_luas }}" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kriteria Kondisi Mangrove</label>
                        <input type="text" class="form-control" id="kondisi" name="kondisi" value="{{ $mangrove->kondisi }}" required>
                    </div>
                </div>
                <div class="card-action text-right">
                    <a href="{{ route('mangrove.index') }}" class="btn btn-default mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection