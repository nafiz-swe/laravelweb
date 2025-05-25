<!-- Bootstrap 5 CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm py-2">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('images/fouraxiz-logo.webp') }}" alt="Fouraxiz Logo" class="logo-img">
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
<!-- 🔸 Contact Number + Social Icons Top Line (Two-line Version) -->
<ul class="navbar-nav ms-auto mb-2 flex-column align-items-end top-contact-social">
  <!-- Line 1: Social Icons -->
  <li class="nav-item d-flex">
    <a href="https://facebook.com" target="_blank" class="nav-link px-1 text-dark"><i class="bi bi-facebook"></i></a>
    <a href="https://linkedin.com" target="_blank" class="nav-link px-1 text-dark"><i class="bi bi-linkedin"></i></a>
    <a href="https://twitter.com" target="_blank" class="nav-link px-1 text-dark"><i class="bi bi-twitter"></i></a>
  </li>

  <!-- Line 2: Phone Number -->
  <li class="nav-item text-muted small">
    <a href="tel:+8801737226404" class="text-muted text-decoration-none">
      <i class="bi bi-telephone-fill me-1"></i> +880 1737 226 404
    </a>
  </li>
</ul>


      <!-- 🔸 Main Menu -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>

        <!-- Services -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="#">Artificial Intelligence Services</a></li>
            <li><a class="dropdown-item" href="#">Mobile Application Development</a></li>
            <li><a class="dropdown-item" href="#">Web Development Services</a></li>
            <li><a class="dropdown-item" href="#">Machine Learning Services</a></li>
            <li><a class="dropdown-item" href="#">Blockchain Development Services</a></li>
            <li><a class="dropdown-item" href="#">Cloud Application Development Services</a></li>
            <li><a class="dropdown-item" href="#">Augmented Reality App Development</a></li>
            <li><a class="dropdown-item" href="#">Virtual Reality App Development</a></li>
            <li><a class="dropdown-item" href="#">SaaS Development Services</a></li>
            <li><a class="dropdown-item" href="#">Product Design Services</a></li>
            <li><a class="dropdown-item" href="#">Quality Assurance Services</a></li>
          </ul>
        </li>

        <!-- Solutions -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Solutions
          </a>
          <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
            <li><a class="dropdown-item" href="#">AI Photo and Video App Development</a></li>
            <li><a class="dropdown-item" href="#">Smart Contract Development Solutions</a></li>
            <li><a class="dropdown-item" href="#">Marketplace Development Services</a></li>
            <li><a class="dropdown-item" href="#">Social Media Solutions</a></li>
            <li><a class="dropdown-item" href="#">E-learning Software Development Services</a></li>
            <li><a class="dropdown-item" href="#">Custom Fitness Software Solutions</a></li>
            <li><a class="dropdown-item" href="#">Custom Healthcare Software Solutions</a></li>
            <li><a class="dropdown-item" href="#">Recruiting Solutions Development</a></li>
            <li><a class="dropdown-item" href="#">Financial Software Solutions</a></li>
            <li><a class="dropdown-item" href="#">Travel Software Solutions</a></li>
            <li><a class="dropdown-item" href="#">Real Estate Solutions</a></li>
            <li><a class="dropdown-item" href="#">Product Design Solution</a></li>
          </ul>
        </li>

        <!-- Technologies -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="techDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Technologies
          </a>
          <ul class="dropdown-menu" aria-labelledby="techDropdown">
            <li><a class="dropdown-item" href="#">Python Development Services</a></li>
            <li><a class="dropdown-item" href="#">Rust Development Services</a></li>
            <li><a class="dropdown-item" href="#">React Development Services</a></li>
            <li><a class="dropdown-item" href="#">Vue.js Development Services</a></li>
            <li><a class="dropdown-item" href="#">Unity Game Development Services</a></li>
            <li><a class="dropdown-item" href="#">See All...</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="btn contact-btn ms-3" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Toggle Icon Change Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggler = document.querySelector('.navbar-toggler');
    const togglerIcon = document.querySelector('.navbar-toggler-icon');

    toggler.addEventListener('click', function () {
      togglerIcon.classList.toggle('bi-x');
      togglerIcon.classList.toggle('bi-list');
    });

    // Set default icon
    togglerIcon.classList.add('bi', 'bi-list');
  });
</script>

<!-- Custom CSS -->
<style>
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }

  .dropdown-menu {
    margin-top: 10px;
    border-top: 4px solid #F95133;
    border-radius: 0.5rem;
    box-shadow: -4px 6px 12px rgba(249, 81, 51, 0.2), 4px 6px 12px rgba(249, 81, 51, 0.2), 0px 8px 16px rgba(249, 81, 51, 0.3);
    transition: all 0.3s ease-in-out;
    position: absolute;
  }

  .nav-item.dropdown:hover .dropdown-menu::before {
    content: "";
    position: absolute;
    top: -23px;
    left: 20px;
    border-width: 10px;
    border-style: solid;
    border-color: transparent transparent #F95133 transparent;
  }

  @media (max-width: 991.98px) {
    .nav-item.dropdown:hover .dropdown-menu::before {
      top: 21px;
    }
  }

  .dropdown-item:hover {
    color: #F95133;
    background-color: #fff;
  }

  .nav-item:not(.dropdown) .nav-link:hover {
    color: #F95133;
    text-decoration: underline;
    text-decoration-color: #F95133;
    text-underline-offset: 4px;
  }

  .nav-item.dropdown .nav-link:hover {
    color: #F95133;
    text-decoration: none !important;
  }

  .top-contact-social {
  flex-direction: column !important;
  align-items: flex-end;
  text-align: right;
}


.px-1 {
    padding-right: .75rem !important;
    padding-left: .75rem !important;
}
.nav-link i {
    font-size: 1.1rem; /* তোমার পছন্দমতো বড়ো করো */
} 
.text-muted {
    font-size: 15px !important;
}

  .top-contact-social .nav-item {
    font-size: 0.85rem;
  }

  .navbar-nav > .nav-item > .nav-link,
  .navbar-nav > .nav-item > .dropdown > .nav-link {
    text-transform: uppercase;
  }

  .navbar-toggler:focus {
    box-shadow: none;
  }

  .logo-img {
    height: 45px;
    width: auto;
  }

  .contact-btn {
    color: white !important;
    background-color: #F95133;
    border: none;
  }
</style>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
