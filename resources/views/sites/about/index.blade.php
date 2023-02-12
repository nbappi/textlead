@extends('sites.layouts.master')

@section('content')
   
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row saparator">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('public/frontend/assets/img/about/about-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>About Tex Lead Asia Ltd.</h3>
            <p>
            Tex Lead Asia has started its business around the year 2008 with a view to supply quality
             fabric to the local garment factories and buying houses. 
             Tex Lead Asia is one of the largest quality fabric supplier in Bangladesh. <br /> <br />
             We import all type of quality fabric as per buyer’s order from every corner of the world. 
             We especially import fabric from China, India and Indonesia. <br /> <br />
             We have an individual office for the business in China which helps us to maintain our standard and commitments. 
             Our main focus is to satisfy our buyer’s requirements.
            </p>
          </div>
        </div>

        <div class="row saparator">
          <div class="col-lg-6 order-1 order-lg-1">
            <img src="{{ asset('public/frontend/assets/img/about/about-2.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
            <h3>Our Vision</h3>
            <p>
            Our vision is to be one of the world class trading house in Bangladesh for catering the diverse range of requirements of 
            our worthy clients with regard to textile and apparel trade. We strive for the high business growth of our worthy 
            clients while providing them value added services. <br /> <br />
            Every individual at Corporate Field is specially trained to persuade 
            the company’s goals while performing the services at his/her respective position. 
            Therefore, be rest assured that your business interests will be in the hand of a world class professional team.
            </p>
          </div>
        </div>

        <div class="row saparator">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('public/frontend/assets/img/about/about-3.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Our Mission.</h3>
            <p>
            Our core mission is to maximize the business volume and profitability of our valued clients. 
            Therefore, being a prominent trading house for textile and apparel sector, we are committed to facilitate the 
            buyers as well as the sellers for negotiating at the best deals with the full satisfaction of our clients.<br />
             We are pursuing the client’s business requirements with our full devotion and utmost hard work and honesty.
            </p>
          </div>
        </div>
        

      </div>
    </section><!-- End About Us Section -->

@endsection