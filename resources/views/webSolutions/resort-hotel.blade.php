@extends('layouts.app')
@section('title', 'Resort/Hotel Theme Preview')

@section('content')
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Resort/Hotel Web Solution</h1>
      <p>We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.</p>
      <a href="{{ route('estimates.resort') }}" class="hero-btn">Project Estimates</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/resort-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>

{{-- Main Design user-interface/resort --}}
<div class="container my-5 pt-5">
    <h1 class="text-center mt-5 mb-3"><span>Resort/Hotel</span> User Interface</h1>
    <p class="text-center mb-5">Discover responsive resort/hotel designs with multiple Laravel themes. Switch between mobile and desktop views and select your preferred user interface.</p>
    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3 flex-wrap">
        <button class="btn btn-outline theme-btn active" data-theme="havenox">Havenox UI</button>
        <button class="btn btn-outline theme-btn" data-theme="luxavera">Luxavera UI</button>
        <button class="btn btn-outline theme-btn" data-theme="restova">Restova UI</button>
        <button class="btn btn-outline theme-btn" data-theme="seanova">Seanova UI</button>
        <button class="btn btn-outline theme-btn" data-theme="suntherra">Suntherra UI</button>
    </div>

    <!-- 
    Havenox — Haven + Nox (night / calm)
    Luxavera — Luxury + Rivera (seaside elegance)
    Restova — Rest + Nova (new kind of relaxation)
    Seanova — Sea + Nova (Oceanfront Resort)
    Suntherra — Sun + Terra (Sun-kissed Beach Resort)
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
                <img id="previewImage" src="{{ asset('images/user-interface/resort/mobile-havenox-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button onclick="window.location.href='{{ route('estimates.resort') }}'" class="btn btn-get-design me-2">
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
            havenox: {
                hero: "{{ asset('images/user-interface/resort/mobile-havenox-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/mobile-havenox-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/mobile-havenox-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/mobile-havenox-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/mobile-havenox-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/mobile-havenox-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/mobile-havenox-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/mobile-havenox-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/mobile-havenox-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/mobile-havenox-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/mobile-havenox-admin.webp') }}"
            },
            luxavera: {
                hero: "{{ asset('images/user-interface/resort/mobile-luxavera-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/mobile-luxavera-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/mobile-luxavera-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/mobile-luxavera-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/mobile-luxavera-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/mobile-luxavera-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/mobile-luxavera-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/mobile-luxavera-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/mobile-luxavera-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/mobile-luxavera-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/mobile-luxavera-admin.webp') }}"
            },
            restova: {
                hero: "{{ asset('images/user-interface/resort/mobile-restova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/mobile-restova-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/mobile-restova-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/mobile-restova-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/mobile-restova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/mobile-restova-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/mobile-restova-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/mobile-restova-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/mobile-restova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/mobile-restova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/mobile-restova-admin.webp') }}"
            },
            seanova: {
                hero: "{{ asset('images/user-interface/resort/mobile-seanova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/mobile-seanova-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/mobile-seanova-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/mobile-seanova-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/mobile-seanova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/mobile-seanova-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/mobile-seanova-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/mobile-seanova-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/mobile-seanova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/mobile-seanova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/mobile-seanova-admin.webp') }}"
            },
            suntherra: {
                hero: "{{ asset('images/user-interface/resort/mobile-suntherra-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/mobile-suntherra-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/mobile-suntherra-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/mobile-suntherra-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/mobile-suntherra-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/mobile-suntherra-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/mobile-suntherra-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/mobile-suntherra-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/mobile-suntherra-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/mobile-suntherra-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/mobile-suntherra-admin.webp') }}"
            }
        },
        desktop: {
            havenox: {
                hero: "{{ asset('images/user-interface/resort/desktop-havenox-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/desktop-havenox-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/desktop-havenox-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/desktop-havenox-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/desktop-havenox-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/desktop-havenox-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/desktop-havenox-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/desktop-havenox-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/desktop-havenox-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/desktop-havenox-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/desktop-havenox-admin.webp') }}"
            },
            luxavera: {
                hero: "{{ asset('images/user-interface/resort/desktop-luxavera-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/desktop-luxavera-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/desktop-luxavera-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/desktop-luxavera-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/desktop-luxavera-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/desktop-luxavera-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/desktop-luxavera-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/desktop-luxavera-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/desktop-luxavera-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/desktop-luxavera-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/desktop-luxavera-admin.webp') }}"
            },
            restova: {
                hero: "{{ asset('images/user-interface/resort/desktop-restova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/desktop-restova-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/desktop-restova-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/desktop-restova-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/desktop-restova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/desktop-restova-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/desktop-restova-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/desktop-restova-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/desktop-restova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/desktop-restova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/desktop-restova-admin.webp') }}"
            },
            seanova: {
                hero: "{{ asset('images/user-interface/resort/desktop-seanova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/desktop-seanova-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/desktop-seanova-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/desktop-seanova-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/desktop-seanova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/desktop-seanova-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/desktop-seanova-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/desktop-seanova-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/desktop-seanova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/desktop-seanova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/desktop-seanova-admin.webp') }}"
            },
            suntherra: {
                hero: "{{ asset('images/user-interface/resort/desktop-suntherra-hero.webp') }}",
                menu: "{{ asset('images/user-interface/resort/desktop-suntherra-menu.webp') }}",
                home: "{{ asset('images/user-interface/resort/desktop-suntherra-home.webp') }}",
                product: "{{ asset('images/user-interface/resort/desktop-suntherra-product.webp') }}",
                footer: "{{ asset('images/user-interface/resort/desktop-suntherra-footer.webp') }}",
                signup: "{{ asset('images/user-interface/resort/desktop-suntherra-signup.webp') }}",
                login: "{{ asset('images/user-interface/resort/desktop-suntherra-login.webp') }}",
                account: "{{ asset('images/user-interface/resort/desktop-suntherra-account.webp') }}",
                contact: "{{ asset('images/user-interface/resort/desktop-suntherra-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/resort/desktop-suntherra-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/resort/desktop-suntherra-admin.webp') }}"
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
    let currentTheme = 'havenox';
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
