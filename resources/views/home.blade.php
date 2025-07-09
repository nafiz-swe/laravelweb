@extends('layouts.app')
@section('title', 'Home | laravelweb')
@section('content')
<!-- ===== Hero Section Start ===== -->
<section class="hero-section mb-4">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Creative Business Websites</h1>
      <p>We provide smart software solutions to help your business grow efficiently in the digital era.</p>
      <a href="#services" class="hero-btn">Explore Services</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/laravel-web-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>
<!-- ===== Hero Section End ===== -->


<!-- ===== Company Stats Section Start===== -->
<section class="py-5 my-0 company-stats-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-3 g-md-4">
            <!-- Item 1 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/icons/laravel-web-business.webp') }}" alt="Years Business">
                  <div class="ms-2 text-start">
                      <h4 class="counter fw-bold mb-0" data-target="1" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                      <small>Years in Business</small>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/icons/laravel-web-delivery.webp') }}" alt="Projects Delivered">
                  <div class="ms-2 text-start">
                      <h4 class="counter fw-bold mb-0" data-target="17" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                      <small>Projects Delivered</small>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col">
                <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                    <img src="{{ asset('images/icons/laravel-web-districts.webp') }}" alt="Districts Covered">
                    <div class="ms-2 text-start">
                        <h4 class="counter fw-bold mb-0" data-target="12" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                        <small>Districts Covered</small>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/icons/laravel-web-satisfied.webp') }}" alt="Client Satisfaction">
                  <div class="ms-2 text-start">
                      <h4 class="fw-bold mb-0" style="color: oklch(71.5% 0.143 215.221);">98%</h4>
                      <small> Client Satisfaction</small>
                  </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/icons/laravel-web-support.webp') }}" alt="Support Available">
                    <div class="ms-2 text-start">
                      <h4 class="fw-bold mb-0" style="color: oklch(71.5% 0.143 215.221);">24/7</h4>
                      <small>Support Available</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const counters = document.querySelectorAll('.counter');
    const duration = 4000;
    const interval = 30;

    const runCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const steps = Math.ceil(duration / interval);
        const increment = target / steps;

        const updateCount = () => {
            count += increment;
            if (count < target) {
                counter.innerText = Math.floor(count);
                setTimeout(updateCount, interval);
            } else {
                counter.innerText = target + "+";
            }
        };
        updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                if (!counter.classList.contains('counted')) {
                    counter.classList.add('counted');
                    runCounter(counter);
                }
            }
        });
    }, {
        threshold: 0.6
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });
</script>
<!-- ===== Company Stats Section End===== -->

<!-- ===== Experience Section Start===== -->
<!-- <section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0 mt-lg-n3">
        <h1 class="fw-bold display-5 mb-3">
          <span class="text-dark">13+</span> <span style="color: oklch(60.9% 0.126 221.723);">Years in Business</span>
        </h1>
        <p class="text-secondary small mb-4">
          Since our founding, we have been committed to delivering high-quality software solutions tailored to meet the diverse needs of our clients across the globe. With a presence in the USA, our expert team has helped hundreds of businesses grow with confidence.
        </p>
        <ul class="list-unstyled text-muted small">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Enterprise Software Development</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom Web & Mobile Applications</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Digital Transformation Services</li>
        </ul>
      </div>
      <div class="col-lg-6 text-center">
        <video class="img-fluid rounded-2 shadow-lg" style="max-height: 400px;" autoplay muted loop playsinline>
          <source src="{{ asset('videos/laravelweb-experience.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
</section> -->
<!-- ===== Experience Section End===== -->


<!-- ===== Process Section Start ===== -->
<section class="process-section">
  <div class="container">
    <div class="process-header">
      <h5>How We Work</h5>
      <h1>Simple Steps to Start</h1>
      <p>We follow a streamlined process to deliver effective solutions with clarity and confidence.</p>
    </div>
    <div class="process-steps">
      <div class="step-box">
        <img src="{{ asset('images/icons/discussion.webp') }}" alt="Project Discuss">
        <h4><span>Step 1</span> Project Discuss</h4>
      </div>
      <div class="step-box">
        <img src="{{ asset('images/icons/designSelect.webp') }}" alt="Confirm Design">
        <h4><span>Step 2</span> Confirm Design</h4>
      </div>
      <div class="step-box">
        <img src="{{ asset('images/icons/customize.webp') }}" alt="Customize">
        <h4><span>Step 3</span> Customize</h4>
      </div>
      <div class="step-box">
        <img src="{{ asset('images/icons/liveWeb.webp') }}" alt="Live Your Website">
        <h4><span>Step 4</span> Live Your Website</h4>
      </div>
    </div>
  </div>
</section>
<!-- ===== Process Section End ===== -->

<!-- ===== Our Services Section Start===== -->
<section class="py-5" id="solutions" style="background: linear-gradient(to right, #f5f7fa, #e2e6ec);">
  <div class="container">
    <h1 class="text-center fw-bold mb-3">
      Web <span class="brand-highlight">Solutions</span>
    </h1>
    <p class="text-center text-muted mb-2 small">
      We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.
    </p>
    <div class="hero-animated-bar mb-5"></div>
    <div class="row g-4 justify-content-center mb-3">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/diagnostic-hero.webp') }}" alt="Diagnostic Center" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Diagnostic Center</h5>
            <p class="card-text small">Online appointment and test report delivery system.</p>
            <a href="{{ route('diagnostic.center') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/ecommerce-hero.webp') }}" alt="E-commerce" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">E-commerce</h5>
            <p class="card-text small">Custom online store with product showcase and order system.</p>
            <a href="{{ route('ecommerce') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/portfolio-hero.webp') }}" alt="Portfolio/Personal Website" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Portfolio/Personal Website</h5>
            <p class="card-text small">Personal profile with service showcase and contact form.</p>
            <a href="{{ route('portfolio') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/resort-hero.webp') }}" alt="Hotel/Resort" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Resort/Hotel Booking</h5>
            <p class="card-text small">Room availability check with online booking facility.</p>
            <a href="{{ route('resort.hotel') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/restaurant-hero.webp') }}" alt="Restaurant/Cafe Shop" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Restaurant/Cafe Shop</h5>
            <p class="card-text small">Digital menu, food ordering, and table reservation system.</p>
            <a href="{{ route('restaurant.cafe') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/salon-hero.webp') }}" alt="Salon/Beauty Parlor" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Salon/Beauty Parlor</h5>
            <p class="card-text small">Service list, appointment booking, and customer feedback system.</p>
            <a href="{{ route('salon.beauty') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/school-hero.webp') }}" alt="School Management" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">School Management</h5>
            <p class="card-text small">Notice board, admission info, and academic management.</p>
            <a href="{{ route('school.management') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 10px;">
          <div class="image-wrapper">
            <img src="{{ asset('images/banner/tution-hero.webp') }}" alt="Tuition Center" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Tuition Center</h5>
            <p class="card-text small">Course list, batch timing, and online registration system.</p>
            <a href="{{ route('tuition.center') }}" class="btn btn-learn btn-sm">Get Design</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===== Our Services Section End===== -->


<!-- ===== Our Clients Section Start ===== -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h1 class="text-center fw-bold mb-3">
          Our <span class="brand-highlight">Clients</span>
        </h1>
        <p class="text-center text-muted mb-2 small">
          With over 13 years of experience, we have proudly delivered tailored software solutions to a wide range of esteemed clients. Their trust in our expertise has empowered us to streamline operations, enhance digital efficiency, and build lasting partnerships.
        </p>
        <div class="hero-animated-bar mb-5"></div>
        <div class="client-slider-wrapper overflow-hidden position-relative">
            <div class="client-slider d-flex align-items-center" id="clientSlider">
                @php
                    $logos = ['fa-dgfp', 'fa-bicm', 'fa-toyota', 'fa-great-eastern', 'fa-hospice', 'fa-msh', 'fa-northernlowa', 'fa-sanofi', 'fa-al-fatha', 'fa-undp', 'fa-unikart'];
                @endphp
                @foreach($logos as $logo)
                    <div class="client-logo flex-shrink-0 px-4">
                        <img src="{{ asset('images/clients/' . $logo . '.webp') }}" alt="{{ $logo }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById('clientSlider');
    let speed = 1; // pixels per frame
    const clone = slider.cloneNode(true);
    clone.setAttribute("aria-hidden", "true");
    slider.parentElement.appendChild(clone);

    let position = 0;
    function moveSlider() {
        position -= speed;
        if (position <= -slider.scrollWidth) {
            position = 0;
        }
        slider.style.transform = `translateX(${position}px)`;
        slider.nextElementSibling.style.transform = `translateX(${position + slider.scrollWidth}px)`;
        requestAnimationFrame(moveSlider);
    }
    moveSlider();
  });
</script>
<!-- ===== Our Clients Section End ===== -->


<!-- ===== Quick Service Section Start ===== -->
  <section class="py-5 text-center" id="services" style="background: linear-gradient(to right, #f5f7fa, #e2e6ec);">
    <div class="container">
    <div class="usa-content-box-full">
      <h1 class="text-center fw-bold mb-3">
        We Provide Everything You <span class="brand-highlight">Need to Launch</span>
      </h1>
      <p class="text-center text-muted mb-2 small">
        From domain to SEO, complete website solutions under one roof.
      </p>
      <div class="hero-animated-bar mb-5"></div>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-globe text-primary me-2"></i>
            We help for domain purchase
          </div>
        </div>
        
        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-server text-success me-2"></i>
            We provide hosting solution
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-shield-alt text-warning me-2"></i>
            Complete web security implementation
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-code text-danger me-2"></i>
            Customizable design as per need
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-cogs text-info me-2"></i>
            Admin panel for easy management
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-chart-line text-success me-2"></i>
            SEO-friendly website structure
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fab fa-facebook-square text-primary me-2"></i>
            Your business Facebook page setup
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-paper-plane text-primary me-2"></i>
            Professional business email setup (info@domain.com)
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- ===== Quick Service Section END ===== -->




<style>
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Mobile responsiveness */
    @media (max-width: 991.98px) {
        .img-container {
            display: block !important;
            text-align: center;
        }

        .img-container img {
            width: auto;
            margin-bottom: 20px;
        }

        .text-container {
            text-align: center;
        }

        .text-container h2 {
            font-size: 1.5rem;
        }

        .text-container p,
        .text-container ul li {
            font-size: 14px;
        }
    }
</style>



<!-- ===== Featured Projects Section Start ===== -->
<section class="py-5 bg-white">
    <div class="container text-center">
        <h1 class="text-center fw-bold mb-3">
          Laravel <span class="brand-highlight"> Theme UI</span>
        </h1>
        <p class="text-center text-muted mb-2 small">
          Premium, responsive and ready-to-use Laravel website templates for different business needs.
        </p>
        <div class="hero-animated-bar mb-5"></div>
        @php
          $projects = [
            ['image' => 'project-Task-Management.webp', 'title' => 'Diagnostic Center', 'desc' => 'Book tests and view reports online.'],
            ['image' => 'project-Online-Pharmacy.webp', 'title' => 'E-commerce', 'desc' => 'Sell products with modern cart system.'],
            ['image' => 'project-Grocery-App.webp', 'title' => 'Portfolio Personal', 'desc' => 'Showcase profile and get client reach.'],
            ['image' => 'project-app.webp', 'title' => 'Resort/Hotel', 'desc' => 'Display rooms and manage online bookings.'],
            ['image' => 'project-Bazarnao-Ecommerce.webp', 'title' => 'Restaurant/Cafe Shop', 'desc' => 'Menu display with order and booking.'],
            ['image' => 'project-DGFP-Archive.webp', 'title' => 'Salon/Beauty Parlor', 'desc' => 'Highlight services and take appointments.'],
            ['image' => 'project-Bazarnao-Ecommerce.webp', 'title' => 'School Management', 'desc' => 'Notices, admissions, and student tools.'],
            ['image' => 'project-DGFP-Archive.webp', 'title' => 'Tuition Center', 'desc' => 'Course listing with online enrollment.'],
          ];
        @endphp
        <div class="swiper mySwiper px-3 py-3">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card project-card shadow-lg h-100">
                            <img src="{{ asset('images/' . $project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                            <div class="card-body bg-light">
                                <h5 class="card-title">{{ $project['title'] }}</h5>
                                <p class="card-text">{{ $project['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-5"></div>
        </div>
    </div>
</section>
  <!-- Swiper CSS & JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        centeredSlides: false,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 4,
          }
        }
    });
</script>
<style>
.swiper-pagination {
  position: relative;
}
</style>
<!-- ===== Featured Projects Section End ===== -->

<!-- ===== Client Testimonials Section Start ===== -->
<section class="py-5 text-center" id="testimonials" style="background: linear-gradient(to right, #f5f7fa, #e2e6ec);">
  <div class="container">
    <h1 class="text-center fw-bold mb-3">
      Client<span class="brand-highlight"> Testimonials</span>
    </h1>
      <p class="text-center text-muted mb-2 small">
      Hear from those who trusted us — real stories from clients across industries who've experienced our dedication, quality, and results.
    </p>
    <div class="hero-animated-bar mb-5"></div>
    @php
      $testimonials = [
          ['name' => 'Evan L.', 'title' => 'Marketing Head, BrightIdeas', 'image' => 'laravelweb-client-2.webp', 'text' => 'The support and response time is top-notch!', 'stars' => 4],
          ['name' => 'Alim R.', 'title' => 'CO, Amazon', 'image' => 'laravelweb-client-1.webp', 'text' => 'Amazing team! Delivered exactly what we needed.', 'stars' => 5],
          ['name' => 'Nafizul I.', 'title' => 'CTO, GenZ', 'image' => 'laravelweb-client-3.webp', 'text' => 'Great experience working with this Laravel team.', 'stars' => 4],
          ['name' => 'Luis W.', 'title' => 'Product Manager, Appify', 'image' => 'laravelweb-client-4.webp', 'text' => 'Professional, fast and reliable — highly recommended!', 'stars' => 5],
          ['name' => 'Ravi S.', 'title' => 'Founder, EduNext', 'image' => 'laravelweb-client-5.webp', 'text' => 'They really care about our product success.', 'stars' => 3],
          ['name' => 'Smith G.', 'title' => 'Lead Developer, SmartLabs', 'image' => 'laravelweb-client-6.webp', 'text' => 'Excellent collaboration and great communication.', 'stars' => 5],
      ];
    @endphp
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="hover">
      <div class="carousel-inner">
        <!-- Slide Items will be dynamically generated by JS -->
      </div>
      <!-- Custom Pagination -->
      <ul class="custom-indicators"></ul>
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const testimonials = @json($testimonials);
    const carouselInner = document.querySelector('#testimonialCarousel .carousel-inner');
    const indicatorsContainer = document.querySelector('.custom-indicators');
    let slides = [];
    let itemsPerSlide = window.innerWidth >= 992 ? 2 : 1;
    // Create profile card HTML
    function createProfileCard(client) {
      return `
        <div class="profile-card col">
          <img src="{{ asset('images/${client.image}') }}" alt="${client.name}" />
          <h5>${client.name}</h5>
          <small>${client.title}</small>
          <p>“${client.text}”</p>
          <div class="stars">${'★'.repeat(client.stars) + '☆'.repeat(5 - client.stars)}</div>
        </div>`;
    }
    // Build slides (overlapping 2 per slide on desktop, 1 on mobile)
    function buildSlides() {
      carouselInner.innerHTML = '';
      indicatorsContainer.innerHTML = '';

      for (let i = 0; i < testimonials.length; i++) {
        let slideProfiles = [];

        if (itemsPerSlide === 2 && i + 1 < testimonials.length) {
          slideProfiles = [testimonials[i], testimonials[i + 1]];
        } else {
          slideProfiles = [testimonials[i]];
        }

        let slideInnerHTML = '<div class="row justify-content-center">';
        slideProfiles.forEach(client => {
          slideInnerHTML += createProfileCard(client);
        });
        slideInnerHTML += '</div>';

        let div = document.createElement('div');
        div.className = 'carousel-item';
        if (i === 0) div.classList.add('active');
        div.innerHTML = slideInnerHTML;

        carouselInner.appendChild(div);
        // Pagination dot
        let li = document.createElement('li');
        li.setAttribute('data-bs-target', '#testimonialCarousel');
        li.setAttribute('data-bs-slide-to', i);
        if (i === 0) li.classList.add('active');
        indicatorsContainer.appendChild(li);
      }
    }
    // Initial build
    buildSlides();

    const carouselElement = document.getElementById('testimonialCarousel');
    const carousel = new bootstrap.Carousel(carouselElement, {
      interval: 4000,
      ride: 'carousel',
      wrap: true,
      touch: true,
      keyboard: true,
      pause: 'hover',
    });

    // Sync dots on slide change
    carouselElement.addEventListener('slide.bs.carousel', function (e) {
      const activeIndex = e.to;
      indicatorsContainer.querySelectorAll('li').forEach((li, idx) => {
        li.classList.toggle('active', idx === activeIndex);
      });
    });

    // Dot click moves carousel
    indicatorsContainer.querySelectorAll('li').forEach((li, idx) => {
      li.addEventListener('click', () => {
        carousel.to(idx);
      });
    });

    let lastItemsPerSlide = itemsPerSlide;
    window.addEventListener('resize', () => {
      const newItemsPerSlide = window.innerWidth >= 992 ? 2 : 1;
      if (newItemsPerSlide !== lastItemsPerSlide) {
        itemsPerSlide = newItemsPerSlide;
        lastItemsPerSlide = itemsPerSlide;
        buildSlides();
        carousel.dispose();
        new bootstrap.Carousel(carouselElement, {
          interval: 4000,
          ride: 'carousel',
          wrap: true,
          touch: true,
          keyboard: true,
          pause: 'hover',
        });
      }
    });
  });
</script>
<!-- ===== Client Testimonials Section End ===== -->

<!-- ===== Call To Action Section ===== -->
<section class="py-5" style="    background-image: linear-gradient(90deg, oklch(71.5% 0.143 215.221) 0%, oklch(60.9% 0.126 221.723) 100%);">
    <div class="container text-center text-white">
        <h1 class="mb-3 fw-bold">Ready to start your next project?</h1>
        <p class="mb-4">Contact us today for a free consultation.</p>
        <a href="/contact" class="btn btn-light btn-lg text-dark">Get In Touch</a>
    </div>
</section>

@endsection

<!-- 
<h1 class="text-center fw-bold mb-3">
<span class="brand-highlight"> 
<p class="text-center text-muted mb-2 small">
<div class="hero-animated-bar mb-5"></div>
-->
