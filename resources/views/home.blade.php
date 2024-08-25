@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <div class="container">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Your Dream Program Starts With Us</h1>
                    <p>TECH IN DYNAMIC menyediakan jasa pembuatan <br>aplikasi mobile, website, dan hosting.</p>
                    <div class="button-group">
                        <a href="#" class="btn order-button">Order</a>
                        <a href="#" class="btn btn-whatsapp">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
                            Whatsapp
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/hero.png') }}" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid additional-section">
        <div class="container">
            <h2 class="section-heading">Start Build With Tech In Dynamic</h2>
            <p class="section-description">Development, and Implementation</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item">
                        <img src="{{ asset('images/service.png') }}" alt="Service 1" class="service-image">
                        <h3 class="service-title">Point Of Sale</h3>
                        <p class="service-description"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item">
                        <img src="{{ asset('images/service.png') }}" alt="Service 2" class="service-image">
                        <h3 class="service-title">Point Of Sale</h3>
                        <p class="service-description"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item">
                        <img src="{{ asset('images/service.png') }}" alt="Service 3" class="service-image">
                        <h3 class="service-title">Point Of Sale</h3>
                        <p class="service-description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid additional-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/program.png') }}" alt="Program Preview" class="img-fluid program-image">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Privilege dari Tech In Dynamic membuat program anda terjamin</h2>
                    <ul class="features-list">
                        <li>Realtime</li>
                        <li>Realtime</li>
                        <li>Realtime</li>
                        <li>Realtime</li>
                        <li>Realtime</li>
                    </ul>
                    <a href="#" class="btn btn-primary order-button">Order Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
