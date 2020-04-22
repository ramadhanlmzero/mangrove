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
                <a href="{{ route('mangrove.index') }}">Lihat Data</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-tab">
                <div class="card-header-title">
                    <h4 class="card-title">Data Mangrove di Kabupaten Gresik</h4>
                </div>
                <div class="btn-actions-pane-right">
                    <a href="{{ route('mangrove.create') }}" class="btn btn-primary">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="mangroveTable" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tahun</th>
                                <th>Kecamatan</th>
                                <th>Luas Mangrove Kondisi Baik (ha)</th>
                                <th>Persentase Luas Mangrove Kondisi Baik (%)</th>
                                <th>Kriteria Kondisi Mangrove</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Tahun</th>
                                <th>Kecamatan</th>
                                <th>Luas Mangrove Kondisi Baik (ha)</th>
                                <th>Persentase Luas Mangrove Kondisi Baik (%)</th>
                                <th>Kriteria Kondisi Mangrove</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($mangroves as $index => $mangrove) 
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $mangrove->tahun }}</td>
                                    <td>{{ $mangrove->kecamatan->kecamatan }}</td>
                                    <td>{{ $mangrove->luas }}</td>
                                    <td>{{ $mangrove->persentase_luas }}</td>
                                    <td>{{ $mangrove->kondisi }}</td>
                                    <td width="85">
                                        <div class="btn-group">
                                            <a href="{{ route('mangrove.edit', $mangrove->id) }}" class="btn btn-icon btn-round btn-info mr-2">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('mangrove.destroy', $mangrove->id) }}" method="post" class="mb-0">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-icon btn-round btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('assets_admin/js/plugin/datatables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#mangroveTable").DataTable({
            "oLanguage": {
                "sLengthMenu": "Tampilkan _MENU_ mangrove",
                "sZeroRecords": "Belum ada mangrove apapun",
                "sInfoEmpty": "Menampilkan 0 mangrove",
                "sInfoFiltered": "",
                "sInfo": "Menampilkan _START_ - _END_ dari _TOTAL_ mangrove",
                "sSearch": "Cari: ",
                "oPaginate": {
                    "sNext": "Selanjutnya",
                    "sPrevious": "Sebelumnya",
                }
            },
            stateSave: true
        });
    })
</script>
@endsection