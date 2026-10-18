@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="container">

    <div class="confirmation-card">

     <x-alert title="Laporan Berhasil Disimpan">
    Laporan banjir Anda berhasil disimpan ke database.
</x-alert>

<p><strong>Nama Pelapor:</strong> {{ $data->nama_pelapor }}</p>
<p><strong>Lokasi:</strong> {{ $data->lokasi }}</p>
<p><strong>Tinggi Genangan:</strong> {{ $data->tinggi_genangan }} cm</p>
<p><strong>Tanggal Kejadian:</strong> {{ $data->tanggal_kejadian }}</p>

        </div>


        <p class="note">
            Data laporan hanya diproses
            dan disimpan ke database.
        </p>


        <a
            href="{{ route('laporan.form') }}"
            class="button"
        >
            Buat Laporan Baru
        </a>

    </div>

</div>

@endsection