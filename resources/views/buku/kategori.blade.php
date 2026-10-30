
@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')

    <section class="hero">
        <h1>Kategori Buku</h1>
        <p>Pilih kategori sesuai minat membaca kamu.</p>
    </section>

    <h2 class="section-title">Pilihan Kategori</h2>

    <div class="book-grid">
        @foreach ($kategori as $item)
            <div class="book-card">
                <h3>{{ $item }}</h3>
                <p>Temukan koleksi buku kategori {{ $item }}.</p>
                <a href="/buku" class="btn">Lihat Buku</a>
            </div>
        @endforeach
    </div>

@endsection
