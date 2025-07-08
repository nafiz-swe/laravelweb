@extends('layouts.app')
@section('title', 'E-commerce Responsive & Theme Preview')

@section('content')
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Diagnostic Center Web Solution</h1>
      <p>We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.</p>
      <a href="{{ route('estimates.diagnostic') }}" class="hero-btn">Project Estimates</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/diagnostic-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>

{{-- Main Design user-interface/ecommerce --}}
<div class="container my-5 pt-5">
    <h1 class="text-center mt-5 mb-3"><span>Diagnostic Center</span> User Interface</h1>
    <p class="text-center mb-5">Discover responsive diagnostic center designs with multiple Laravel themes. Switch between mobile and desktop views and select your preferred user interface.</p>
    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3 flex-wrap">
        <button class="btn btn-outline theme-btn active" data-theme="biovista">Biovista UI</button>
        <button class="btn btn-outline theme-btn" data-theme="diagnovera">Diagnovera UI</button>
        <button class="btn btn-outline theme-btn" data-theme="mediora">Mediora UI</button>
        <button class="btn btn-outline theme-btn" data-theme="neurovia">Neurovia UI</button>
        <button class="btn btn-outline theme-btn" data-theme="pathodex">Pathodex UI</button>
    </div>

    <!-- 
    biovista — Bio + Vision + Vista (clear lab result focus)
    Diagnovera — Diagnosis + Vera (truth & trust)
    Mediora — Medical + Aura (peaceful, premium medical vibe)
    Neurovia — Neuro + via (brain/nerve related path)
    Pathodex — Pathology + Index (comprehensive testing suite)
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
                <img id="previewImage" src="{{ asset('images/user-interface/diagnostic/mobile-biovista-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button onclick="window.location.href='{{ route('estimates.diagnostic') }}'" class="btn btn-get-design me-2">
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
            biovista: {
                hero: "{{ asset('images/user-interface/diagnostic/mobile-biovista-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/mobile-biovista-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/mobile-biovista-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/mobile-biovista-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/mobile-biovista-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/mobile-biovista-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/mobile-biovista-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/mobile-biovista-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/mobile-biovista-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/mobile-biovista-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/mobile-biovista-admin.webp') }}"
            },
            diagnovera: {
                hero: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/mobile-diagnovera-admin.webp') }}"
            },
            mediora: {
                hero: "{{ asset('images/user-interface/diagnostic/mobile-mediora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/mobile-mediora-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/mobile-mediora-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/mobile-mediora-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/mobile-mediora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/mobile-mediora-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/mobile-mediora-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/mobile-mediora-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/mobile-mediora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/mobile-mediora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/mobile-mediora-admin.webp') }}"
            },
            neurovia: {
                hero: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/mobile-neurovia-admin.webp') }}"
            },
            pathodex: {
                hero: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/mobile-pathodex-admin.webp') }}"
            }
        },
        desktop: {
            biovista: {
                hero: "{{ asset('images/user-interface/diagnostic/desktop-biovista-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/desktop-biovista-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/desktop-biovista-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/desktop-biovista-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/desktop-biovista-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/desktop-biovista-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/desktop-biovista-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/desktop-biovista-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/desktop-biovista-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/desktop-biovista-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/desktop-biovista-admin.webp') }}"
            },
            diagnovera: {
                hero: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/desktop-diagnovera-admin.webp') }}"
            },
            mediora: {
                hero: "{{ asset('images/user-interface/diagnostic/desktop-mediora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/desktop-mediora-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/desktop-mediora-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/desktop-mediora-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/desktop-mediora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/desktop-mediora-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/desktop-mediora-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/desktop-mediora-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/desktop-mediora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/desktop-mediora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/desktop-mediora-admin.webp') }}"
            },
            neurovia: {
                hero: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/desktop-neurovia-admin.webp') }}"
            },
            pathodex: {
                hero: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-hero.webp') }}",
                menu: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-menu.webp') }}",
                home: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-home.webp') }}",
                product: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-product.webp') }}",
                footer: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-footer.webp') }}",
                signup: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-signup.webp') }}",
                login: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-login.webp') }}",
                account: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-account.webp') }}",
                contact: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/diagnostic/desktop-pathodex-admin.webp') }}"
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
    let currentTheme = 'biovista';
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
