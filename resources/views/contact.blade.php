@extends('layouts.app')

@section('content')

<!-- ===== Contact Title Section ===== -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h1 class="mt-5 mb-4 fw-bold split-title">
            <span>Get In</span> <span>Touch</span>
        </h1>
        <p class="text-center text-muted mb-1 small">
            Looking for reliable software solutions? Send us a message—our team is ready to assist you with your digital needs.
        </p>
    </div>
</section>

<!-- ===== Contact Address Section Start ===== -->
<section class="py-0 my-5 bg-white">
    <div class="container">
        <div class="card shadow-none border-0">
            <div class="row g-0">
                <div class="col-md-6 border-end p-5">
                    <div class="h-100">
                        <h4 class="fw-bold mb-3"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Bangladesh Office</h4>
                        <p><i class="fas fa-location-arrow me-2 text-muted"></i>Level-4, House#34, Lane# 6/2, Road#20/B, DUIP Plot, Block D, Mirpur-12, Dhaka-1216</p>
                        <p><i class="fas fa-phone-alt me-2 text-muted"></i>+880 1718 837 689</p>
                        <p><i class="fas fa-envelope me-2 text-muted"></i>info@4axiz.com</p>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="h-100">
                        <h4 class="fw-bold mb-3"><i class="fas fa-map-marker-alt me-2 text-danger"></i>USA Office</h4>
                        <p><i class="fas fa-location-arrow me-2 text-muted"></i>8120 Jennings Drive, Suite 128 C, Business and Community Service Bldg, Cedar Falls, IA 50613-0130</p>
                        <p><i class="fas fa-phone-alt me-2 text-muted"></i>+031 9961 27 82</p>
                        <p><i class="fas fa-envelope me-2 text-muted"></i>4axizusa@4axiz.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ===== Contact Form Section ===== -->
<section class="py-5 bg-light">
    <div class="container pt-4 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card shadow-sm border-0">
                    <h3 class="card-header text-white text-center" style="background-color: #FF0D0D;">Contact Us</h3>
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
                                    <option value="">-- Select Service --</option>
                                    <option>AR App</option>
                                    <option>AI Services</option>
                                    <option>Blockchain</option>
                                    <option>Cloud Apps</option>
                                    <option>Cyber Security</option>
                                    <option>Domain & Hosting</option>
                                    <option>Machine Learning</option>
                                    <option>Mobile Apps</option>
                                    <option>Product Design</option>
                                    <option>QA Services</option>
                                    <option>SaaS Dev</option>
                                    <option>VR App</option>
                                    <option>Web Dev</option>
                                    <option>Other</option>
                                </select>
                                @error('inquiry')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Type project details</label>
                                <textarea name="message" rows="5" class="form-control" placeholder="Write your project details here..." required></textarea>
                                @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <button type="submit" class="btn w-100 text-white" style="background-color: #FF0D0D;">Send Message</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
