@extends('layouts.app')
@section('title', 'Portfolio Website Estimates')
@section('content')

<section class="laravelweb-page-hero text-center">
  <div class="container">
    <h1 class="text-center fw-bold mb-3">
      <span class="brand-highlight">Portfolio</span> Laravel theme
    </h1>
    <p class="text-center text-muted mb-2 small">Ready-to-launch portfolio website themes with free hosting, fast delivery, and essential branding features like logo, banner, and domain support.</p>
    <div class="hero-animated-bar mb-5"></div>
</div>
</section>

<section class="py-5">
  <div class="container">

    @php
      $themes = [
        [ 'title' => 'Theme 1: Doccura', 'color' => 'Emerald Green', 'category' => 'Mens Fashion', 'price' => '20,950', 'total' => '23,950 BDT', 'img' => 'mobile-biovista-hero.webp', 'purchase' => 138, 'rating' => 4.5 ],
        [ 'title' => 'Theme 2: Enginuva', 'color' => 'Sky Blue', 'category' => 'Ladies Fashion', 'price' => '21,950', 'total' => '24,950 BDT', 'img' => 'mobile-diagnovera-hero.webp', 'purchase' => 204, 'rating' => 5 ],
        [ 'title' => 'Theme 3: Lawverra', 'color' => 'Deep Blue', 'category' => 'Both Fashion', 'price' => '22,950', 'total' => '25,950 BDT', 'img' => 'mobile-mediora-hero.webp', 'purchase' => 97, 'rating' => 4 ],
        [ 'title' => 'Theme 4: Studiora', 'color' => 'Navy & White', 'category' => 'Electric', 'price' => '23,950', 'total' => '26,950 BDT', 'img' => 'mobile-neurovia-hero.webp', 'purchase' => 151, 'rating' => 3.5 ],
        [ 'title' => 'Theme 5: Tutorix', 'color' => 'Red & Grey', 'category' => 'Grocery', 'price' => '21,950', 'total' => '24,950 BDT', 'img' => 'mobile-pathodex-hero.webp', 'purchase' => 176, 'rating' => 5 ]
      ];
    @endphp

    @foreach ($themes as $theme)
      <div class="theme-section">
        <div class="theme-left">
          <div class="theme-price-top">{{ $theme['total'] }}</div>
          <div class="theme-title">{{ $theme['title'] }}</div>
          <ul class="option-list">
            <li><i class="fas fa-palette"></i><strong>Theme Color:</strong> {{ $theme['color'] }}</li>
            <li><i class="fas fa-layer-group"></i><strong>Category:</strong> {{ $theme['category'] }}</li>
            <li><i class="fas fa-tags"></i><strong>Theme Price:</strong> ৳{{ $theme['price'] }}</li>
            <li><i class="fas fa-server"></i><strong>Hosting:</strong> Free</li>
            <li><i class="fas fa-code"></i><strong>Website Setup:</strong> Free</li>
            <li><i class="fab fa-facebook"></i><strong>Facebook Page Setup:</strong> Free</li>
            <li><i class="fas fa-truck"></i><strong>Project Delivery:</strong> 3–5 Days after design confirmation</li>
          </ul>

          <p class="mt-4 mb-1"><strong>Additional Cost</strong></p>
          <ul class="option-list">
            <li><i class="fas fa-image"></i>Banner, Logo, Variant Images: ৳1000 - ৳2000</li>
            <li><i class="fas fa-globe-asia"></i>Domain Price: ৳800 - ৳2000</li>
            <li><i class="fas fa-handshake"></i>Service: 1 Month Free; then ৳200–৳2000 per update</li>
          </ul>
        </div>

        <div class="theme-right">
          <img src="{{ asset('images/user-interface/portfolio/' . $theme['img']) }}" alt="{{ $theme['title'] }}">
          <a href="{{ url('/contact') }}" class="btn-contact">Get this theme</a>

          <div class="theme-meta">
            <div class="purchase">
              <i class="fas fa-users"></i> {{ $theme['purchase'] }}+ Purchased
            </div>
            <div class="rating">
              <span class="stars">
                @for ($i = 1; $i <= floor($theme['rating']); $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @if (fmod($theme['rating'], 1) >= 0.5)
                  <i class="fas fa-star-half-alt"></i>
                @endif
              </span>
              <span class="rating-point">({{ number_format($theme['rating'], 1) }})</span>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    {{-- UI/UX Section --}}
    <div class="uiux-section">
      <h4 class="fw-bold mb-3">UI/UX & Development Stack</h4>
      <ul class="option-list">
        <li><i class="fas fa-code"></i> Technologies: Laravel, PHP, Bootstrap, JS, HTML, CSS, MySQL</li>
        <li><i class="fas fa-server"></i> Hosting: Contabo Server</li>
        <li><i class="fas fa-shield-alt"></i> Security: Cloudflare Protection</li>
        <li><i class="fas fa-cogs"></i> Control Panel: CloudPanel</li>
      </ul>
    </div>
  </div>
</section>
@endsection
