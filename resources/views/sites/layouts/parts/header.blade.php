<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Green</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto"><img src="{{ asset('public/frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('sites-home') }}">HOME</a></li>
          <li class="dropdown"><a href="{{ route('about-us') }}"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('company-profile') }}">Company Profile</a></li>
              <li><a href="{{ route('managing-directors-message') }}">Managing Director’s Message</a></li>
              <li><a href="{{ route('company-values') }}">Company Values</a></li>
              <li><a href="{{ route('organogram') }}">Organogram</a></li>
              <li><a href="{{ route('corporate-culture') }}">Corporate Culture</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('services') }}">SERVICES</a></li>
          <li class="dropdown"><a href="{{ route('propucts') }}"><span>OUR PRODUCTS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('knit-fabric') }}">Knit Fabric</a></li>
              <li><a href="{{ route('woven-fabric') }}">Woven Fabric</a></li>
              <li><a href="{{ route('propucts') }}">Other Fabric</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="{{ route('buyers-brands') }}">BUYERS & BRANDS</a></li>
          <li><a class="nav-link scrollto" href="{{ route('certifications') }}">CERTIFICATIONS</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }} ">CONTACT</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
