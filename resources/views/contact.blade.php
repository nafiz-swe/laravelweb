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
        <div class="hero-animated-bar"></div>

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
                                <select name="inquiry" class="form-select" required>
                                    <option value="">-- Select Web Solution --</option>
                                    <option>Diagnostic Center</option>
                                    <option>E-commerce</option>
                                    <option>Portfolio/Personal Website</option>
                                    <option>Resort/Hotel</option>
                                    <option>Restaurant/Cafe Shop</option>
                                    <option>Salon/Beauty Parlor</option>
                                    <option>School Management</option>
                                    <option>Tuition Center</option>
                                    <option>Other</option>
                                </select>
                                @error('inquiry')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Type project details</label>
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

@endsection
