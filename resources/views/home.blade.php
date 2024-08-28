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

    <!-- Main Section Title -->
    <div class="container text-center mt-5">
        <h2 class="main-title">Jasa Programmer. Terpecaya dan Lengkap.</h2>
        <p class="subtitle">Mastering Freelancer Tools</p>
    </div>

    <!-- Cards Grid Section -->
    <div class="scrolling-container">
        <div class="scrolling-wrapper top-row">
            <div class="tech-card">
                <img src="{{ asset('images/laravel.png') }}" alt="Laravel">
                <h5>Laravel</h5>
                <p>Back-End Development</p>
            </div>
            <div class="tech-card">
                <img src="{{ asset('images/vue.png') }}" alt="Vue">
                <h5>Vue</h5>
                <p>Front-End Development</p>
            </div>
            <div class="tech-card">
                <img src="{{ asset('images/laravel.png') }}" alt="Laravel">
                <h5>Laravel</h5>
                <p>Back-End Development</p>
            </div>
            <div class="tech-card">
                <img src="{{ asset('images/vue.png') }}" alt="Vue">
                <h5>Vue</h5>
                <p>Front-End Development</p>
            </div>
            <!-- Add more cards as needed -->
            <!-- Duplicate the cards for seamless scrolling -->
            <div class="tech-card">
                <img src="{{ asset('images/laravel.png') }}" alt="Laravel">
                <h5>Laravel</h5>
                <p>Back-End Development</p>
            </div>
            <div class="tech-card">
                <img src="{{ asset('images/vue.png') }}" alt="Vue">
                <h5>Vue</h5>
                <p>Front-End Development</p>
            </div>
            <div class="tech-card">
                <img src="{{ asset('images/laravel.png') }}" alt="Laravel">
                <h5>Laravel</h5>
                <p>Back-End Development</p>
            </div>
            <div class="tech-card">
                <img src="{{ asset('images/vue.png') }}" alt="Vue">
                <h5>Vue</h5>
                <p>Front-End Development</p>
            </div>
            <!-- Add more duplicates as needed -->
        </div>

        <div class="scrolling-container">
            <div class="scrolling-wrapper bottom-row">
                <div class="tech-card">
                    <img src="{{ asset('images/python.png') }}" alt="Python">
                    <h5>Python</h5>
                    <p>Data Science</p>
                </div>
                <div class="tech-card">
                    <img src="{{ asset('images/figma.png') }}" alt="Figma">
                    <h5>Figma</h5>
                    <p>UI/UX Design</p>
                </div>
                <div class="tech-card">
                    <img src="{{ asset('images/python.png') }}" alt="Python">
                    <h5>Python</h5>
                    <p>Data Science</p>
                </div>
                <div class="tech-card">
                    <img src="{{ asset('images/figma.png') }}" alt="Figma">
                    <h5>Figma</h5>
                    <p>UI/UX Design</p>
                </div>
                <!-- Add more cards as needed -->
                <!-- Duplicate the cards for seamless scrolling -->
                <div class="tech-card">
                    <img src="{{ asset('images/python.png') }}" alt="Python">
                    <h5>Python</h5>
                    <p>Data Science</p>
                </div>
                <div class="tech-card">
                    <img src="{{ asset('images/figma.png') }}" alt="Figma">
                    <h5>Figma</h5>
                    <p>UI/UX Design</p>
                </div>
                <div class="tech-card">
                    <img src="{{ asset('images/python.png') }}" alt="Python">
                    <h5>Python</h5>
                    <p>Data Science</p>
                </div>
                <div class="tech-card">
                    <img src="{{ asset('images/figma.png') }}" alt="Figma">
                    <h5>Figma</h5>
                    <p>UI/UX Design</p>
                </div>
                <!-- Add more duplicates as needed -->
            </div>
        </div>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-about">
                        <h4>About Us</h4>
                        <p>We provide top-notch programming services to help you build the software of your dreams.</p>
                    </div>
                    <div class="col-md-4 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-contact">
                        <h4>Contact Us</h4>
                        <p><i class="fas fa-map-marker-alt"></i>Gatot Subroto</p>
                        <p><i class="fas fa-phone"></i>0895415461540</p>
                        <p><i class="fas fa-envelope"></i> techindynamic@gmail.com</p>
                    </div>
                </div>
            </div>
        </footer>
    @endsection
