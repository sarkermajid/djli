@extends('frontend.index')

@section('frontend')
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us" style="margin-top: 80px;">
            <div class="container" data-aos="fade-up">

              <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                  <h2>Eum ipsam laborum deleniti velitena</h2>
                  <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                  </ul>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                </div>
              </div>

            </div>
          </section><!-- End About Us Section -->

          <!-- ======= Our Team Section ======= -->
          <section id="team" class="team section-bg">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Our <strong>Team</strong></h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                      <img src="{{ asset('frontend/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                      <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                      <img src="{{ asset('frontend/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                      <img src="{{ asset('frontend/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Our Team Section -->
@endsection
