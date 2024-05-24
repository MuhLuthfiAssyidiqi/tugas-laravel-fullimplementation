@extends('layouts.master')
@section('title','dashboard')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4 border p-4 rounded">
        <h1 class="h3 mb-3 fw-normal text-center">Halaman Dashboard {{ $user->id }}</h1>

        <div class="d-flex justify-content-between">
            <div class="w-50">
                <p class="fw-bold">Nama Lengkap</p>
                <p class="fw-bold">Email</p>
                <p class="fw-bold">Jenis Kelamin</p>
                <p class="fw-bold">Umur</p>
                <p class="fw-bold">Tanggal Lahir</p>
                <p class="fw-bold">Alamat</p>
            </div>
            @if(Auth::user()->hasRole('superadmin'))
                <div class="w-50">
                    <p>: Superadmin</p>
                    <p>: admin@amandemy.co.id</p>
                    <p>: male</p>
                    <p>: 25 tahun</p>
                    <p>: 2024-05-05</p>
                    <p>: Kantor Amandemy</p>
                </div>
            @else
            <div class="w-50">
                <p>: {{ $user->name }}</p>
                <p>: {{ $user->email }}</p>
                <p>: {{ $user->gender }}</p>
                <p>: {{ $user->age }}</p>
                <p>: {{ $user->birth }}</p>
                <p>: {{ $user->address }}</p>
            </div>
            @endif
        </div>

        <div class="mt-3">
            <a href="{{ route('logout') }}" class="w-100 btn btn-lg btn-danger">Logout</a>
        </div>
    </div>
</div>
@endsection

