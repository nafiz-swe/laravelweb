@extends('layouts.app')
@section('title', 'Tution Center Theme Preview')

@section('content')
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Tution Center Web Solution</h1>
      <p>We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.</p>
      <a href="{{ route('estimates.tution') }}" class="hero-btn">Project Estimates</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/tution-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>

{{-- Main Design user-interface/tution --}}
<div class="container my-5 py-4">
    <h1 class="text-center fw-bold mb-3 mt-5">
        <span class="brand-highlight">Tution Center</span> User Interface
    </h1>
    <p class="text-center text-muted mb-2 small">Discover responsive tution center designs with multiple Laravel themes. Switch between mobile and desktop views and select your preferred user interface.</p>
    <div class="hero-animated-bar mb-5"></div>
    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3 flex-wrap">
        <button class="btn btn-outline theme-btn active" data-theme="hometora">Hometora UI</button>
        <button class="btn btn-outline theme-btn" data-theme="tutorella">Tutorella UI</button>
        <button class="btn btn-outline theme-btn" data-theme="tutorflare">Tutorflare UI</button>
        <button class="btn btn-outline theme-btn" data-theme="tutornova">Tutornova UI</button>
        <button class="btn btn-outline theme-btn" data-theme="tutorvanta">Tutorvanta UI</button>
    </div>

    <!-- 
    Hometora — Home + Aura (warm home tutor)
    Tutorella — Tutor + Ella (graceful tutor)
    Tutorflare — Tutor + Flare (bright tutoring)
    Tutornova — Tutor + Nova (new tutor system)
    Tutorvanta — Tutor + Avanta (advanced tutor)
    -->
 
    <div class="row">
        {{-- Left Side: Page Sections --}}
        <div class="col-md-3 mobile-sidebar">
            <h4 class="mb-3">Page Sections</h4>
            <p class="text-muted">Click to view different sections of the website.</p>
            <div id="pageSections" class="list-group">
                {{-- Page buttons dynamically insert হবে --}}
            </div>
        </div>

        {{-- Right Side: Image Preview --}}
        <div class="col-md-9">
            <div class="text-center">
                <img id="previewImage" src="{{ asset('images/user-interface/tution/mobile-hometora-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button onclick="window.location.href='{{ route('estimates.tution') }}'" class="btn btn-get-design me-2">
                        Delivery & Cost Info
                    </button>
                    <button class="btn btn-view-details" id="viewDetailsBtn">Page Details</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Popup --}}
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="detailsContent">
                Loading details...
            </div>
        </div>
    </div>
</div>

<style>
span {
    color: #0092b8;
}
/* Responsive Active Button */
.category-btn {
    border: 1px solid #0092b8;
}
.category-btn.active {
    background-color: #0092b8;
    color: #fff;
    border-color: #0092b8;
}
.category-btn:hover {
    background-color: #00b8db;
    color: #fff;
    border-color: #00b8db;
}
/* Theme Active Button */
.theme-btn {
    border: 1px solid #45556c; 
}
.theme-btn.active {
    background-color: #45556c;
    color: #fff;
    border: 1px solid #45556c;
}
.theme-btn:hover {
    background-color: #62748e;
    color: #fff;
    border: 1px solid #62748e;
}
/* Get This Design Button */
.btn-get-design  {
    background-color: #0092b8;
    border: 1px solid #0092b8;
    color: #fff;
}
.btn-get-design:hover {
    background-color: #00b8db;
    border: 1px solid #00b8db;
    color: #fff;
}
/* View Details Button */
.btn-view-details  {
    background-color: #45556c;
    border: 1px solid #45556c;
    color: #fff;
}
.btn-view-details:hover {
    background-color: #62748e;
    border: 1px solid #62748e;
    color: #fff;
}
/* Page Sections Active */
#pageSections .list-group-item.active {
    background-color: #0092b8;
    color: #fff;
    border-color: #0092b8;
}
#pageSections .list-group-item:hover {
    background-color: #00b8db;
    color: #fff;
    border-color: #00b8db;
}
</style>


{{-- JavaScript --}}
<script>
    const images = {
        mobile: {
            hometora: {
                hero: "{{ asset('images/user-interface/tution/mobile-hometora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/mobile-hometora-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/mobile-hometora-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/mobile-hometora-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/mobile-hometora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/mobile-hometora-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/mobile-hometora-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/mobile-hometora-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/mobile-hometora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/mobile-hometora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/mobile-hometora-admin.webp') }}"
            },
            tutorella: {
                hero: "{{ asset('images/user-interface/tution/mobile-tutorella-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/mobile-tutorella-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/mobile-tutorella-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/mobile-tutorella-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/mobile-tutorella-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/mobile-tutorella-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/mobile-tutorella-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/mobile-tutorella-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/mobile-tutorella-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/mobile-tutorella-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/mobile-tutorella-admin.webp') }}"
            },
            tutorflare: {
                hero: "{{ asset('images/user-interface/tution/mobile-tutorflare-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/mobile-tutorflare-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/mobile-tutorflare-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/mobile-tutorflare-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/mobile-tutorflare-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/mobile-tutorflare-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/mobile-tutorflare-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/mobile-tutorflare-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/mobile-tutorflare-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/mobile-tutorflare-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/mobile-tutorflare-admin.webp') }}"
            },
            tutornova: {
                hero: "{{ asset('images/user-interface/tution/mobile-tutornova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/mobile-tutornova-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/mobile-tutornova-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/mobile-tutornova-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/mobile-tutornova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/mobile-tutornova-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/mobile-tutornova-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/mobile-tutornova-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/mobile-tutornova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/mobile-tutornova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/mobile-tutornova-admin.webp') }}"
            },
            tutorvanta: {
                hero: "{{ asset('images/user-interface/tution/mobile-tutorvanta-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/mobile-tutorvanta-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/mobile-tutorvanta-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/mobile-tutorvanta-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/mobile-tutorvanta-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/mobile-tutorvanta-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/mobile-tutorvanta-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/mobile-tutorvanta-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/mobile-tutorvanta-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/mobile-tutorvanta-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/mobile-tutorvanta-admin.webp') }}"
            }
        },
        desktop: {
            hometora: {
                hero: "{{ asset('images/user-interface/tution/desktop-hometora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/desktop-hometora-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/desktop-hometora-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/desktop-hometora-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/desktop-hometora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/desktop-hometora-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/desktop-hometora-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/desktop-hometora-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/desktop-hometora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/desktop-hometora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/desktop-hometora-admin.webp') }}"
            },
            tutorella: {
                hero: "{{ asset('images/user-interface/tution/desktop-tutorella-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/desktop-tutorella-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/desktop-tutorella-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/desktop-tutorella-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/desktop-tutorella-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/desktop-tutorella-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/desktop-tutorella-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/desktop-tutorella-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/desktop-tutorella-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/desktop-tutorella-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/desktop-tutorella-admin.webp') }}"
            },
            tutorflare: {
                hero: "{{ asset('images/user-interface/tution/desktop-tutorflare-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/desktop-tutorflare-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/desktop-tutorflare-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/desktop-tutorflare-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/desktop-tutorflare-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/desktop-tutorflare-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/desktop-tutorflare-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/desktop-tutorflare-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/desktop-tutorflare-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/desktop-tutorflare-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/desktop-tutorflare-admin.webp') }}"
            },
            tutornova: {
                hero: "{{ asset('images/user-interface/tution/desktop-tutornova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/desktop-tutornova-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/desktop-tutornova-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/desktop-tutornova-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/desktop-tutornova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/desktop-tutornova-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/desktop-tutornova-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/desktop-tutornova-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/desktop-tutornova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/desktop-tutornova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/desktop-tutornova-admin.webp') }}"
            },
            tutorvanta: {
                hero: "{{ asset('images/user-interface/tution/desktop-tutorvanta-hero.webp') }}",
                menu: "{{ asset('images/user-interface/tution/desktop-tutorvanta-menu.webp') }}",
                home: "{{ asset('images/user-interface/tution/desktop-tutorvanta-home.webp') }}",
                product: "{{ asset('images/user-interface/tution/desktop-tutorvanta-product.webp') }}",
                footer: "{{ asset('images/user-interface/tution/desktop-tutorvanta-footer.webp') }}",
                signup: "{{ asset('images/user-interface/tution/desktop-tutorvanta-signup.webp') }}",
                login: "{{ asset('images/user-interface/tution/desktop-tutorvanta-login.webp') }}",
                account: "{{ asset('images/user-interface/tution/desktop-tutorvanta-account.webp') }}",
                contact: "{{ asset('images/user-interface/tution/desktop-tutorvanta-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/tution/desktop-tutorvanta-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/tution/desktop-tutorvanta-admin.webp') }}"
            }
        }
    };


     const detailsText = {
        hero: "This section shows your website's Hero Banner and Navigation area.",
        menu: "Main menu & categories designed for easy navigation.",
        home: "Homepage highlights featured products and content blocks.",
        product: "Detailed product page with images, description & buy options.",
        footer: "Website footer with contact, policies, and quick links.",
        signup: "User Sign-Up page with basic information form.",
        login: "Secure login system for returning customers.",
        account: "User Dashboard with account details and order history.",
        contact: "Contact form for customer support and inquiries.",
        checkout: "Secure checkout process with payment gateway integration.",
        admin: "Admin Panel with complete website control & management."
    };

    const pages = {
        hero: 'Hero & Navigation',
        menu: 'Menu & Categories',
        home: 'Homepage Highlights',
        product: 'Product Details',
        checkout: 'Checkout & Payment',
        signup: 'Sign Up',
        login: 'Login',
        account: 'My Account',
        contact: 'Contact Us',
        footer: 'Footer Section',
        admin: 'Admin Panel'
    };

    let currentCategory = 'mobile';
    let currentTheme = 'hometora';
    let currentPage = 'hero';

    const pageSectionsDiv = document.getElementById('pageSections');
    const previewImage = document.getElementById('previewImage');
    const categoryButtons = document.querySelectorAll('.category-btn');
    const themeButtons = document.querySelectorAll('.theme-btn');
    const viewDetailsBtn = document.getElementById('viewDetailsBtn');
    const detailsContent = document.getElementById('detailsContent');

    function loadPageButtons() {
        pageSectionsDiv.innerHTML = '';
        for (const [key, label] of Object.entries(pages)) {
            const btn = document.createElement('button');
            btn.classList.add('list-group-item', 'list-group-item-action');
            btn.textContent = label;
            btn.dataset.page = key;
            if (key === currentPage) btn.classList.add('active');
            btn.addEventListener('click', () => {
                currentPage = key;
                updateActivePage();
                updateImage();
            });
            pageSectionsDiv.appendChild(btn);
        }
    }

    function updateActivePage() {
        [...pageSectionsDiv.children].forEach(btn => {
            btn.classList.toggle('active', btn.dataset.page === currentPage);
        });
    }

    function updateImage() {
        previewImage.src = images[currentCategory][currentTheme][currentPage];
        previewImage.alt = `${currentCategory} - ${currentTheme} - ${pages[currentPage]}`;
    }

    categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            categoryButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentCategory = btn.dataset.category;
            currentPage = 'hero';
            loadPageButtons();
            updateImage();
        });
    });

    themeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            themeButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentTheme = btn.dataset.theme;
            currentPage = 'hero';
            loadPageButtons();
            updateImage();
        });
    });

    viewDetailsBtn.addEventListener('click', () => {
        // Modal Title এ currentTheme এর নাম দেখাবে (প্রথম অক্ষর বড় করে)
        const themeNameCapitalized = currentTheme.charAt(0).toUpperCase() + currentTheme.slice(1);
        document.getElementById('detailsModalLabel').textContent = `${themeNameCapitalized} Theme Details`;

        detailsContent.innerHTML = `<p><strong>${pages[currentPage]}:</strong> ${detailsText[currentPage]}</p>`;
        const modal = new bootstrap.Modal(document.getElementById('detailsModal'));
        modal.show();
    });

    // Init
    loadPageButtons();
    updateImage();
</script>
@endsection
