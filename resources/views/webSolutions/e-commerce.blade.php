@extends('layouts.app')

@section('title', 'E-commerce Responsive & Theme Preview')

@section('content')
<div class="container my-5">
    <h1 class="mb-5 text-center">E-commerce Website Design Showcase</h1>

    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3">
        <button class="btn btn-outline theme-btn active" data-theme="flower">Flower Theme</button>
        <button class="btn btn-outline theme-btn" data-theme="ocean">Ocean Theme</button>
        <button class="btn btn-outline theme-btn" data-theme="royal">Royal Theme</button>
    </div>

    <div class="row">
        {{-- Left Side: Page Sections --}}
        <div class="col-md-3">
            <div id="pageSections" class="list-group">
                {{-- Page buttons dynamically insert হবে --}}
            </div>
        </div>

        {{-- Right Side: Image Preview --}}
        <div class="col-md-9">
            <div class="text-center">
                <img id="previewImage" src="{{ asset('images/showcase/mobile-flower-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button class="btn btn-get-design me-2">Get This Design</button>
                    <button class="btn btn-view-details" id="viewDetailsBtn">View Details</button>
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
        background-color: #62748e; /* Matching darker hover shade */
        color: #fff;
        border: 1px solid #62748e;
    }

    /* Get This Design Button | #getDesignBtn.active { */
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

    /* Page Sections Button Active */
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
            flower: {
                hero: "{{ asset('images/showcase/mobile-flower-hero.webp') }}",
                menu: "{{ asset('images/showcase/mobile-flower-menu.webp') }}",
                home: "{{ asset('images/showcase/mobile-flower-home.webp') }}",
                product: "{{ asset('images/showcase/mobile-flower-product.webp') }}",
                footer: "{{ asset('images/showcase/mobile-flower-footer.webp') }}",
                signup: "{{ asset('images/showcase/mobile-flower-signup.webp') }}",
                login: "{{ asset('images/showcase/mobile-flower-login.webp') }}",
                account: "{{ asset('images/showcase/mobile-flower-account.webp') }}",
                contact: "{{ asset('images/showcase/mobile-flower-contact.webp') }}",
                checkout: "{{ asset('images/showcase/mobile-flower-checkout.webp') }}",
                admin: "{{ asset('images/showcase/mobile-flower-admin.webp') }}"
            },
            ocean: {
                hero: "{{ asset('images/showcase/mobile-ocean-hero.webp') }}",
                menu: "{{ asset('images/showcase/mobile-ocean-menu.webp') }}",
                home: "{{ asset('images/showcase/mobile-ocean-home.webp') }}",
                product: "{{ asset('images/showcase/mobile-ocean-product.webp') }}",
                footer: "{{ asset('images/showcase/mobile-ocean-footer.webp') }}",
                signup: "{{ asset('images/showcase/mobile-ocean-signup.webp') }}",
                login: "{{ asset('images/showcase/mobile-ocean-login.webp') }}",
                account: "{{ asset('images/showcase/mobile-ocean-account.webp') }}",
                contact: "{{ asset('images/showcase/mobile-ocean-contact.webp') }}",
                checkout: "{{ asset('images/showcase/mobile-ocean-checkout.webp') }}",
                admin: "{{ asset('images/showcase/mobile-ocean-admin.webp') }}"
            },
            royal: {
                hero: "{{ asset('images/showcase/mobile-royal-hero.webp') }}",
                menu: "{{ asset('images/showcase/mobile-royal-menu.webp') }}",
                home: "{{ asset('images/showcase/mobile-royal-home.webp') }}",
                product: "{{ asset('images/showcase/mobile-royal-product.webp') }}",
                footer: "{{ asset('images/showcase/mobile-royal-footer.webp') }}",
                signup: "{{ asset('images/showcase/mobile-royal-signup.webp') }}",
                login: "{{ asset('images/showcase/mobile-royal-login.webp') }}",
                account: "{{ asset('images/showcase/mobile-royal-account.webp') }}",
                contact: "{{ asset('images/showcase/mobile-royal-contact.webp') }}",
                checkout: "{{ asset('images/showcase/mobile-royal-checkout.webp') }}",
                admin: "{{ asset('images/showcase/mobile-royal-admin.webp') }}"
            }
        },
        desktop: {
            flower: {
                hero: "{{ asset('images/showcase/desktop-flower-hero.webp') }}",
                menu: "{{ asset('images/showcase/desktop-flower-menu.webp') }}",
                home: "{{ asset('images/showcase/desktop-flower-home.webp') }}",
                product: "{{ asset('images/showcase/desktop-flower-product.webp') }}",
                footer: "{{ asset('images/showcase/desktop-flower-footer.webp') }}",
                signup: "{{ asset('images/showcase/desktop-flower-signup.webp') }}",
                login: "{{ asset('images/showcase/desktop-flower-login.webp') }}",
                account: "{{ asset('images/showcase/desktop-flower-account.webp') }}",
                contact: "{{ asset('images/showcase/desktop-flower-contact.webp') }}",
                checkout: "{{ asset('images/showcase/desktop-flower-checkout.webp') }}",
                admin: "{{ asset('images/showcase/desktop-flower-admin.webp') }}"
            },
            ocean: {
                hero: "{{ asset('images/showcase/desktop-ocean-hero.webp') }}",
                menu: "{{ asset('images/showcase/desktop-ocean-menu.webp') }}",
                home: "{{ asset('images/showcase/desktop-ocean-home.webp') }}",
                product: "{{ asset('images/showcase/desktop-ocean-product.webp') }}",
                footer: "{{ asset('images/showcase/desktop-ocean-footer.webp') }}",
                signup: "{{ asset('images/showcase/desktop-ocean-signup.webp') }}",
                login: "{{ asset('images/showcase/desktop-ocean-login.webp') }}",
                account: "{{ asset('images/showcase/desktop-ocean-account.webp') }}",
                contact: "{{ asset('images/showcase/desktop-ocean-contact.webp') }}",
                checkout: "{{ asset('images/showcase/desktop-ocean-checkout.webp') }}",
                admin: "{{ asset('images/showcase/desktop-ocean-admin.webp') }}"
            },
            royal: {
                hero: "{{ asset('images/showcase/desktop-royal-hero.webp') }}",
                menu: "{{ asset('images/showcase/desktop-royal-menu.webp') }}",
                home: "{{ asset('images/showcase/desktop-royal-home.webp') }}",
                product: "{{ asset('images/showcase/desktop-royal-product.webp') }}",
                footer: "{{ asset('images/showcase/desktop-royal-footer.webp') }}",
                signup: "{{ asset('images/showcase/desktop-royal-signup.webp') }}",
                login: "{{ asset('images/showcase/desktop-royal-login.webp') }}",
                account: "{{ asset('images/showcase/desktop-royal-account.webp') }}",
                contact: "{{ asset('images/showcase/desktop-royal-contact.webp') }}",
                checkout: "{{ asset('images/showcase/desktop-royal-checkout.webp') }}",
                admin: "{{ asset('images/showcase/desktop-royal-admin.webp') }}"
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
        footer: 'Footer Section',
        signup: 'Sign Up',
        login: 'Login',
        account: 'My Account',
        contact: 'Contact Us',
        checkout: 'Checkout & Payment',
        admin: 'Admin Panel'
    };

    let currentCategory = 'mobile';
    let currentTheme = 'flower';
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
