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

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav ms-auto flex-column align-items-end top-contact-social">
  <li class="nav-item d-flex">
    <a href="https://facebook.com" target="_blank" class="nav-link px-1 text-dark" style="padding: 0.5px;"><i class="bi bi-facebook"></i></a>
    <a href="https://www.linkedin.com/in/nafiz-swe/" target="_blank" class="nav-link px-1 text-dark" style="padding: 0.5px;"><i class="bi bi-linkedin"></i></a>
    <a href="https://twitter.com" target="_blank" class="nav-link px-1 text-dark" style="padding: 0.5px;"><i class="bi bi-twitter"></i></a>
  </li>

  <li class="nav-item text-muted small">
    <a href="tel:+1 737 226 404" class="text-muted text-decoration-none">
      <i class="bi bi-telephone-fill me-1"></i> +1 1737 226 404
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
          <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link dropdown-toggle" href="#" id="techDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Technologies
          </a>
          <ul class="dropdown-menu" aria-labelledby="techDropdown">
          <li>
  <a class="dropdown-item" href="#">Python Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Django Development Services</a></li>
    <li><a class="dropdown-item" href="#">Flask Development Services</a></li>
    <li><a class="dropdown-item" href="#">FastAPI Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">JavaScript Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Node.js Development Services</a></li>
    <li><a class="dropdown-item" href="#">Express.js Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">React Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Next.js Development Services</a></li>
    <li><a class="dropdown-item" href="#">Gatsby Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">Vue.js Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Nuxt.js Development Services</a></li>
    <li><a class="dropdown-item" href="#">Quasar Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">PHP Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Laravel Development Services</a></li>
    <li><a class="dropdown-item" href="#">Symfony Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">Java Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Spring Development Services</a></li>
    <li><a class="dropdown-item" href="#">Hibernate Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">.NET Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">ASP.NET Core Development Services</a></li>
    <li><a class="dropdown-item" href="#">Entity Framework Development Services</a></li>
    <li><a class="dropdown-item" href="#">Blazor Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">C++ Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Qt Development Services</a></li>
    <li><a class="dropdown-item" href="#">Boost Development Services</a></li>
  </ul>
</li>


<li>
  <a class="dropdown-item" href="#">Swift Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">SwiftUI Development Services</a></li>
    <li><a class="dropdown-item" href="#">Vapor Development Services</a></li>
  </ul>
</li>

<li>
  <a class="dropdown-item" href="#">Kotlin Development Services</a>
  <ul class="submenu">
    <li><a class="dropdown-item" href="#">Ktor Development Services</a></li>
    <li><a class="dropdown-item" href="#">Spring Development Services</a></li>
  </ul>
</li>

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
<script>
  // DOM লোড হলে চালু হবে
  document.addEventListener('DOMContentLoaded', function() {
    // সব dropdown-item যেগুলোর পরে submenu আছে সেগুলো সিলেক্ট করো
    const dropdownItems = document.querySelectorAll('.dropdown-item');

    dropdownItems.forEach(function(item) {
      // Check করো যদি item এর পরের sibling ul.submenu হয়
      const submenu = item.nextElementSibling;
      if (submenu && submenu.classList.contains('submenu')) {
        // তাহলে ঐ dropdown-item এ click event attach করো
        item.style.cursor = 'pointer';  // বুঝতে সুবিধার জন্য pointer cursor দিতে পারো

        item.addEventListener('click', function(e) {
          e.preventDefault(); // লিঙ্ক redirect বন্ধ করার জন্য (যদি # দেওয়া থাকে)

          // আগের যেকোন open submenu বন্ধ করার জন্য:
          document.querySelectorAll('ul.submenu.show-submenu').forEach(function(openMenu) {
            if (openMenu !== submenu) {
              openMenu.classList.remove('show-submenu');
            }
          });

          // ক্লিক করা item's submenu toggle করো (open/close)
          submenu.classList.toggle('show-submenu');
        });
      }
    });
  });
</script>

<!-- Custom CSS -->
<style>
li > a.dropdown-item {
  font-weight: 400;
  color: #000000;     
  text-decoration: none;
  padding: 6px 12px;  
  display: block;
}

ul.submenu {
  display: none;
  padding: 10px 0;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 6px;
  max-width: 350px;
  margin-top: 5px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  list-style-type: none;
  border-bottom: 1px solid #F95133;
}
ul.submenu.show-submenu {
  display: block;
}
ul.submenu li {
  padding-left: 20px;
  border-bottom: 1px solid #e0e0e0;
  transition: background-color 0.3s ease;
}
ul.submenu li:last-child {
  border-bottom: none;
}
ul.submenu li a.dropdown-item {
  font-weight: 400;
  color: #666666;
  text-decoration: none;
  display: block;
}
ul.submenu li:hover {
  background-color: #e3f2fd;
}

ul.submenu li:hover a.dropdown-item {
  color: #1e88e5;
}

.nav-link.dropdown-toggle::after {
  display: none;
  transition: opacity 0.3s ease;
  opacity: 0;
  z-index: 1;
  position: relative;
  top: 24px;
  margin-left: -20px;
  color: #F95133;
  border-width: 0.35em 0.35em 0 0.35em;
  font-size: 2rem;
  transform: rotate(180deg);
}

.nav-item.dropdown:hover > .nav-link.dropdown-toggle::after,
.nav-link.dropdown-toggle:focus::after,
.nav-link.dropdown-toggle[aria-expanded="true"]::after {
  display: inline-block;
  opacity: 1;
}
/* ডিফল্টভাবে অ্যারো দেখানো হবে না */
.nav-item.dropdown > .nav-link::after {
  display: none;
}

/* কেবল dropdown open থাকলে অ্যারো দেখা যাবে */
.nav-item.dropdown.show > .nav-link::after {
  display: inline-block;
  content: "";
  margin-left: 0.3em;
  vertical-align: 0.3em;
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-left: 0.3em solid transparent;
}

/* .nav-item.dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 0;
  padding: 10px 0;
  border-top: 4px solid #F95133;
  border-bottom: 4px solid #F95133;
  border-radius: 0.5rem;
  box-shadow:
    -4px 6px 12px rgba(249, 81, 51, 0.2),
     4px 6px 12px rgba(249, 81, 51, 0.2),
     0px 8px 16px rgba(249, 81, 51, 0.3);
  transition: all 0.3s ease-in-out;
  position: absolute;
} */
.nav-item.dropdown:hover .dropdown-menu {
  max-height: 300px;
  overflow-y: auto;       
  overflow-x: hidden;
  /* overflow: visible;  --> এটা বাদ দাও */
  display: block;
  margin-top: 0;
  padding: 10px 0;
  border-top: 4px solid #F95133;
  border-bottom: 4px solid #F95133;
  border-radius: 0.5rem;
  box-shadow:
    -4px 6px 12px rgba(249, 81, 51, 0.2),
     4px 6px 12px rgba(249, 81, 51, 0.2),
     0px 8px 16px rgba(249, 81, 51, 0.3);
  transition: all 0.3s ease-in-out;
  position: absolute;
  z-index: 9999;
  /* overflow: visible; --> এটা না দিবে */
}

/* .nav-item.dropdown:hover .dropdown-menu::before {
  content: "";
  position: absolute;
  top: -13px;     
  left: 25px;     
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #F95133; 
  z-index: 10000;
} */


@media (max-width: 991.98px) {
  .nav-item.dropdown:hover .dropdown-menu::before {
    top: -23px;
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
  font-size: 1.1rem;
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
/* Navbar fixed top with box-shadow */
nav.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1050;  /* Bootstrap এর navbar z-index এর মত */
  box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* নিচের দিকে হালকা ছায়া */
  background-color: #f8f9fa !important; /* navbar-light bg-light এর ব্যাকগ্রাউন্ড নিশ্চিত করার জন্য */
}

/* Navbar height fix এবং container প্যাডিং */
body {
  padding-top: 70px; /* navbar উচ্চতার সমান প্যাডিং, যাতে navbar page content ঢেকে না ফেলে */
}

/* Navbar logo image height control */
.logo-img {
  height: 50px; /* ইচ্ছেমত হাইট দিতে পারো */
  object-fit: contain;
}

.contact-btn {
  color: white !important;
  background-color: #F95133;
  border: none;
}

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
