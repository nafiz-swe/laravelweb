@extends('layouts.app')
@section('title', 'School Management Theme Preview')

@section('content')
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>School Management Web Solution</h1>
      <p>We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.</p>
      <a href="{{ route('estimates.school') }}" class="hero-btn">Project Estimates</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/school-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>

{{-- Main Design user-interface/school --}}
<div class="container my-5 py-4">
    <h1 class="text-center fw-bold mb-3 mt-5">
        <span class="brand-highlight">School Management</span> User Interface
    </h1>
    <p class="text-center text-muted mb-2 small">Discover responsive school management designs with multiple Laravel themes. Switch between mobile and desktop views and select your preferred user interface.</p>
    <div class="hero-animated-bar mb-5"></div>
    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3 flex-wrap">
        <button class="btn btn-outline theme-btn active" data-theme="edunex">Edunex UI</button>
        <button class="btn btn-outline theme-btn" data-theme="eduvanta">Eduvanta UI</button>
        <button class="btn btn-outline theme-btn" data-theme="learnova">Learnova UI</button>
        <button class="btn btn-outline theme-btn" data-theme="scholix">Scholix UI</button>
        <button class="btn btn-outline theme-btn" data-theme="scholora">Scholora UI</button>
    </div>

    <!-- 
    Edunex — Education + Nex (next-gen learning)
    Eduvanta — Education + Avanta (innovative education)
    Learnova — Learn + Nova (new learning method)
    Scholix — School + Bionix (modern school system)
    Scholora — School + Aura (bright learning atmosphere)
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
                <img id="previewImage" src="{{ asset('images/user-interface/school/mobile-edunex-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button onclick="window.location.href='{{ route('estimates.school') }}'" class="btn btn-get-design me-2">
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
            edunex: {
                hero: "{{ asset('images/user-interface/school/mobile-edunex-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/mobile-edunex-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/mobile-edunex-home.webp') }}",
                product: "{{ asset('images/user-interface/school/mobile-edunex-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/mobile-edunex-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/mobile-edunex-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/mobile-edunex-login.webp') }}",
                account: "{{ asset('images/user-interface/school/mobile-edunex-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/mobile-edunex-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/mobile-edunex-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/mobile-edunex-admin.webp') }}"
            },
            eduvanta: {
                hero: "{{ asset('images/user-interface/school/mobile-eduvanta-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/mobile-eduvanta-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/mobile-eduvanta-home.webp') }}",
                product: "{{ asset('images/user-interface/school/mobile-eduvanta-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/mobile-eduvanta-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/mobile-eduvanta-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/mobile-eduvanta-login.webp') }}",
                account: "{{ asset('images/user-interface/school/mobile-eduvanta-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/mobile-eduvanta-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/mobile-eduvanta-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/mobile-eduvanta-admin.webp') }}"
            },
            learnova: {
                hero: "{{ asset('images/user-interface/school/mobile-learnova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/mobile-learnova-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/mobile-learnova-home.webp') }}",
                product: "{{ asset('images/user-interface/school/mobile-learnova-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/mobile-learnova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/mobile-learnova-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/mobile-learnova-login.webp') }}",
                account: "{{ asset('images/user-interface/school/mobile-learnova-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/mobile-learnova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/mobile-learnova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/mobile-learnova-admin.webp') }}"
            },
            scholix: {
                hero: "{{ asset('images/user-interface/school/mobile-scholix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/mobile-scholix-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/mobile-scholix-home.webp') }}",
                product: "{{ asset('images/user-interface/school/mobile-scholix-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/mobile-scholix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/mobile-scholix-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/mobile-scholix-login.webp') }}",
                account: "{{ asset('images/user-interface/school/mobile-scholix-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/mobile-scholix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/mobile-scholix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/mobile-scholix-admin.webp') }}"
            },
            scholora: {
                hero: "{{ asset('images/user-interface/school/mobile-scholora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/mobile-scholora-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/mobile-scholora-home.webp') }}",
                product: "{{ asset('images/user-interface/school/mobile-scholora-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/mobile-scholora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/mobile-scholora-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/mobile-scholora-login.webp') }}",
                account: "{{ asset('images/user-interface/school/mobile-scholora-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/mobile-scholora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/mobile-scholora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/mobile-scholora-admin.webp') }}"
            }
        },
        desktop: {
            edunex: {
                hero: "{{ asset('images/user-interface/school/desktop-edunex-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/desktop-edunex-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/desktop-edunex-home.webp') }}",
                product: "{{ asset('images/user-interface/school/desktop-edunex-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/desktop-edunex-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/desktop-edunex-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/desktop-edunex-login.webp') }}",
                account: "{{ asset('images/user-interface/school/desktop-edunex-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/desktop-edunex-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/desktop-edunex-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/desktop-edunex-admin.webp') }}"
            },
            eduvanta: {
                hero: "{{ asset('images/user-interface/school/desktop-eduvanta-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/desktop-eduvanta-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/desktop-eduvanta-home.webp') }}",
                product: "{{ asset('images/user-interface/school/desktop-eduvanta-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/desktop-eduvanta-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/desktop-eduvanta-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/desktop-eduvanta-login.webp') }}",
                account: "{{ asset('images/user-interface/school/desktop-eduvanta-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/desktop-eduvanta-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/desktop-eduvanta-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/desktop-eduvanta-admin.webp') }}"
            },
            learnova: {
                hero: "{{ asset('images/user-interface/school/desktop-learnova-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/desktop-learnova-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/desktop-learnova-home.webp') }}",
                product: "{{ asset('images/user-interface/school/desktop-learnova-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/desktop-learnova-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/desktop-learnova-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/desktop-learnova-login.webp') }}",
                account: "{{ asset('images/user-interface/school/desktop-learnova-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/desktop-learnova-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/desktop-learnova-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/desktop-learnova-admin.webp') }}"
            },
            scholix: {
                hero: "{{ asset('images/user-interface/school/desktop-scholix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/desktop-scholix-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/desktop-scholix-home.webp') }}",
                product: "{{ asset('images/user-interface/school/desktop-scholix-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/desktop-scholix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/desktop-scholix-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/desktop-scholix-login.webp') }}",
                account: "{{ asset('images/user-interface/school/desktop-scholix-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/desktop-scholix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/desktop-scholix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/desktop-scholix-admin.webp') }}"
            },
            scholora: {
                hero: "{{ asset('images/user-interface/school/desktop-scholora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/school/desktop-scholora-menu.webp') }}",
                home: "{{ asset('images/user-interface/school/desktop-scholora-home.webp') }}",
                product: "{{ asset('images/user-interface/school/desktop-scholora-product.webp') }}",
                footer: "{{ asset('images/user-interface/school/desktop-scholora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/school/desktop-scholora-signup.webp') }}",
                login: "{{ asset('images/user-interface/school/desktop-scholora-login.webp') }}",
                account: "{{ asset('images/user-interface/school/desktop-scholora-account.webp') }}",
                contact: "{{ asset('images/user-interface/school/desktop-scholora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/school/desktop-scholora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/school/desktop-scholora-admin.webp') }}"
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
    let currentTheme = 'edunex';
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
