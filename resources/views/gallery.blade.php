@extends('web.layouts.app2')
@section('title')
Gallery
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section bread-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="#">Home</a>
                        <span>Gallery</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-controls">
                        <ul>
                            <li class="active" data-filter=".all">All gallery</li>
                            <li data-filter=".fashion">Fashion</li>
                            <li data-filter=".model">Model</li>
                            <li data-filter=".event">Event</li>
                            <li data-filter=".other">Other</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gallery-filter">
                <div class="col-lg-6 mix all fashion">
                    <div class="gs-item">
                        <img src="{{ asset('web/img/gallery/gallery-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all model">
                            <div class="gs-item">
                                <img src="{{ asset('web/img/gallery/gallery-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="{{ asset('web/img/gallery/gallery-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all other">
                            <div class="gs-item">
                                <img src="{{ asset('web/img/gallery/gallery-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all fashion">
                            <div class="gs-item">
                                <img src="{{ asset('web/img/gallery/gallery-5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="{{ asset('web/img/gallery/gallery-6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all model other">
                            <div class="gs-item">
                                <img src="{{ asset('web/img/gallery/gallery-7.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mix all fashion event">
                    <div class="gs-item">
                        <img src="{{ asset('web/img/gallery/gallery-8.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

@endsection
