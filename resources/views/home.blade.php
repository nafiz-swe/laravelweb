@extends('layouts.app')

@section('content')

<!-- 🔶 Banner Section Start -->
<section class="position-relative overflow-hidden">
  <!-- Video Background -->
  <video autoplay muted loop playsinline class="w-100 banner-video">
    <source src="{{ asset('videos/fouraxiz-banner-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Overlay -->
  <div class="video-blur-layer"></div> <!-- নতুন blur layer -->
  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay-clear">
    <div class="text-center text-white">
      <h1 class="typing-text mb-2" data-texts='["Cutting-Edge Web & App Development Solutions", "Robust Cybersecurity Services for Your Business", "Transforming Ideas with AI-Powered Innovation"]'></h1>
      <p id="typing-subtext" class="lead mt-2">We turn your ideas into scalable digital realities.</p>
    </div>
  </div>
</section>

<!-- 🔶 Styles -->
<style>
  .video-blur-layer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(2px); /* হালকা blur */
    z-index: 1;
  }

  .overlay-clear {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: flex-start;   /* উপরে নিয়ে আসার জন্য */
    padding: 5vh 10vw 0 10vw;  /* উপরের দিকে 5vh padding, ডান-বামে 10vw */
    box-sizing: border-box;
    text-align: center;
  }

  .typing-text {
    font-size: 3.5rem;
    font-weight: bold;
    letter-spacing: 1px;
    white-space: pre-wrap;
    overflow-wrap: break-word;
    max-width: 100%;
    display: inline;
    position: relative;
    padding: 0 1rem;
    box-sizing: border-box;
  }

  .typing-text::after {
    content: '';
    position: absolute;
    width: 2px;
    height: 1em;
    background-color: #fff;
    animation: blink 1s step-start infinite;
    left: auto;
    bottom: 0;
    transform: translateX(2px);
  }

  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
  }

  #typing-subtext {
    font-size: 1.25rem;
    color: #eee;
    margin-top: 10px;
    max-width: 100%;
    padding: 0 1rem;
    box-sizing: border-box;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .overlay-clear {
      padding: 0 5vw;
    }
    .typing-text {
      font-size: 2rem;
      padding: 0 0.5rem;
    }
    #typing-subtext {
      font-size: 1rem;
      padding: 0 0.5rem;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const el = document.querySelector('.typing-text');
    const subtextEl = document.getElementById('typing-subtext');

    const texts = JSON.parse(el.getAttribute('data-texts'));
    const subtexts = {
      "Cutting-Edge Web & App Development Solutions": "We build scalable web and mobile platforms using the most advanced and reliable technologies.",
      "Robust Cybersecurity Services for Your Business": "Protecting digital assets with industry-leading security strategies and 24/7 protection.",
      "Transforming Ideas with AI-Powered Innovation": "We harness the potential of artificial intelligence to deliver smarter, future-ready solutions."
    };

    let index = 0;

    const typeWriter = (text, i = 0) => {
      if (i === 0) {
        subtextEl.textContent = subtexts[text];
      }

      if (i <= text.length) {
        el.textContent = text.substring(0, i);
        setTimeout(() => typeWriter(text, i + 1), 100);
      } else {
        setTimeout(() => eraseText(text), 3333);
      }
    };

    const eraseText = (text, i = text.length) => {
      if (i >= 0) {
        el.textContent = text.substring(0, i);
        setTimeout(() => eraseText(text, i - 1), 50);
      } else {
        el.innerHTML = '&nbsp;';
        index = (index + 1) % texts.length;
        setTimeout(() => typeWriter(texts[index]), 100);
      }
    };

    typeWriter(texts[index]);
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
