@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="hero-title">Empowering Digital Future with Excellence</h1>
        <p class="lead">We provide scalable and cutting-edge IT solutions for your business success in the USA.</p>
        <a href="#contact" class="btn btn-main mt-3">Get in Touch</a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center section-title mb-4">Our Services</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Web Development</h4>
                <p>Custom Laravel and WordPress websites built with precision and performance.</p>
            </div>
            <div class="col-md-4">
                <h4>Mobile Applications</h4>
                <p>Native and hybrid mobile app development tailored for business needs.</p>
            </div>
            <div class="col-md-4">
                <h4>Cloud Solutions</h4>
                <p>Reliable cloud infrastructure and DevOps services for high availability.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title mb-4">About Us</h2>
        <p class="text-center">Fouraxiz is a global IT solution provider with a focus on innovation, quality, and customer satisfaction. Our USA division is committed to delivering world-class services to American businesses of all sizes.</p>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center section-title mb-4">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-main">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
    
@endsection
