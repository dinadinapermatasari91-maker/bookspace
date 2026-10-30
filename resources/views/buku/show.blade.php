
@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

    <section class="hero">
        <h1>Detail Buku</h1>
        <p>Informasi lengkap mengenai buku pilihanmu.</p>
    </section>

    <div class="book-card">
        <h2>{{ $item['judul'] }}</h2>

        <br>

        <p><strong>Penulis:</strong> {{ $item['penulis'] }}</p>

        <p><strong>Kategori:</strong> {{ $item['kategori'] }}</p>

        <p><strong>Tahun Terbit:</strong> {{ $item['tahun'] }}</p>

        <br>

        <h3>Deskripsi Buku</h3>

        <p>{{ $item['deskripsi'] }}</p>

        <a href="/buku" class="btn">Kembali ke Daftar Buku</a>
    </div>

@endsection
