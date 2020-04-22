@extends('layouts.master')

@section('content')
<section id="home">
    <div class="home-container">
        <h1>Sistem Informasi Geografis</h1>
        <h2>Mangrove Kabupaten Gresik, Jawa Timur, Indonesia</h2>
        <p class="mx-4">Sistem informasi geografis ini memberikan informasi mengenai perubahan kerapatan mangrove dan luasannya serta hubungan kerapatan mangrove dengan sampel parameter air dan tanah berupa pH air, salinitas air, kadar air tanah, nitrogen (N) tanah, jenis tanah pasir, jenis tanah lanau dan jenis tanah lempung. Informasi ini dapat dijadikan sebagai bahan pertimbangan dalam upaya pencegahan dan penanggulangan kerusakan ekosistem hutan mangrove di wilayah Kabupaten Gresik.</p>
        <a href="{{ route('map') }}" class="btn btn-success font-weight-bold">LIHAT PETA</a>
    </div>
</section>
@endsection