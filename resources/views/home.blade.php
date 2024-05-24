@extends('layouts.master')
@section('title','Home')
@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-content {
            margin: 100px;
        }
        .isi {
            padding: 50px 50px; /* Adjusted for better responsiveness */
        }
        h1 {
            
            font-size: 30px;
        }
    </style>
</head>
<section class="container container-content">
    <div class="row">
        <div class="col-md-8 isi">
            <h3>Discover. Connect. Thrive.</h3>
            <h1 id="red-velvet">Transform Your Shopping
                Experience</h1>
            <p>Welcome to Amandemy Shopping, where your desires meet their perfect match. Immerse yourself in a
                world of endless possibilities, curated just for you. Whether you're hunting for unique finds, everyday
                essentials, or extraordinary gifts, we've got you covered.</p>
                <a href="{{ route('login') }}" class="btn btn-primary fw-bold text-dark">Buy Now!</a>
        </div>
        <div class="col-md-4  gambar">
            <img src="https://tse3.mm.bing.net/th?id=OIP.DQmWotJsRgwTkyLHu7hp8gAAAA&pid=Api&P=0&h=180" class="img-fluid" alt="Red Velvet Latte">
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection

