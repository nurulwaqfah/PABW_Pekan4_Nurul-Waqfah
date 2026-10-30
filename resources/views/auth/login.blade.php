@extends('layouts.app')

@section('content')
<div class="auth-page">
    <div class="auth-card">
        <div class="auth-icon">🔐</div>

        <h1>Selamat Datang!</h1>
        <p class="auth-subtitle">
            Login ke akun petugas BPBD untuk mengelola laporan banjir.
        </p>

        @if (session('success'))
            <div class="auth-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="auth-alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email kamu"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    autocomplete="current-password"
                    required
                >
            </div>

            <button type="submit" class="auth-button">
                Login Sekarang
            </button>
        </form>

        <p class="auth-switch">
            Belum punya akun?
            <a href="{{ route('register') }}">Daftar di sini</a>
        </p>

        <p class="auth-note">
            LaporBanjir · BPBD Kabupaten Bandung
        </p>
    </div>
</div>
@endsection
