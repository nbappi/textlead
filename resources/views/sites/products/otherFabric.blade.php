@extends('sites.layouts.master')

@section('content')
   
   <!-- ======= Team Section ======= -->
   <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Other Product</h2>
        </div>

        <div class="row">

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

@endsection