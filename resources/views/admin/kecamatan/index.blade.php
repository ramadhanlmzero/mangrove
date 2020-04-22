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
                <a href="{{ route('kecamatan.index') }}">Lihat Data</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-tab">
                <div class="card-header-title">
                    <h4 class="card-title">Data Kecamatan di Kabupaten Gresik</h4>
                </div>
                <div class="btn-actions-pane-right">
                    <a href="{{ route('kecamatan.create') }}" class="btn btn-primary">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kecamatanTable" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kecamatans as $index => $kecamatan) 
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $kecamatan->kecamatan }}</td>
                                    <td width="85">
                                        <div class="btn-group">
                                            <a href="{{ route('kecamatan.edit', $kecamatan->id) }}" class="btn btn-icon btn-round btn-info mr-2">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('kecamatan.destroy', $kecamatan->id) }}" method="post" class="mb-0">
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
        $("#kecamatanTable").DataTable({
            "oLanguage": {
                "sLengthMenu": "Tampilkan _MENU_ kecamatan",
                "sZeroRecords": "Belum ada kecamatan apapun",
                "sInfoEmpty": "Menampilkan 0 kecamatan",
                "sInfoFiltered": "",
                "sInfo": "Menampilkan _START_ - _END_ dari _TOTAL_ kecamatan",
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