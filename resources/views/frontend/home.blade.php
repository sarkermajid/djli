@extends('frontend.index')

@section('frontend')
    <!-- ======= Hero Section ======= -->
    <img src="{{ asset('frontend/assets/img/slide/hero-img.jpeg') }}" alt="" width="100%">
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us" style="margin-top: 30px;">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-12" data-aos="fade-right">
                        <h2>DHAKA JAPANESE LANGUAGE INSTITUTE</h2>
                        <p style="font-size: 18px;">journey, we established the Dhaka Japanese Language Institute, not just as a language school but as a gateway to countless opportunities.

                            We are more than just a language institute—we are a team of passionate individuals who believe in the power of education to transform lives. Our skilled team is dedicated to guiding every student with care, ensuring they achieve their academic and career aspirations.

                            Our journey began with a simple vision: to help students study abroad and experience new cultures. Over the years, we have supported thousands of students in realizing their potential and reaching new heights in their academic and personal lives.</p>
                    </div>
                    <div class="col-lg-12" data-aos="fade-right">
                        <a href="" class="btn mt-4 mb-4" style="border:1px solid #EA232A; background-color:#EA232A; color:white">Apply Here</a>
                        <h3>Why Apply Online?</h3>
                        <p>Applying online offers a hassle-free and efficient process to kickstart your journey toward studying in Japan. Here’s why you should apply online today:</p>
                        <p><i class="ri-check-double-line"></i> Convenience – Apply from anywhere, anytime, without visiting our office.</p>
                        <p><i class="ri-check-double-line"></i> Faster Processing – Submitting your application online speeds up the review process.</p>
                        <p><i class="ri-check-double-line"></i> 24/7 Accessibility – Get access to application status updates and important information anytime.</p>
                        <p><i class="ri-check-double-line"></i> Personalized Support – Our team is available to assist you throughout the application process.</p>
                        <p><i class="ri-check-double-line"></i> Error-Free Submission – Our guided online application minimizes mistakes and ensures completeness.</p>
                        <p><i class="ri-check-double-line"></i> Data Security – Your personal information is protected with advanced security measures, ensuring confidentiality and privacy.</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <section id="services" class="services section-bg" style="margin-top: 80px;">
            <div class="section-title">
                <h2>Services</h2>
              </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Language Schools and Universities Selection</h4>
                            <p>Choosing the right language school or university is a crucial step in your academic and
                                professional journey. We assist you in selecting the best institution that aligns with your
                                goals, preferences, and budget. Our team provides detailed insights into course offerings,
                                faculty, tuition fees, scholarship opportunities, and admission requirements. Whether you're
                                looking for a short-term language program or a full-degree course, we guide you through the
                                selection process to ensure you make an informed decision.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Interview Preparation
                            </h4>
                            <p>A well-prepared interview can make all the difference in securing your place at a top
                                university
                                or language school. Our expert guidance includes mock interviews, commonly asked questions,
                                and
                                strategies to present yourself confidently. We focus on improving your communication skills,
                                body language, and responses to ensure you leave a lasting impression on the admission
                                panel.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Application
                            </h4>
                            <p>The application process can be complex and time-consuming. We provide end-to-end support in
                                preparing and submitting your application, ensuring all documents are accurate and complete.
                                Our
                                team assists with personal statements, recommendation letters, and any additional
                                requirements
                                specific to your chosen institution. With our expertise, we maximize your chances of
                                acceptance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Application
                            </h4>
                            <p>The application process can be complex and time-consuming. We provide end-to-end support in
                                preparing and submitting your application, ensuring all documents are accurate and complete.
                                Our
                                team assists with personal statements, recommendation letters, and any additional
                                requirements
                                specific to your chosen institution. With our expertise, we maximize your chances of
                                acceptance.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Accommodation Support
                            </h4>
                            <p>Finding the right place to stay is crucial for a comfortable study experience. We help you
                                explore different accommodation options, whether it's university dormitories, shared
                                apartments,
                                or homestays. Our team assists in finding safe, affordable, and convenient housing based on
                                your
                                budget and preferences, making your transition to a new country hassle-free.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section id="services" class="services section-bg">
            <div class="section-title">
                <h2>Branches</h2>
              </div>
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($branches as $branch)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <img src="{{ asset($branch->image) }}" width="100%" style="border-radius: 20px; border:2px solid #EA232A; margin-bottom:10px;" alt="">
                            <h4>{{ $branch->branch_name }}</h4>
                            <address>{{ $branch->address }}</address>
                            <p>{{ $branch->director_name }} (Director)</p>
                            <P>Phone: {{ $branch->phone }}</P>
                            <p>Email: {{ $branch->email }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

            <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection
