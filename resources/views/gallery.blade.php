@extends('layouts.app')

@section('content')
    <div class="container gallery-section">
        <h2 class="gallery-heading">Start Build With Tech In Dynamic</h2>
        <h3 class="gallery-subheading">Development, and Implementation</h3>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="gallery-item">
                    <img src="{{ asset('images/point-of-sale.png') }}" alt="Point Of Sale" class="gallery-image">
                    <div class="gallery-title">Point Of Sale &gt;</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="gallery-item">
                    <img src="{{ asset('images/point-of-sale.png') }}" alt="Point Of Sale" class="gallery-image">
                    <div class="gallery-title">Point Of Sale &gt;</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="gallery-item">
                    <img src="{{ asset('images/point-of-sale.png') }}" alt="Point Of Sale" class="gallery-image">
                    <div class="gallery-title">Point Of Sale &gt;</div>
                </div>
            </div>
        </div>
    </div>
@endsection
