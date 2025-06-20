@extends('layouts.app')
@section('title', 'Home | FourAxiz')
@section('content')
<!-- ===== Hero Section Start ===== -->
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Empowering Digital Innovation</h1>
      <p>We provide smart software solutions to help your business grow efficiently in the digital era.</p>
      <a href="#services" class="hero-btn">Explore Services</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/nafizHero3.webp') }}" alt="Hero Banner" class="hero-img">
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
                <img src="{{ asset('images/fouraxiz-deal.webp') }}" alt="Years">
                  <div class="ms-2 text-start">
                      <h4 class="counter fw-bold mb-0" data-target="18" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                      <small>Years in Business</small>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col">
                <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                    <img src="{{ asset('images/fouraxiz-world.webp') }}" alt="Countries">
                    <div class="ms-2 text-start">
                        <h4 class="counter fw-bold mb-0" data-target="27" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                        <small>Countries Served</small>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/fouraxiz-deadline.webp') }}" alt="Clients">
                  <div class="ms-2 text-start">
                      <h4 class="counter fw-bold mb-0" data-target="997" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                      <small>Clients Worldwide</small>
                  </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/fouraxiz-certificate.webp') }}" alt="Projects">
                  <div class="ms-2 text-start">
                      <h4 class="counter fw-bold mb-0" data-target="2847" style="color: oklch(71.5% 0.143 215.221);">0</h4>
                      <small>Projects Delivered</small>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="col">
              <div class="stats-card d-flex align-items-center bg-white p-2 rounded-0 h-100 shadow" style="border-left: 4px solid oklch(71.5% 0.143 215.221);">
                <img src="{{ asset('images/fouraxiz-24hr-support.webp') }}" alt="Support">
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
          <source src="{{ asset('videos/fourAxiz-experience.mp4') }}" type="video/mp4">
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
      <h2>Simple Steps to Start</h2>
      <p>We follow a streamlined process to deliver effective solutions with clarity and confidence.</p>
    </div>
    <div class="process-steps">
      <div class="step-box">
        <img src="{{ asset('images/icons/idea.svg') }}" alt="Step 1">
        <h4><span>Step 1</span> Idea</h4>
      </div>
      <div class="step-box">
        <img src="{{ asset('images/icons/plan.svg') }}" alt="Step 2">
        <h4><span>Step 2</span> Planning</h4>
      </div>
      <div class="step-box">
        <img src="{{ asset('images/icons/code.svg') }}" alt="Step 3">
        <h4><span>Step 3</span> Development</h4>
      </div>
      <div class="step-box">
        <img src="{{ asset('images/icons/launch.svg') }}" alt="Step 4">
        <h4><span>Step 4</span> Launch</h4>
      </div>
    </div>
  </div>
</section>
<!-- ===== Process Section End ===== -->

<!-- ===== Our Services Section Start===== -->
<section class="py-5" style="background: linear-gradient(to right, #f5f7fa, #e2e6ec);">
  <div class="container">
    <h1 class="text-center fw-bold mb-3">Our <span style="color: oklch(60.9% 0.126 221.723);">Services</span></h1>
    <p class="text-center text-muted mb-5 small">
      Empowering businesses with a complete suite of web services – from design to deployment and beyond.
    </p>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-web-dev.webp') }}" alt="Web Development" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text small">Expert web development services for your website – professional, reliable, and tailored to you.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-app-dev.webp') }}" alt="App Development" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">App Development</h5>
            <p class="card-text small">Custom app development – innovative, seamless, and user-friendly solutions for your needs.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-ai-ml.webp') }}" alt="AI & Machine Learning" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">AI & Machine Learning</h5>
            <p class="card-text small">Cutting-edge AI and machine learning solutions – unlocking the power of your data.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-software-testing.webp') }}" alt="Software Testing" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Software Testing</h5>
            <p class="card-text small">Quality-driven testing services for flawless performance and reliable functionality.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-security.webp') }}" alt="Security Solutions" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Security Solutions</h5>
            <p class="card-text small">Robust digital security solutions – safeguard your data with confidence.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-hosting.webp') }}" alt="Domain & Hosting" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Domain & Hosting</h5>
            <p class="card-text small">Reliable web hosting and domain solutions – empower your online presence effortlessly.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-seo.webp') }}" alt="Digital Marketing" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Digital Marketing (SEO)</h5>
            <p class="card-text small">Optimize your website with powerful SEO and digital marketing strategies.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow" style="border-radius: 0;">
          <div class="image-wrapper">
            <img src="{{ asset('images/fa-graphics.webp') }}" alt="Graphics Design" class="service-img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Graphics Design</h5>
            <p class="card-text small">Creative graphic design services – captivate your audience visually.</p>
            <a href="#" class="btn btn-learn btn-sm">Learn More</a>
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
        <h1 class="mb-4 fw-bold split-title">
            <span>Our</span> <span>Clients</span>
        </h1>
        <p class="text-center text-muted mb-5 small">
        With over 13 years of experience, we have proudly delivered tailored software solutions to a wide range of esteemed clients. Their trust in our expertise has empowered us to streamline operations, enhance digital efficiency, and build lasting partnerships.
        </p>
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


<!-- ===== USA Section Start ===== -->
<section class="py-5">
<div class="container px-0 px-md-2 px-xl-3">
    <div class="usa-content-box-full">
      <h2 class="usa-title">
        Why Leading USA Brands Trust <span class="brand-highlight">4AXIZ</span>
      </h2>
      <p class="usa-subtext">
        We empower USA businesses with scalable, secure, and innovative technology that delivers real results — not promises.
      </p>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-star text-warning me-2"></i>
            <strong>13+ years</strong> serving top USA markets
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-clock text-primary me-2"></i>
            <strong>Real-time support</strong> in USA business hours
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-lock text-success me-2"></i>
            <strong>HIPAA / SOC 2</strong> security-compliant development
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="usa-feature-box">
            <i class="fas fa-handshake text-danger me-2"></i>
            <strong>Long-term partnerships</strong> with USA enterprises
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== Donald Trump END ===== -->




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
        <h1 class="mb-3 fw-bold split-title">
            <span>Featured</span> <span>Projects</span>
        </h1>
        <p class="text-muted mb-5">
            Over the last 13+ years, we have delivered modern software solutions across industries — from eCommerce to government archives.
        </p>
        @php
            $projects = [
                ['image' => 'project-Task-Management.webp', 'title' => 'Task Management', 'desc' => 'A complete task tracking and assignment tool.'],
                ['image' => 'project-Online-Pharmacy.webp', 'title' => 'Online Pharmacy', 'desc' => 'Real-time medicine ordering system.'],
                ['image' => 'project-Grocery-App.webp', 'title' => 'Grocery App', 'desc' => 'App for instant grocery delivery.'],
                ['image' => 'project-app.webp', 'title' => 'Mobile App', 'desc' => 'Cross-platform scalable mobile app.'],
                ['image' => 'project-Bazarnao-Ecommerce.webp', 'title' => 'Bazarnao Ecommerce', 'desc' => 'Smart shopping platform.'],
                ['image' => 'project-DGFP-Archive.webp', 'title' => 'DGFP Archive', 'desc' => 'Government document archiving solution.'],
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
<section class="py-5 text-center" style="background: linear-gradient(to right, #f5f7fa, #e2e6ec);">
  <div class="container">
    <h1 class="mb-3 fw-bold split-title">
      <span>Client</span> <span>Testimonials</span>
    </h1>
    <p class="text-muted mb-5">
      Hear from those who trusted us — real stories from clients across industries who've experienced our dedication, quality, and results.
    </p>
    @php
      $testimonials = [
          ['name' => 'Evan L.', 'title' => 'Marketing Head, BrightIdeas', 'image' => 'fouraxiz-client-2.webp', 'text' => 'The support and response time is top-notch!', 'stars' => 4],
          ['name' => 'Alim R.', 'title' => 'CO, Amazon', 'image' => 'fouraxiz-client-1.webp', 'text' => 'Amazing team! Delivered exactly what we needed.', 'stars' => 5],
          ['name' => 'Nafizul I.', 'title' => 'CTO, GenZ', 'image' => 'fouraxiz-client-3.webp', 'text' => 'Great experience working with this Laravel team.', 'stars' => 4],
          ['name' => 'Luis W.', 'title' => 'Product Manager, Appify', 'image' => 'fouraxiz-client-4.webp', 'text' => 'Professional, fast and reliable — highly recommended!', 'stars' => 5],
          ['name' => 'Ravi S.', 'title' => 'Founder, EduNext', 'image' => 'fouraxiz-client-5.webp', 'text' => 'They really care about our product success.', 'stars' => 3],
          ['name' => 'Smith G.', 'title' => 'Lead Developer, SmartLabs', 'image' => 'fouraxiz-client-6.webp', 'text' => 'Excellent collaboration and great communication.', 'stars' => 5],
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