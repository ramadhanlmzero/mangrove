@extends('layouts.master_admin')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Hai, {{ Auth::user()->nama }}</h2>
                <h5 class="text-white op-7 mb-2">Ini halaman dashboard anda</h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Deskripsi Aplikasi</div>
                    <p class="mt-3">
                        Sistem informasi geografis ini memberikan informasi mengenai perubahan kerapatan mangrove dan luasannya serta hubungan kerapatan mangrove dengan sampel parameter air dan tanah berupa pH air, salinitas air, kadar air tanah, nitrogen (N) tanah, jenis tanah pasir, jenis tanah lanau dan jenis tanah lempung. Informasi ini dapat dijadikan sebagai bahan pertimbangan dalam upaya pencegahan dan penanggulangan kerusakan ekosistem hutan mangrove di wilayah Kabupaten Gresik.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Statistik Database</div>
                    <div class="row mt-3 pt-1">
                        <div class="col-md-4 d-flex flex-column justify-content-around">
                            <div>
                                <h6 class="fw-bold text-uppercase text-success op-8">Data Mangrove</h6>
                                <h3 class="fw-bold">{{ $mangroves }}</h3>
                            </div>
                            <div>
                                <h6 class="fw-bold text-uppercase text-danger op-8">Data Sampel</h6>
                                <h3 class="fw-bold">{{ $sampels }}</h3>
                            </div>
                            <div>
                                <h6 class="fw-bold text-uppercase text-secondary op-8">Data Kecamatan</h6>
                                <h3 class="fw-bold">{{ $kecamatans }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection