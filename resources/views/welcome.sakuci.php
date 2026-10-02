@extends('layouts.app')

@section('title', 'Pengaduan Sarana & Prasarana Sekolah')

@section('content')

{{-- =========================
HEROs
========================= --}}

<header class="home-hero">{{-- Dekorasi background --}}
<div class="hero-decoration hero-circle-1"></div>
<div class="hero-decoration hero-circle-2"></div>

<div class="home-hero-content">

    <div class="hero-badge">
        🏫 Amaddd
    </div>

    <h1>
        Pengaduan Sarana & Prasarana
        <span>CIMINDI UNIVERSITY</span>
    </h1>

    <p>
        Laporkan kerusakan atau permasalahan fasilitas
        dengan mudah, cepat, dan terorganisir.
    </p>

    <div class="hero-actions">
        <a href="{{ route('login') }}" class="btn btn-brand btn-lg">
            🔐 Login untuk Membuat Pengaduan
        </a>
    </div>

</div>

{{-- =========================
     SILUET GEDUNG
========================= --}}
<div class="campus-building">

    <div class="building-main">

        <div class="building-roof"></div>

        <div class="building-columns">

            <span class="building-window"></span>
            <span class="building-window"></span>
            <span class="building-window"></span>
            <span class="building-window"></span>
            <span class="building-window"></span>
            <span class="building-window"></span>

        </div>

        <div class="building-door"></div>

    </div>

    <div class="building-wing building-wing-left">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="building-wing building-wing-right">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="building-ground"></div>

</div>

</header>{{-- =========================
STATISTIK
========================= --}}

<section class="home-statistics"><div class="stat-card">
    <div class="stat-icon">🏢</div>
    <div>
        <div class="stat-label">Sarana</div>
        <div class="stat-number">25</div>
        <small>Data sarana</small>
    </div>
</div>

<div class="stat-card">
    <div class="stat-icon">🏫</div>
    <div>
        <div class="stat-label">Prasarana</div>
        <div class="stat-number">12</div>
        <small>Data prasarana</small>
    </div>
</div>

<div class="stat-card">
    <div class="stat-icon">📝</div>
    <div>
        <div class="stat-label">Pengaduan</div>
        <div class="stat-number">8</div>
        <small>Total pengaduan</small>
    </div>
</div>

<div class="stat-card">
    <div class="stat-icon">✓</div>
    <div>
        <div class="stat-label">Selesai</div>
        <div class="stat-number">5</div>
        <small>Pengaduan selesai</small>
    </div>
</div>

</section>{{-- =========================
INFORMASI
========================= --}}

<section class="home-info"><div class="info-card info-main">

    <div class="info-icon">
        ℹ️
    </div>

    <div>
        <h2>Tentang Aplikasi</h2>

        <p>
            <strong>Pengaduan Sarana & Prasarana Kampus</strong>
            merupakan aplikasi yang digunakan untuk memudahkan
            dalam melaporkan kerusakan atau permasalahan pada fasilitas
            kampus.
        </p>

        <p>
            Pengguna dapat menyampaikan pengaduan dengan informasi yang jelas,
            sedangkan admin dapat mengelola, memproses, dan memperbarui
            status pengaduan hingga selesai.
        </p>
    </div>

</div>


<div class="info-card">

    <div class="info-icon">
        🔄
    </div>

    <div>
        <h2>Cara Pengaduan</h2>

        <div class="complaint-steps">

            <div class="complaint-step">
                <span>1</span>
                <div>
                    <strong>Login</strong>
                    <small>Masuk menggunakan akun Pengguna.</small>
                </div>
            </div>

            <div class="complaint-step">
                <span>2</span>
                <div>
                    <strong>Buat Pengaduan</strong>
                    <small>Isi informasi fasilitas yang bermasalah.</small>
                </div>
            </div>

            <div class="complaint-step">
                <span>3</span>
                <div>
                    <strong>Diproses</strong>
                    <small>Admin memeriksa pengaduan.</small>
                </div>
            </div>

            <div class="complaint-step">
                <span>4</span>
                <div>
                    <strong>Selesai</strong>
                    <small>Pengaduan ditangani dan diselesaikan.</small>
                </div>
            </div>

        </div>
    </div>

</div>

</section>@endsection