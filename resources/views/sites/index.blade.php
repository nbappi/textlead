@extends('sites.layouts.master')

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Welcome to Texlead Asia Limited</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('public/frontend/assets/img/home-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
                Texlead Asia Limited is a leading fabric supplying company in Bangladesh 
                since last 1 decade. We are doing all kinds of woven fabrics for tops 
                & bottoms also we are doing some knit fabrics like Fleece, Sherpa, Fur 
                and mixed yarn Single Jersey. 
                <br /><br />
                Our company has been supplying all kinds of fabrics to the renowned 
                garment factories and buying houses with good reputation since its establishment. We do believe commitment, 
                quality & prompt service with all of our valuable clients. Our trained quality control officers continuously 
                staying in the mills in time of any bulk production to ensure the fabric quality and commitment. We have 
                several offices in China, which help us to maintain the quality & delivery of every shipment from main land 
                China.
                <br />
                Our main focus is to satisfy our buyers according to their needs and requirements. We always try to 
                supply best quality fabric with competitive price.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Our Product Categories</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('public/frontend/assets/img/products/product-1.jpg') }}" alt="">
              <div class="social">
                <button type="button" class="btn btn-outline-success">
                    <a href="{{ route('knit-fabric') }}">Knit Fabric</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('public/frontend/assets/img/products/product-2.jpg') }}" alt="">
              <div class="social">
                <button type="button" class="btn btn-outline-success">
                    <a href="{{ route('woven-fabric') }}">Woven Fabric</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('public/frontend/assets/img/products/product-3.jpg') }}" alt="">
              <div class="social">
                <button type="button" class="btn btn-outline-success">
                    <a href="{{ route('propucts') }}">Other Fabric</a>
                </button>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">


        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
                <div class="choose">
                      <h2>
                        Why Choose Us ?
                      </h2>
                  </div>
                <div class="fusion-text">
                  <ul class="arrow">
                    <li>To get on time product supply</li>
                    <li>To get the support of expert multi sourcing team</li>
                    <li>To get the best price as the benefit of cost effectiveness</li>
                    <li>We are certified and trusted partner</li>
                  </ul>
                </div>
                <div class="fusion-clearfix"></div>
            
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
               <img src="{{ asset('public/frontend/assets/img/home-2.jpg') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection