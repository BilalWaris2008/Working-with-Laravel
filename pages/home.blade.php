@extends('layouts.app')

@section('content')

<!-- Hero Slider -->
<div id="mainSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822_1280.jpg" class="d-block w-100 slider-img">
            <div class="carousel-caption text-center d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="fw-bold">Manage Vouchers Easily</h1>
                <p class="lead">Fast, secure and modern system for your business</p>
                <a href="/voucher" class="btn btn-dark get-started-btn btn-lg mt-2">Get Started</a>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<section class="py-5 bg-light"  id="features">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mt-2">Features</h2>
            <p class="text-muted">Everything you need in one system</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card feature-card text-center p-4">
                    <div class="icon-box bg-primary">
                        <i class="fas fa-ticket"></i>
                    </div>
                    <h5 class="mt-3">Create Vouchers</h5>
                    <p class="text-muted">Generate vouchers in seconds with ease.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card text-center p-4">
                    <div class="icon-box bg-success">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5 class="mt-3">Analytics</h5>
                    <p class="text-muted">Track performance with real-time insights.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card text-center p-4">
                    <div class="icon-box bg-danger">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 class="mt-3">Secure</h5>
                    <p class="text-muted">Top-level security for your data.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection