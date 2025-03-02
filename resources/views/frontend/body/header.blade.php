  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <h6 id="breakingNews" class="text-center p-2" style="color: #EA232A; background-color:#000"></h6>
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/LOGO DJLI.png') }}" alt="" width="100%"></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('branches') }}" class="{{ Route::currentRouteName() == 'branches' ? 'active' : '' }}">Branches</a></li>
            <li><a href="{{ route('services') }}" class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('gallery') }}" class="{{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}">Gallery</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a></li>
            <li><a href="{{ route('applyNow') }}" class="{{ Route::currentRouteName() == 'applyNow' ? 'active' : '' }}">Apply Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <script>
    const text = "DHAKA JAPANESE LANGUAGE INSTITUTE - ダッカ日本語学院";
let index = 0;

function typeEffect() {
  if (index < text.length) {
    document.getElementById("breakingNews").innerHTML += text.charAt(index);
    index++;
    setTimeout(typeEffect, 100);
  } else {
    setTimeout(() => {
      document.getElementById("breakingNews").innerHTML = "";
      index = 0;
      typeEffect();
    }, 2000); // Reset after 2 seconds
  }
}

typeEffect();

  </script>
