<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
  <div class="container">
    
    <!-- Logo -->
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('images/fouraxiz-logo.webp') }}" alt="Fouraxiz Logo" class="logo-img">
    </a>
    <!-- Toggle (Hamburger) Button -->
    <button class="navbar-toggler open-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Close Button -->
    <button class="navbar-toggler close-toggler d-none" type="button">
      <span style="font-size: 2rem;">&times;</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <!-- Only Mobile Social Menu -->
      <ul class="navbar-nav ms-auto flex-column align-items-end top-contact-social-mobile">
        <li class="nav-item d-flex">
          <a href="https://facebook.com" target="_blank" class="nav-link text-dark" style="padding: 0.5px;"><i class="bi bi-facebook" style="color: #1877F2;"></i></a>
          <a href="https://www.linkedin.com/in/nafiz-swe/" target="_blank" class="nav-link text-dark" style="padding: 0.5px;"><i class="bi bi-linkedin" style="color: #0077B5;"></i></a>
          <a href="https://twitter.com" target="_blank" class="nav-link text-dark" style="padding: 0.5px;"><i class="bi bi-twitter" style="color: #1DA1F2;"></i></a>
        </li>
        <li class="nav-item text-muted small">
          <a href="tel:+1 737 226 404" class="text-muted text-decoration-none d-flex align-items-center position-relative">
            <span class="wave-ring"></span>
            <i class="bi bi-telephone-fill custom-phone-icon me-2"></i>
            +1 1737 226 404
          </a>
        </li>
      </ul>

      <!-- Main Menu -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>

        <!-- Services -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="#">Augmented Reality App Development</a></li>
            <li><a class="dropdown-item" href="#">Artificial Intelligence Services</a></li>
            <li><a class="dropdown-item" href="#">Blockchain Development Services</a></li>
            <li><a class="dropdown-item" href="#">Cloud Application Development Services</a></li>
            <li><a class="dropdown-item" href="#">Cyber Security Services</a></li>
            <li><a class="dropdown-item" href="#">Domain & Hosting Services</a></li>
            <li><a class="dropdown-item" href="#">Machine Learning Services</a></li>
            <li><a class="dropdown-item" href="#">Mobile Application Development</a></li>
            <li><a class="dropdown-item" href="#">Product Design Services</a></li>
            <li><a class="dropdown-item" href="#">Quality Assurance Services</a></li>
            <li><a class="dropdown-item" href="#">SaaS Development Services</a></li>
            <li><a class="dropdown-item" href="#">Virtual Reality App Development</a></li>
            <li><a class="dropdown-item" href="#">Web Development Services</a></li>
          </ul>
        </li>

        <!-- Solutions -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Solutions
          </a>
          <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
            <li><a class="dropdown-item" href="#">AI Photo and Video App Development</a></li>
            <li><a class="dropdown-item" href="#">E-learning Software Development Services</a></li>
            <li><a class="dropdown-item" href="#">Financial Software Solutions</a></li>
            <li><a class="dropdown-item" href="#">Fitness Software Solutions</a></li>
            <li><a class="dropdown-item" href="#">Healthcare Software Solutions</a></li>   
            <li><a class="dropdown-item" href="#">Marketplace Development Services</a></li>
            <li><a class="dropdown-item" href="#">Product Design Solution</a></li>
            <li><a class="dropdown-item" href="#">Real Estate Solutions</a></li>
            <li><a class="dropdown-item" href="#">Recruiting Solutions Development</a></li>
            <li><a class="dropdown-item" href="#">Smart Contract Development Solutions</a></li>
            <li><a class="dropdown-item" href="#">Social Media Solutions</a></li>
            <li><a class="dropdown-item" href="#">Travel Software Solutions</a></li>
          </ul>
        </li>

        <!-- Technologies -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="techDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Technologies
          </a>
          <ul class="dropdown-menu" aria-labelledby="techDropdown">
            <li>
              <a class="dropdown-item" href="#">CMS Development</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Joomla Development</a></li>
                <li><a class="dropdown-item" href="#">Wix Development</a></li>
                <li><a class="dropdown-item" href="#">WordPress Development</a></li>
                <li><a class="dropdown-item" href="#">Shopify Development</a></li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="#">C++ Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Boost Development Services</a></li>
                <li><a class="dropdown-item" href="#">Qt Development Services</a></li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="#">.NET Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">ASP.NET Core Development Services</a></li>
                <li><a class="dropdown-item" href="#">Blazor Development Services</a></li>
                <li><a class="dropdown-item" href="#">Entity Framework Development Services</a></li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="#">Java Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Hibernate Development Services</a></li>
                <li><a class="dropdown-item" href="#">Spring Development Services</a></li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="#">JavaScript Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Express.js Development Services</a></li>
                <li><a class="dropdown-item" href="#">Node.js Development Services</a></li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="#">Kotlin Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Ktor Development Services</a></li>
                <li><a class="dropdown-item" href="#">Spring Development Services</a></li>
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
              <a class="dropdown-item" href="#">Python Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Django Development Services</a></li>
                <li><a class="dropdown-item" href="#">FastAPI Development Services</a></li>
                <li><a class="dropdown-item" href="#">Flask Development Services</a></li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="#">React Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Gatsby Development Services</a></li>
                <li><a class="dropdown-item" href="#">Next.js Development Services</a></li>
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
              <a class="dropdown-item" href="#">Vue.js Development Services</a>
              <ul class="submenu">
                <li><a class="dropdown-item" href="#">Nuxt.js Development Services</a></li>
                <li><a class="dropdown-item" href="#">Quasar Development Services</a></li>
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
            <a class="btn contact-btn ms-3" href="{{ route('contact.form') }}">Contact Us</a>
        </li>
      </ul>

      <!-- Only Monitor View Social Menu -->
      <ul class="navbar-nav top-contact-social">
        <li class="nav-item d-flex">
          <a href="https://facebook.com" target="_blank" class="nav-link" style="padding-left: 30px;"><i class="bi bi-facebook" style="color: #1877F2;"></i></a>
          <a href="https://www.linkedin.com/in/nafiz-swe/" target="_blank" class="nav-link" style="padding-left: 0;"><i class="bi bi-linkedin" style="color: #0077B5;"></i></a>
          <a href="https://twitter.com" target="_blank" class="nav-link" style="padding-left: 0;"><i class="bi bi-twitter" style="color: #1DA1F2;"></i></a>
        </li>
        <li class="nav-item text-muted small">
          <a href="tel:+1 737 226 404" class="text-muted text-decoration-none d-flex align-items-center position-relative">
            <span class="wave-ring"></span>
            <i class="bi bi-telephone-fill custom-phone-icon me-2"></i>
            +1 1737 226 404
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  const openToggler = document.querySelector('.open-toggler');
  const closeToggler = document.querySelector('.close-toggler');
  const navCollapse = document.getElementById('navbarNavDropdown');
  openToggler.addEventListener('click', () => {
    navCollapse.classList.add('show'); // Show menu
    openToggler.classList.add('d-none'); // Hide hamburger
    closeToggler.classList.remove('d-none'); // Show close
  });
  closeToggler.addEventListener('click', () => {
    navCollapse.classList.remove('show'); // Hide menu
    closeToggler.classList.add('d-none'); // Hide close
    openToggler.classList.remove('d-none'); // Show hamburger
  });


  // For Dropdown Items
  document.addEventListener('DOMContentLoaded', function() {
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(function(item) {
      const submenu = item.nextElementSibling;
      if (submenu && submenu.classList.contains('submenu')) {
        item.style.cursor = 'pointer';
        item.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelectorAll('ul.submenu.show-submenu').forEach(function(openMenu) {
            if (openMenu !== submenu) {
              openMenu.classList.remove('show-submenu');
            }
          });
          submenu.classList.toggle('show-submenu');
        });
      }
    });
  });
</script>