@extends('bootstrap.master')
@section('title')
    Navbar
@endsection

@section('body')
    <nav class="navbar-expand-md navbar-light">
        <div class="container-xxl">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold text-secondary">Faizan Alam - Programmer</span>
            </a>
            {{-- toggle button for navbar in mobile view --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggle-icon"></span></button>

            {{-- navbar links --}}
            <div class="collapse navbar-collapse justify-content-end-align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="#topics" class="nav-link">About the Book</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#topics" class="nav-link">About the Book</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#topics" class="nav-link">About the Book</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#contact" class="nav-link">COntact</a>
                    </li>
                    <li class="navbar-item d-md-none">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection
