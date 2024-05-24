@extends('layouts.master')
@section('title', 'Products')

@section('content')
<section class="list">
    <div class="content-atas">
        <h2 class="text-center bg-primary border-radius-">Products</h2>   
    </div>
    @if(count($contents ?? []) > 0)
    <ul class="horizontal-list">
        @foreach($contents ?? [] as $content)
        <li class="barang">
            <img class="gambar" src="{{-- $content->Gambar --}}">
            <div class="price">
                <h3 class="judul">{{ $content->Nama }}</h3>
                <p class="kondisi">{{ $content->kondisi }}</p>
            </div>
            <div class="stokharga">
                <p>{{ $content->stok }}</p>
                <p id="harga">Rp.{{ $content->Harga }}</p>
                <p id="berat">{{ $content->Berat }}</p>
            </div>
            <p>{{ $content->Deskripsi }}</p>
            <button class="btn btn-primary " id="tombol">Pesan Sekarang</button>
        </li>
        @endforeach
    </ul>
    @else
    <p></p>
    @endif
@endsection