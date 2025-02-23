@extends('frontend.index')

@section('frontend')
        <!-- ======= Gallery Section ======= -->
        <section id="portfolio" class="portfolio" style="margin-top: 80px;">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Gallery</h2>
                </div>
              <div class="row portfolio-container" data-aos="fade-up">
                @foreach ($galleries as $gallery)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <img src="{{ asset($gallery->image) }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{ $gallery->title }}</h4>
                    <a href="{{ asset($gallery->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $gallery->title }}"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                  </div>
                </div> --}}

              </div>
            </div>
          </section><!-- End Portfolio Section -->
@endsection
