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
                <a href="{{ route('sampel.index') }}">Lihat Data</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-tab">
                <div class="card-header-title">
                    <h4 class="card-title">Data Sampel di Kabupaten Gresik</h4>
                </div>
                <div class="btn-actions-pane-right">
                    <a href="{{ route('sampel.create') }}" class="btn btn-primary">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sampelTable" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Sampel</th>
                                <th>Kecamatan</th>
                                <th>pH Air</th>
                                <th>Salinitas Air</th>
                                <th>Kadar Air</th>
                                <th>Nitrogen</th>
                                <th>Pasir</th>
                                <th>Lanau</th>
                                <th>Lempung</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Sampel</th>
                                <th>Kecamatan</th>
                                <th>pH Air</th>
                                <th>Salinitas Air</th>
                                <th>Kadar Air</th>
                                <th>Nitrogen</th>
                                <th>Pasir</th>
                                <th>Lanau</th>
                                <th>Lempung</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($sampels as $index => $sampel) 
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $sampel->nama }}</td>
                                    <td>{{ $sampel->kecamatan->kecamatan }}</td>
                                    <td>{{ $sampel->ph_air }}</td>
                                    <td>{{ $sampel->salinitas }}</td>
                                    <td>{{ $sampel->kadar_air }}</td>
                                    <td>{{ $sampel->nitrogen }}</td>
                                    <td>{{ $sampel->pasir }}</td>
                                    <td>{{ $sampel->lanau }}</td>
                                    <td>{{ $sampel->lempung }}</td>
                                    <td width="85">
                                        <div class="btn-group">
                                            <a href="{{ route('sampel.edit', $sampel->id) }}" class="btn btn-icon btn-round btn-info mr-2">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('sampel.destroy', $sampel->id) }}" method="post" class="mb-0">
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
        $("#sampelTable").DataTable({
            "oLanguage": {
                "sLengthMenu": "Tampilkan _MENU_ sampel",
                "sZeroRecords": "Belum ada sampel apapun",
                "sInfoEmpty": "Menampilkan 0 sampel",
                "sInfoFiltered": "",
                "sInfo": "Menampilkan _START_ - _END_ dari _TOTAL_ sampel",
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