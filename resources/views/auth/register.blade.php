
@extends('layouts.app')

@section('content')
<div class="auth-page">
    <div class="auth-card">
        <div class="auth-icon">🌸</div>

        <h1>Buat Akun Baru</h1>
        <p class="auth-subtitle">
            Daftarkan akun untuk mengakses sistem LaporBanjir.
        </p>

        @if ($errors->any())
            <div class="auth-alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password_confirmation">
                    Konfirmasi Password
                </label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    required
                >
            </div>

            <button type="submit" class="auth-button">
                Daftar Sekarang
            </button>
        </form>

        <p class="auth-switch">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login di sini</a>
        </p>

        <p class="auth-note">
            Sistem Informasi LaporBanjir
        </p>
    </div>
</div>
@endsection
