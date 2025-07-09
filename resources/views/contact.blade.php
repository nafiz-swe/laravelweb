@extends('layouts.app')
@section('title', 'Contact | laravelweb')
@section('content')

<!-- ===== Contact Title Section ===== -->
<section class="laravelweb-page-hero text-center">
    <div class="container">
        <h1 class="text-center fw-bold mb-3">
            Get In <span class="brand-highlight">Touch</span>
        </h1>
        <p class="text-center text-muted mb-2 small">
            Looking for reliable software solutions? Send us a message—our team is ready to assist you with your digital needs.
        </p>
        <div class="hero-animated-bar mb-5"></div>

    </div>
</section>

@push('scripts')
<script>
    @if(session('success'))
        let successData = @json(session('success'));
        toastr.options = {
            "closeButton": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": 10000,             // Hide after 10 Seconds
            "extendedTimeOut": 5000,      // extended after hover
            "showDuration": 300,          // show animation duration
            "hideDuration": 1000,         // hide animation duration
            "escapeHtml": false,
            "iconClasses": {
                success: ''               // custom design
            }
        };
        toastr.clear();                  // previous toast clear
        toastr.success(successData);     // show new custom toast
    @endif
</script>
@endpush

<!-- ===== Contact Form Section ===== -->
<section class="py-5">
    <div class="container pt-4 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif -->

                <div class="card shadow-sm border-0">
                    <h3 class="card-header text-white text-center py-4" style="background-color: oklch(60.9% 0.126 221.723);">Contact Us</h3>
                    <div class="card-body p-4 bg-white shadow">
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" name="name" class="form-control" required>
                                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                                @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="inquiry" class="form-label">Your Inquiry About</label>
                                <select name="inquiry" id="inquiry" class="form-select" required>
                                    <option value="">-- Select Web Solution --</option>
                                    <option value="Diagnostic Center">Diagnostic Center</option>
                                    <option value="E-commerce">E-commerce</option>
                                    <option value="Portfolio/Personal Website">Portfolio/Personal Website</option>
                                    <option value="Resort/Hotel Booking">Resort/Hotel Booking</option>
                                    <option value="Restaurant/Cafe Shop">Restaurant/Cafe Shop</option>
                                    <option value="Salon/Beauty Parlor">Salon/Beauty Parlor</option>
                                    <option value="School Management">School Management</option>
                                    <option value="Tuition Center">Tuition Center</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('inquiry')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <!-- Theme selector -->
                            <div class="mb-3" id="theme-section" style="display: none;">
                                <label class="form-label">Your Preferred Laravel Theme</label>
                                <select name="theme" id="theme" class="form-select">
                                    <option value="">-- Select Theme --</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Type Project Details</label>
                                <textarea name="message" rows="5" class="form-control" placeholder="Write your project details here..." required></textarea>
                                @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <button type="submit" class="btn w-100 text-white py-2 btn-contact">Send Message</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    const themes = {
        "Diagnostic Center": ["Biovista", "Diagnovera", "Mediora", "Neurovia", "Pathodex"],
        "E-commerce": ["Greenora", "Shoponex", "Techovia", "Trendaxo", "Zarabella"],
        "Portfolio/Personal Website": ["Doccura", "Enginuva", "Lawverra", "Studiora", "Tutorix"],
        "Resort/Hotel Booking": ["Havenox", "Luxavera", "Restova", "Seanova", "Suntherra"],
        "Restaurant/Cafe Shop": ["Cafedra", "Cafionix", "Grillora", "Mealvix", "Restolina"],
        "Salon/Beauty Parlor": ["Beautonix", "Glowvanta", "Glowtica", "Salonova", "Parlorix"],
        "School Management": ["Edunex", "Eduvanta", "Learnova", "Scholix", "Scholora"],
        "Tuition Center": ["Hometora", "Tutorella", "Tutorflare", "Tutornova", "Tutorvanta"]
    };

    document.getElementById('inquiry').addEventListener('change', function () {
        const selected = this.value;
        const themeSection = document.getElementById('theme-section');
        const themeSelect = document.getElementById('theme');

        // Reset themes
        themeSelect.innerHTML = `<option value="">-- Select Theme --</option>`;

        if (themes[selected]) {
            themeSection.style.display = 'block';
            themes[selected].forEach(theme => {
                const option = document.createElement('option');
                option.value = theme;
                option.text = theme;
                themeSelect.appendChild(option);
            });
        } else {
            themeSection.style.display = 'none';
        }
    });
</script>

@endsection
