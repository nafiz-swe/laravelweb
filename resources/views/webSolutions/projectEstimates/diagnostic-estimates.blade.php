@extends('layouts.app')
@section('title', 'Diagnostic Website Estimates')

@section('content')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endpush

<style>
  .theme-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 60px;
    padding: 40px;
    border: 1px solid #ddd;
    /* border-radius: 14px; */
    background-color: #fff;
    box-shadow: 0 6px 20px rgba(0,0,0,0.06);
  }
  .theme-left {
    flex: 1 1 58%;
    padding-right: 20px;
  }
  .theme-right {
    flex: 1 1 38%;
    text-align: right;
  }
  .theme-right img {
    max-width: 100%;
    /* border-radius: 12px; */
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  .theme-price-top {
    font-size: 22px;
    animation: priceColorChange 3s infinite;
    font-weight: bold;
    margin-bottom: 10px;
  }
  @keyframes priceColorChange {
    0%   { color: #0092b8; }
    50%  { color: #ef0a1b; }
    100% { color: #0092b8; }
    }
  .theme-title {
    font-size: 28px;
    font-weight: bold;
    color: #0092b8;
    margin-bottom: 20px;
  }
  .option-list {
    list-style: none;
    padding-left: 0;
    line-height: 1.9;
  }
  .option-list li i {
    margin-right: 8px;
    color: #0092b8;
  }
  .uiux-section {
    background-color: #f9f9f9;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    color: #0092b8;
    margin-top: 80px;
  }
  @media (max-width: 991px) {
  .theme-section {
    flex-direction: column;
  }
  .theme-left, .theme-right {
    flex: 100%;
    text-align: left;
    padding: 0;
    margin-top: 20px;
  }
}
.theme-right {
  flex: 1 1 38%;
  display: flex;
  flex-direction: column;
  align-items: center; /* সব কিছু center-align */
  text-align: center;
}

.theme-right img {
  max-width: 100%;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  margin-bottom: 20px;
}

.btn-contact {
  margin-top: 25px;
  margin-bottom: 15px;
  padding: 10px 28px;
  background-color: #0092b8;
  color: #fff;
  font-weight: 600;
  border: none;
  border-radius: 6px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn-contact:hover {
  background-color: #00b8db;
}

.theme-meta {
  margin-top: 10px;
  text-align: center;
  font-size: 15px;
  color: #555;
}

.theme-meta .purchase {
  margin-bottom: 6px;
  font-weight: 500;
}

.theme-meta .rating {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}

.theme-meta .stars {
  color: gold;
  font-size: 14px;
}

.theme-meta .rating-point {
  font-weight: 600;
  color: #888;
  font-size: 14px;
}
</style>

<section class="py-5">
  <div class="container">

@php
  $themes = [
    [ 'title' => 'Theme 1: Biovista', 'color' => 'Emerald Green', 'category' => 'Mens Fashion', 'price' => '20,950', 'total' => '23,950 BDT', 'img' => 'mobile-biovista-hero.webp', 'purchase' => 138, 'rating' => 4.5 ],
    [ 'title' => 'Theme 2: Diagnovera', 'color' => 'Sky Blue', 'category' => 'Ladies Fashion', 'price' => '21,950', 'total' => '24,950 BDT', 'img' => 'mobile-diagnovera-hero.webp', 'purchase' => 204, 'rating' => 5 ],
    [ 'title' => 'Theme 3: Mediora', 'color' => 'Deep Blue', 'category' => 'Both Fashion', 'price' => '22,950', 'total' => '25,950 BDT', 'img' => 'mobile-mediora-hero.webp', 'purchase' => 97, 'rating' => 4 ],
    [ 'title' => 'Theme 4: Neurovia', 'color' => 'Navy & White', 'category' => 'Electric', 'price' => '23,950', 'total' => '26,950 BDT', 'img' => 'mobile-neurovia-hero.webp', 'purchase' => 151, 'rating' => 3.5 ],
    [ 'title' => 'Theme 5: Pathodex', 'color' => 'Red & Grey', 'category' => 'Grocery', 'price' => '21,950', 'total' => '24,950 BDT', 'img' => 'mobile-pathodex-hero.webp', 'purchase' => 176, 'rating' => 5 ]
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
            <img src="{{ asset('images/user-interface/diagnostic/' . $theme['img']) }}" alt="{{ $theme['title'] }}">

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
        <li>Technologies: Laravel, PHP, Bootstrap, JS, HTML, CSS, MySQL</li>
        <li>Hosting: Contabo Server</li>
        <li>Security: Cloudflare Protection</li>
        <li>Control Panel: CloudPanel</li>
      </ul>
    </div>
  </div>
</section>
@endsection
