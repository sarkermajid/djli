  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <marquee behavior="scroll" direction="left" scrollamount="15"
          style=" background-image: linear-gradient(
        to right,
        #093028 0%,
        #237a57 51%,
        #093028 100%
    ); font-size: 18px; font-weight: bold; color:#fff">
          DHAKA JAPANESE LANGUAGE INSTITUTE - ダッカ日本語学院
      </marquee>
      <div class="container d-flex align-items-center">
          <h1 class="logo me-auto"><a href="{{ route('home') }}"><img
                      src="{{ asset('frontend/assets/img/LOGO DJLI.png') }}" alt="" width="100%"></a></h1>
          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  <li><a href="{{ route('home') }}"
                          class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a></li>
                  <li><a href="{{ route('about') }}"
                          class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a></li>
                  <li><a href="{{ route('branches') }}"
                          class="{{ Route::currentRouteName() == 'branches' ? 'active' : '' }}">Branches</a></li>
                  <li><a href="{{ route('services') }}"
                          class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Services</a></li>
                  <li><a href="{{ route('gallery') }}"
                          class="{{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}">Gallery</a></li>
                  <li><a href="{{ route('contact') }}"
                          class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a></li>
                  <li><a href="{{ route('applyNow') }}"
                          class="{{ Route::currentRouteName() == 'applyNow' ? 'active' : '' }}">Apply Now</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

          <div class="header-social-links d-flex">
              <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
              <a href="https://www.facebook.com/dhakajapaneselanguageinstitute" target="_blank" class="facebook"><i
                      class="bu bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
          </div>

      </div>
  </header><!-- End Header -->
