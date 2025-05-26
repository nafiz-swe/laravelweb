@extends('layouts.app')
@section('content')

<!-- 🔶 Banner Section Start -->
<section class="position-relative overflow-hidden">
  <video id="video1" autoplay muted playsinline class="banner-video active-video"></video>
  <video id="video2" autoplay muted playsinline class="banner-video"></video>
  <!-- Overlay -->
  <div class="video-blur-layer"></div>
  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay-clear">
    <div class="text-center text-white">
      <h1 class="typing-text mb-2" data-texts='["Cutting-Edge Web & App Development Solutions", "Robust Cybersecurity Services for Your Business", "Transforming Ideas with AI-Powered Innovation"]'></h1>
      <p id="typing-subtext" class="lead mt-2">We turn your ideas into scalable digital realities.</p>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const el = document.querySelector('.typing-text');
  const subtextEl = document.getElementById('typing-subtext');
  const video1 = document.getElementById('video1');
  const video2 = document.getElementById('video2');
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

  const typeWriter = (text, subtext, i = 0) => {
    if (i === 0) subtextEl.textContent = subtext;
    if (i <= text.length) {
      el.textContent = text.substring(0, i);
      setTimeout(() => typeWriter(text, subtext, i + 1), 115);
    } else {
      setTimeout(() => {
        eraseText(text.length);
      }, 3650);
    }
  };

  const eraseText = (i) => {
    if (i >= 0) {
      el.textContent = el.textContent.substring(0, i);
      setTimeout(() => eraseText(i - 1), 50);
    }
  };

  const playSlide = (idx) => {
    const { video, text, subtext } = slides[idx];
    loadVideo(video, () => {
      inactiveVideo.play();
      typeWriter(text, subtext);
      activeVideo.classList.remove('active-video');
      inactiveVideo.classList.add('active-video');
      inactiveVideo.onended = () => {
        index = (index + 1) % slides.length; // Loop
        swapVideos();
        playSlide(index);
      };
    });
  };

  playSlide(index);
  });
</script>


<!-- 🔶 Hero Section -->
<section class="hero-section text-center py-5">
  <div class="container">
    <h1 class="hero-title">Empowering Digital Future with Excellence</h1>
    <p class="lead">We provide scalable and cutting-edge IT solutions for your business success in the USA.</p>
    <a href="#contact" class="btn btn-main mt-3">Get in Touch</a>
  </div>
</section>

<!-- 🔶 Services Section -->
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

<!-- 🔶 About Section -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center section-title mb-4">About Us</h2>
    <p class="text-center">Fouraxiz is a global IT solution provider with a focus on innovation, quality, and customer satisfaction. Our USA division is committed to delivering world-class services to American businesses of all sizes.</p>
  </div>
</section>

<!-- 🔶 Contact Section -->
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
