@extends('sites.layouts.master')

@section('content')
   
  <!-- ======= Our Clients Section ======= -->
  <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Our Certifications & Achievements</h2>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('public/frontend/assets/img/certifications/certification-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/frontend/assets/img/certifications/certification-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/frontend/assets/img/certifications/certification-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/frontend/assets/img/certifications/certification-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/frontend/assets/img/certifications/certification-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/frontend/assets/img/certifications/certification-6.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

@endsection