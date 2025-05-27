@extends('layouts.app')
@section('content')
<!-- ===== Banner Section Start===== -->
<section class="position-relative overflow-hidden">
  <img id="initialImage" src="{{ asset('images/fouraxiz-impression.webp') }}" alt="Initial Banner" class="initial-banner-image">
  <video id="video1" autoplay muted playsinline class="banner-video active-video"></video>
  <video id="video2" autoplay muted playsinline class="banner-video"></video>
  <div class="video-blur-layer"></div>
  
  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay-clear">
    <div class="text-center text-white">
      <h1 class="typing-text mb-2"></h1>
      <p id="typing-subtext" class="lead mt-2">Building Smart Solutions for a Digital World</p>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const el = document.querySelector('.typing-text');
  const subtextEl = document.getElementById('typing-subtext');
  const video1 = document.getElementById('video1');
  const video2 = document.getElementById('video2');
  const initialImage = document.getElementById('initialImage');
  const slides = [
    {
      video: "{{ asset('videos/fouraxiz-ai.mp4') }}",
      text: "Transforming Ideas with AI-Powered Innovation",
      subtext: "We harness the potential of artificial intelligence to deliver smarter, future-ready solutions."
    },
    {
      video: "{{ asset('videos/fouraxiz-web.mp4') }}",
      text: "Cutting-Edge Web & App Development Solutions",
      subtext: "We build scalable web and mobile platforms using the most advanced and reliable technologies."
    },
    {
      video: "{{ asset('videos/fouraxiz-cs.mp4') }}",
      text: "Robust Cybersecurity Services for Your Business",
      subtext: "Protecting digital assets with industry-leading security strategies and 24/7 protection."
    }
  ];

  let index = 0;
  let activeVideo = video1;
  let inactiveVideo = video2;

  const swapVideos = () => {
    const temp = activeVideo;
    activeVideo = inactiveVideo;
    inactiveVideo = temp;
  };

  const loadVideo = (src, onReady) => {
    inactiveVideo.innerHTML = '';
    const source = document.createElement('source');
    source.src = src;
    source.type = 'video/mp4';
    inactiveVideo.appendChild(source);
    inactiveVideo.load();
    inactiveVideo.oncanplay = () => {
      onReady();
    };
  };

  const typeWriter = (text, callback = null, i = 0) => {
    if (i <= text.length) {
      el.textContent = text.substring(0, i);
      setTimeout(() => typeWriter(text, callback, i + 1), 115);
    } else {
      if (callback) setTimeout(callback, 1500);
    }
  };

  const eraseText = (i, callback) => {
    if (i >= 0) {
      el.textContent = el.textContent.substring(0, i);
      setTimeout(() => eraseText(i - 1, callback), 60);
    } else if (callback) {
      callback();
    }
  };

  const playSlide = (idx) => {
    const { video, text, subtext } = slides[idx];

    loadVideo(video, () => {
      inactiveVideo.play();

      subtextEl.textContent = subtext;
      subtextEl.style.display = 'block';

      typeWriter(text, () => {
        eraseText(text.length, () => {
          index = (index + 1) % slides.length;
          swapVideos();
          playSlide(index);
        });
      });

      activeVideo.classList.remove('active-video');
      inactiveVideo.classList.add('active-video');
    });
  };

  // Show subtext with img
  subtextEl.style.display = 'block';
  typeWriter("Welcome to Fouraxiz", () => {
    eraseText("Welcome to Fouraxiz".length, () => {
      // Img fade-out
      initialImage.classList.add('fade-out');
      playSlide(index);
    });
  });

});
</script>
<!-- ===== Banner Section End===== -->

<!-- ===== Company Stats Section Start===== -->
<section class="py-5 my-0" style="background: #F0EFF5; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <!-- Item 1 -->
            <div class="col">
                <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm h-100">
                    <img src="{{ asset('images/fouraxiz-deal.webp') }}" alt="Years" style="max-width: 40px;">
                    <div class="ms-2 text-start">
                        <h5 class="counter fw-bold mb-0" data-target="18" style="color: #F95133;">0</h5>
                        <small>Years in Business</small>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col">
                <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm h-100">
                    <img src="{{ asset('images/fouraxiz-world.webp') }}" alt="Countries" style="max-width: 40px;">
                    <div class="ms-2 text-start">
                        <h5 class="counter fw-bold mb-0" data-target="27" style="color: #F95133;">0</h5>
                        <small>Countries Served</small>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col">
                <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm h-100">
                    <img src="{{ asset('images/fouraxiz-deadline.webp') }}" alt="Clients" style="max-width: 40px;">
                    <div class="ms-2 text-start">
                        <h5 class="counter fw-bold mb-0" data-target="997" style="color: #F95133;">0</h5>
                        <small>Clients Worldwide</small>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col">
                <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm h-100">
                    <img src="{{ asset('images/fouraxiz-certificate.webp') }}" alt="Projects" style="max-width: 40px;">
                    <div class="ms-2 text-start">
                        <h5 class="counter fw-bold mb-0" data-target="2847" style="color: #F95133;">0</h5>
                        <small>Projects Delivered</small>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="col">
                <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm h-100">
                    <img src="{{ asset('images/fouraxiz-24hr-support.webp') }}" alt="Support" style="max-width: 40px;">
                    <div class="ms-2 text-start">
                        <h5 class="fw-bold mb-0" style="color: #F95133;">24/7</h5>
                        <small>Support Available</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const counters = document.querySelectorAll('.counter');
    const duration = 3000;
    const interval = 30; 
    counters.forEach(counter => {
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
    });
</script>
<!-- ===== Company Stats Section End===== -->

<!-- ===== Experience Section Start===== -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Side: Text Content -->
      <div class="col-lg-6 mb-4 mb-lg-0 mt-lg-n3">
        <h2 class="fw-bold display-5 mb-3">
          <span class="text-dark">13+</span> <span style="color: #F95133;">Years in Business</span>
        </h2>
        <p class="text-secondary small mb-4">
          Since our founding, we have been committed to delivering high-quality software solutions tailored to meet the diverse needs of our clients across the globe. With a presence in the USA, our expert team has helped hundreds of businesses grow with confidence.
        </p>
        <ul class="list-unstyled text-muted small">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Enterprise Software Development</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom Web & Mobile Applications</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Digital Transformation Services</li>
        </ul>
      </div>
      <!-- Right Side: Video -->
      <div class="col-lg-6 text-center">
        <video class="img-fluid rounded-4 shadow-lg" style="max-height: 400px;" autoplay muted loop playsinline>
          <source src="{{ asset('videos/fourAxiz-experience.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
</section>
<!-- ===== Experience Section End===== -->

<!-- ===== Our Services Section Start===== -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-3">Our <span style="color: #F95133;">Services</span></h2>
    <p class="text-center text-muted mb-5 small">
      Empowering businesses with a complete suite of web services – from design to deployment and beyond.
    </p>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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
        <div class="card h-100 border-0 deep-shadow hover-shadow">
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

<!-- ===== Our Clients Section Startt===== -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="mb-4 fw-bold split-title">
            <span>Our</span> <span>Clients</span>
        </h2>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-4 col-md-2">
                <img src="/images/client1.png" alt="Client 1" class="img-fluid">
            </div>
            <div class="col-4 col-md-2">
                <img src="/images/client2.png" alt="Client 2" class="img-fluid">
            </div>
            <div class="col-4 col-md-2">
                <img src="/images/client3.png" alt="Client 3" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- ===== Featured Projects Section ===== -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold split-title">
            <span>Featured</span> <span>Projects</span>
        </h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="/images/project1.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title main-color">E-commerce Platform</h5>
                        <p class="card-text">Built with Laravel & Vue.js. Integrated payment gateway.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="/images/project2.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title main-color">SaaS Dashboard</h5>
                        <p class="card-text">Real-time analytics & user management features.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="/images/project3.jpg" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title main-color">Mobile App Backend</h5>
                        <p class="card-text">REST API built with Laravel Sanctum and Passport.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Testimonials Section ===== -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="mb-4 fw-bold split-title">
            <span>Client</span> <span>Testimonials</span>
        </h2>
        <div class="row g-4">
            <div class="col-md-4">
                <blockquote class="blockquote bg-light p-4 rounded">
                    <p>"Amazing team! Delivered exactly what we needed."</p>
                    <footer class="blockquote-footer mt-2">John D., USA</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote bg-light p-4 rounded">
                    <p>"The support and response time is top-notch!"</p>
                    <footer class="blockquote-footer mt-2">Maria L., UK</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote bg-light p-4 rounded">
                    <p>"Great experience working with this Laravel team."</p>
                    <footer class="blockquote-footer mt-2">Ahmed K., UAE</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- ===== Call To Action Section ===== -->
<section class="py-5" style="background-color: #F95133;">
    <div class="container text-center text-white">
        <h2 class="mb-3 fw-bold">Ready to start your next project?</h2>
        <p class="mb-4">Contact us today for a free consultation.</p>
        <a href="/contact" class="btn btn-light btn-lg text-dark">Get In Touch</a>
    </div>
</section>



@endsection
