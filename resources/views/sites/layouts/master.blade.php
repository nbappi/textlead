<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', 'TEXLEAD ASIA LIMITED')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('sites.layouts.parts.style')
</head>

<body>

  @include('sites.layouts.parts.topbar')

  @include('sites.layouts.parts.header')

    @if (Request::path() == '/') 
      @include('sites.layouts.parts.slider')
    @endif

  

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('sites.layouts.parts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('sites.layouts.parts.scripts')

</body>

</html>