@extends('layouts.app')
@section('title', 'Restaurant/Cafe Theme Preview')

@section('content')
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text-box">
      <h1>Restaurant/Cafe Web Solution</h1>
      <p>We develop secure and modern Web Applications using Laravel & PHP. The design is ready, and we will customize everything exactly as per your choice to suit your local business needs.</p>
      <a href="{{ route('estimates.restaurant') }}" class="hero-btn">Project Estimates</a>
    </div>
    <div class="hero-image-box">
      <img src="{{ asset('images/banner/restaurant-hero.webp') }}" alt="Hero Banner" class="hero-img">
    </div>
  </div>
</section>

{{-- Main Design user-interface/restaurant --}}
<div class="container my-5 pt-5">
    <h1 class="text-center mt-5 mb-3"><span>Restaurant/Cafe</span> User Interface</h1>
    <p class="text-center mb-5">Discover responsive restaurant/cafe designs with multiple Laravel themes. Switch between mobile and desktop views and select your preferred user interface.</p>
    {{-- Responsive Selection --}}
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button class="btn btn-outline category-btn active" data-category="mobile">Mobile Responsive</button>
        <button class="btn btn-outline category-btn" data-category="desktop">PC / Laptop Responsive</button>
    </div>

    {{-- Theme Selection --}}
    <div class="d-flex justify-content-center mb-5 gap-3 flex-wrap">
        <button class="btn btn-outline theme-btn active" data-theme="cafedra">Cafedra UI</button>
        <button class="btn btn-outline theme-btn" data-theme="cafionix">Cafionix UI</button>
        <button class="btn btn-outline theme-btn" data-theme="grillora">Grillora UI</button>
        <button class="btn btn-outline theme-btn" data-theme="mealvix">Mealvix UI</button>
        <button class="btn btn-outline theme-btn" data-theme="restolina">Restolina UI</button>
    </div>

    <!-- 
    Cafedra — Cafe + Medra (meditative coffee space)
    Cafionix — Cafe + Bionix (modern cafe vibe)
    Grillora — Grill + Aura (perfect grill)
    Mealvix — Meal + Vix (quick, quality meals)
    Restolina — Restaurant +olina (soft, warm dining)
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
                <img id="previewImage" src="{{ asset('images/user-interface/restaurant/mobile-cafedra-hero.webp') }}" alt="Preview Image" class="img-fluid rounded shadow">
                <div class="mt-5">
                    <button onclick="window.location.href='{{ route('estimates.restaurant') }}'" class="btn btn-get-design me-2">
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
            cafedra: {
                hero: "{{ asset('images/user-interface/restaurant/mobile-cafedra-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/mobile-cafedra-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/mobile-cafedra-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/mobile-cafedra-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/mobile-cafedra-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/mobile-cafedra-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/mobile-cafedra-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/mobile-cafedra-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/mobile-cafedra-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/mobile-cafedra-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/mobile-cafedra-admin.webp') }}"
            },
            cafionix: {
                hero: "{{ asset('images/user-interface/restaurant/mobile-cafionix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/mobile-cafionix-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/mobile-cafionix-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/mobile-cafionix-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/mobile-cafionix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/mobile-cafionix-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/mobile-cafionix-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/mobile-cafionix-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/mobile-cafionix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/mobile-cafionix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/mobile-cafionix-admin.webp') }}"
            },
            grillora: {
                hero: "{{ asset('images/user-interface/restaurant/mobile-grillora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/mobile-grillora-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/mobile-grillora-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/mobile-grillora-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/mobile-grillora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/mobile-grillora-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/mobile-grillora-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/mobile-grillora-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/mobile-grillora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/mobile-grillora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/mobile-grillora-admin.webp') }}"
            },
            mealvix: {
                hero: "{{ asset('images/user-interface/restaurant/mobile-mealvix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/mobile-mealvix-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/mobile-mealvix-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/mobile-mealvix-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/mobile-mealvix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/mobile-mealvix-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/mobile-mealvix-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/mobile-mealvix-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/mobile-mealvix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/mobile-mealvix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/mobile-mealvix-admin.webp') }}"
            },
            restolina: {
                hero: "{{ asset('images/user-interface/restaurant/mobile-restolina-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/mobile-restolina-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/mobile-restolina-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/mobile-restolina-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/mobile-restolina-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/mobile-restolina-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/mobile-restolina-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/mobile-restolina-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/mobile-restolina-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/mobile-restolina-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/mobile-restolina-admin.webp') }}"
            }
        },
        desktop: {
            cafedra: {
                hero: "{{ asset('images/user-interface/restaurant/desktop-cafedra-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/desktop-cafedra-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/desktop-cafedra-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/desktop-cafedra-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/desktop-cafedra-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/desktop-cafedra-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/desktop-cafedra-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/desktop-cafedra-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/desktop-cafedra-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/desktop-cafedra-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/desktop-cafedra-admin.webp') }}"
            },
            cafionix: {
                hero: "{{ asset('images/user-interface/restaurant/desktop-cafionix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/desktop-cafionix-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/desktop-cafionix-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/desktop-cafionix-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/desktop-cafionix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/desktop-cafionix-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/desktop-cafionix-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/desktop-cafionix-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/desktop-cafionix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/desktop-cafionix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/desktop-cafionix-admin.webp') }}"
            },
            grillora: {
                hero: "{{ asset('images/user-interface/restaurant/desktop-grillora-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/desktop-grillora-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/desktop-grillora-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/desktop-grillora-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/desktop-grillora-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/desktop-grillora-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/desktop-grillora-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/desktop-grillora-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/desktop-grillora-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/desktop-grillora-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/desktop-grillora-admin.webp') }}"
            },
            mealvix: {
                hero: "{{ asset('images/user-interface/restaurant/desktop-mealvix-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/desktop-mealvix-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/desktop-mealvix-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/desktop-mealvix-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/desktop-mealvix-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/desktop-mealvix-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/desktop-mealvix-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/desktop-mealvix-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/desktop-mealvix-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/desktop-mealvix-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/desktop-mealvix-admin.webp') }}"
            },
            restolina: {
                hero: "{{ asset('images/user-interface/restaurant/desktop-restolina-hero.webp') }}",
                menu: "{{ asset('images/user-interface/restaurant/desktop-restolina-menu.webp') }}",
                home: "{{ asset('images/user-interface/restaurant/desktop-restolina-home.webp') }}",
                product: "{{ asset('images/user-interface/restaurant/desktop-restolina-product.webp') }}",
                footer: "{{ asset('images/user-interface/restaurant/desktop-restolina-footer.webp') }}",
                signup: "{{ asset('images/user-interface/restaurant/desktop-restolina-signup.webp') }}",
                login: "{{ asset('images/user-interface/restaurant/desktop-restolina-login.webp') }}",
                account: "{{ asset('images/user-interface/restaurant/desktop-restolina-account.webp') }}",
                contact: "{{ asset('images/user-interface/restaurant/desktop-restolina-contact.webp') }}",
                checkout: "{{ asset('images/user-interface/restaurant/desktop-restolina-checkout.webp') }}",
                admin: "{{ asset('images/user-interface/restaurant/desktop-restolina-admin.webp') }}"
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
    let currentTheme = 'cafedra';
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
