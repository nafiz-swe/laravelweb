@extends('layouts.app')
@section('title', 'Portfolio Theme Preview')

@section('content')
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Portfolio Web Solution</h1>
      <p>We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.</p>
      <a href="{{ route('estimates.portfolio') }}" class="hero-btn">Project Estimates</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/portfolio-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>

{{-- Main Design user-interface/portfolio --}}
<div class="container my-5 py-4">
    <h1 class="text-center fw-bold mb-3 mt-5">
        <span class="brand-highlight">Portfolio</span> User Interface
    </h1>
    <p class="text-center text-muted mb-2 small">Discover responsive portfolio designs with multiple Laravel themes. Switch between mobile and desktop views and select your preferred user interface.</p>
    <div class="hero-animated-bar mb-5"></div>
    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3 flex-wrap">
        <button class="btn btn-outline theme-btn active" data-theme="doccura">Doccura UI</button>
        <button class="btn btn-outline theme-btn" data-theme="enginuva">Enginuva UI</button>
        <button class="btn btn-outline theme-btn" data-theme="lawverra">Lawverra UI</button>
        <button class="btn btn-outline theme-btn" data-theme="studiora">Studiora UI</button>
        <button class="btn btn-outline theme-btn" data-theme="tutorix">Tutorix UI</button>
    </div>

    <!-- 
    Doccura — Doctor + Cura (Latin: care)
    Enginuva — Engineer + Nova (new star)
    Lawverra — Law + Verra (truth)
    Studiora — Student + Aura (presence)
    Tutorix — Tutor + Matrix/X
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
                <img id="previewImage" src="{{ asset('images/user-interface/portfolio/mobile-doccura-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button onclick="window.location.href='{{ route('estimates.portfolio') }}'" class="btn btn-get-design me-2">
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
            doccura: {
                hero: "{{ asset('images/user-interface/portfolio/mobile-doccura-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/mobile-doccura-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/mobile-doccura-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/mobile-doccura-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/mobile-doccura-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/mobile-doccura-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/mobile-doccura-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/mobile-doccura-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/mobile-doccura-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/mobile-doccura-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/mobile-doccura-admin.webp') }}"
            },
            enginuva: {
                hero: "{{ asset('images/user-interface/portfolio/mobile-enginuva-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/mobile-enginuva-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/mobile-enginuva-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/mobile-enginuva-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/mobile-enginuva-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/mobile-enginuva-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/mobile-enginuva-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/mobile-enginuva-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/mobile-enginuva-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/mobile-enginuva-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/mobile-enginuva-admin.webp') }}"
            },
            lawverra: {
                hero: "{{ asset('images/user-interface/portfolio/mobile-lawverra-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/mobile-lawverra-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/mobile-lawverra-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/mobile-lawverra-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/mobile-lawverra-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/mobile-lawverra-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/mobile-lawverra-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/mobile-lawverra-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/mobile-lawverra-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/mobile-lawverra-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/mobile-lawverra-admin.webp') }}"
            },
            studiora: {
                hero: "{{ asset('images/user-interface/portfolio/mobile-studiora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/mobile-studiora-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/mobile-studiora-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/mobile-studiora-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/mobile-studiora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/mobile-studiora-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/mobile-studiora-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/mobile-studiora-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/mobile-studiora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/mobile-studiora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/mobile-studiora-admin.webp') }}"
            },
            tutorix: {
                hero: "{{ asset('images/user-interface/portfolio/mobile-tutorix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/mobile-tutorix-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/mobile-tutorix-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/mobile-tutorix-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/mobile-tutorix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/mobile-tutorix-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/mobile-tutorix-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/mobile-tutorix-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/mobile-tutorix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/mobile-tutorix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/mobile-tutorix-admin.webp') }}"
            }
        },
        desktop: {
            doccura: {
                hero: "{{ asset('images/user-interface/portfolio/desktop-doccura-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/desktop-doccura-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/desktop-doccura-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/desktop-doccura-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/desktop-doccura-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/desktop-doccura-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/desktop-doccura-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/desktop-doccura-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/desktop-doccura-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/desktop-doccura-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/desktop-doccura-admin.webp') }}"
            },
            enginuva: {
                hero: "{{ asset('images/user-interface/portfolio/desktop-enginuva-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/desktop-enginuva-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/desktop-enginuva-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/desktop-enginuva-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/desktop-enginuva-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/desktop-enginuva-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/desktop-enginuva-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/desktop-enginuva-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/desktop-enginuva-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/desktop-enginuva-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/desktop-enginuva-admin.webp') }}"
            },
            lawverra: {
                hero: "{{ asset('images/user-interface/portfolio/desktop-lawverra-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/desktop-lawverra-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/desktop-lawverra-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/desktop-lawverra-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/desktop-lawverra-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/desktop-lawverra-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/desktop-lawverra-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/desktop-lawverra-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/desktop-lawverra-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/desktop-lawverra-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/desktop-lawverra-admin.webp') }}"
            },
            studiora: {
                hero: "{{ asset('images/user-interface/portfolio/desktop-studiora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/desktop-studiora-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/desktop-studiora-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/desktop-studiora-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/desktop-studiora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/desktop-studiora-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/desktop-studiora-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/desktop-studiora-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/desktop-studiora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/desktop-studiora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/desktop-studiora-admin.webp') }}"
            },
            tutorix: {
                hero: "{{ asset('images/user-interface/portfolio/desktop-tutorix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/portfolio/desktop-tutorix-menu.webp') }}",
                home: "{{ asset('images/user-interface/portfolio/desktop-tutorix-home.webp') }}",
                product: "{{ asset('images/user-interface/portfolio/desktop-tutorix-product.webp') }}",
                footer: "{{ asset('images/user-interface/portfolio/desktop-tutorix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/portfolio/desktop-tutorix-signup.webp') }}",
                login: "{{ asset('images/user-interface/portfolio/desktop-tutorix-login.webp') }}",
                account: "{{ asset('images/user-interface/portfolio/desktop-tutorix-account.webp') }}",
                contact: "{{ asset('images/user-interface/portfolio/desktop-tutorix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/portfolio/desktop-tutorix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/portfolio/desktop-tutorix-admin.webp') }}"
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
    let currentTheme = 'doccura';
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
