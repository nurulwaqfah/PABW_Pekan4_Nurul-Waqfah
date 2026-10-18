@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<div class="container">

    <div class="form-card">

        <h1>Form Laporan Banjir</h1>

        <p>
            Silakan isi data kejadian banjir berikut.
        </p>


        @if ($errors->any())

            <div class="error-box">

                <strong>
                    Terdapat kesalahan:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form action="{{ route('laporan.kirim') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_pelapor">Nama Pelapor</label>
        <input
            type="text"
            id="nama_pelapor"
            name="nama_pelapor"
            value="{{ old('nama_pelapor') }}"
            required
        >
    </div>

    <div class="form-group">
        <label for="lokasi">Lokasi Kejadian</label>
        <input
            type="text"
            id="lokasi"
            name="lokasi"
            value="{{ old('lokasi') }}"
            required
        >
    </div>

    <div class="form-group">
        <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
        <input
            type="number"
            id="tinggi_genangan"
            name="tinggi_genangan"
            min="0"
            value="{{ old('tinggi_genangan') }}"
            required
        >
    </div>

    <div class="form-group">
        <label for="tanggal_kejadian">Tanggal Kejadian</label>
        <input
            type="date"
            id="tanggal_kejadian"
            name="tanggal_kejadian"
            value="{{ old('tanggal_kejadian') }}"
            required
        >
    </div>

    <button type="submit" class="button">
        Kirim Laporan
    </button>
</form>

    </div>

</div>

@endsection