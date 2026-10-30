
@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <section class="hero">
        <h1>Koleksi Buku BookSpace</h1>
        <p>Temukan buku favoritmu dari berbagai kategori.</p>
    </section>

    <h2 class="section-title">Daftar Buku</h2>

    <div class="book-grid">
        @foreach ($buku as $item)
            <div class="book-card">
                <h3>{{ $item['judul'] }}</h3>

                <p>Penulis: {{ $item['penulis'] }}</p>
                <p>Kategori: {{ $item['kategori'] }}</p>
                <p>Tahun: {{ $item['tahun'] }}</p>

                <a href="/buku/{{ $item['id'] }}" class="btn">
                    Lihat Detail
                </a>
            </div>
        @endforeach
    </div>

@endsection
